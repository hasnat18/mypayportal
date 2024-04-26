<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;


class DashboardController extends Controller
{
    public function index() 
    {

        $query = Payment::with('gateway','brand');
        

        if (Auth::check()) {
    
        if (request()->has('start_date') || request()->has('end_date')) {
            $start_date = request()->start_date;
            $end_date = request()->end_date;
    
            // Extract the date part from 'updated_at' and filter
            $query->whereDate('updated_at', '>=', $start_date)
                  ->whereDate('updated_at', '<=', $end_date);
        }

        // Check for the 'status' field
        if (request()->has('status')) {
            $status = request()->status;
            $query->where('status', $status);
        }
    
        $payments = $query->orderBy('updated_at', 'desc')->get();
    
        $formattedPayments = [];

        $usPaidAmount = 0;
        $usUnpaidAmount = 0;

        $gbpPaidAmount = 0;
        $gbpUnpaidAmount = 0;

        //add tax

        
        foreach ($payments as $key => $item) {


            $price = $item->price + $item->tax;

            if ($item->currency == 'usd') {
                // Count paid and unpaid statuses
                if ($item->status == 'paid') {
                    $usPaidAmount += $item->price;
                } elseif ($item->status == 'unpaid') {
                    $usUnpaidAmount += $item->price;
                }
            }
    
            if ($item->currency == 'gbp') {
                if ($item->status == 'paid') {
                    $gbpPaidAmount += $item->price;
                } elseif ($item->status == 'unpaid') {
                    $gbpUnpaidAmount += $item->price;
                }
            }
        }
    
        return view('dashboard', compact(
            'usPaidAmount',
            'usUnpaidAmount',
            'gbpPaidAmount',
            'gbpUnpaidAmount',
        ));
        }

    }
    
}
