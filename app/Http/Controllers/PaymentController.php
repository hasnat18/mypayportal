<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Payment;
use App\Models\Gateway;
use App\Models\Brand;
use App\Models\Customer;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('gateway','customer','brand','user')->get();
        return view('payment.index',['payments' => $payments]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Payment::$rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        // Create the payment with the user_id included
        $payment = Payment::create(array_merge($request->all(), ['user_id' => auth()->user()->id,'status' => 'unpaid']));

        // Generate the link for customers proceed/71/ed_inv/INV1686971948
        $link = url("/proceed/{$payment->invoice_number}");
        
        if ($payment) {
            return response()->json(['message' => 'Payment created successfully', 'link' => $link], 201);
        } else {
            return response()->json(['message' => 'Failed to create payment'], 500);
        }
    }


    public function create(){
        $customers = Customer::all();
        $gateways = Gateway::all();
        $brands = Brand::all();
        return view('payment.create',[
            'customers' => $customers,
            'gateways' => $gateways,
            'brands' => $brands,
        ]);
    }

    public function edit($id){
        $payment = Payment::find($id);
        $customers = Customer::all();
        $gateways = Gateway::all();
        $brands = Brand::all();

        return view('payment.edit',[
            'customers' => $customers,
            'gateways' => $gateways,
            'brands' => $brands,
            'payment' => $payment,
        ]);
    }

    public function show(Payment $payment)
    {
        return $payment;
    }

    public function update(Request $request, Payment $payment)
    {
        $validator = Validator::make($request->all(), Payment::$rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $payment->update($request->all());
        
        if ($payment) {
            return response()->json(['message' => 'Payment updated successfully', 'payment' => $payment], 200);
        } else {
            return response()->json(['message' => 'Failed to update payment'], 500);
        }
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return back()->with('message','Payment deleted successfully');
    }

    public function proceed($invoice_number)
    {
        $payment = Payment::with('customer','gateway','brand')->where('invoice_number',$invoice_number)->first();

        return view('proceed',compact('payment'));
    }

    public function pay($invoice_number)
    {
        $payment = Payment::with('customer','gateway','brand')->where('invoice_number',$invoice_number)->first();
        // Calculate the total amount including tax
        $totalAmount = $payment->price + $payment->tax;

        $expirationTime = now()->addDays(7);

        // Set the secret key for Stripe API
        Stripe::setApiKey($payment->gateway->key2);
        // Create a Stripe Checkout session
        $response = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => $payment->currency,
                        'product_data' => [
                            'name' => $payment->package_name,
                            'images' => [asset($payment->brand->logo_path)],
                            'description' => $payment->description,
                        ],
                        'unit_amount' => $totalAmount * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'customer_email' =>  $payment->customer->email,
            'metadata' => [
                'expires_at' => $expirationTime->toDateTimeString(),
                'invoice_number' => $payment->invoice_number,
                'customer_name' => $payment->customer->first_name.' '.$payment->customer->last_name ,
                'package_description' => $payment->description,
            ],
            'mode' => 'payment',
            'success_url' => route('stripe_success') . "?session_id={CHECKOUT_SESSION_ID}&invoice_number=" . $payment->invoice_number,
            'cancel_url' => route('stripe_cancel'),
        ]);

        $payment = Payment::where('invoice_number',$payment->invoice_number)->first();

        $payment->update(['session_id' => $response->id]);

        return redirect()->away($response->url);
    }

    public function success(Request $request)
    {
        $payment = Payment::with('gateway','brand')->where('invoice_number',$request->invoice_number)->first();

        Stripe::setApiKey($payment->gateway->key2);

        if($payment) {
            $payment->status = 'paid'; // or some other status
            $payment->update();
        }

        $redirect_url = $payment->brand->redirect_url;

        return redirect()->away($redirect_url);
    }

    public function invoice($invoice)
    {
        $payment = Payment::with('gateway','customer','brand')->where('invoice_number',$invoice)->first();

        return view('invoice',compact('payment'));

    }
}

