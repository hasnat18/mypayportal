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
    
            $usPaidAmount = 0;
            $usUnpaidAmount = 0;
    
            $gbpPaidAmount = 0;
            $gbpUnpaidAmount = 0;
    
            // Loop through payments to calculate amounts
            foreach ($payments as $payment) {
                // Calculate the total price including tax
                $totalPrice = $payment->price + $payment->tax;
    
                if ($payment->currency == 'usd') {
                    // Count paid and unpaid statuses
                    if ($payment->status == 'paid') {
                        $usPaidAmount += $totalPrice;
                    } elseif ($payment->status == 'unpaid') {
                        $usUnpaidAmount += $totalPrice;
                    }
                } elseif ($payment->currency == 'gbp') {
                    if ($payment->status == 'paid') {
                        $gbpPaidAmount += $totalPrice;
                    } elseif ($payment->status == 'unpaid') {
                        $gbpUnpaidAmount += $totalPrice;
                    }
                }
            }
    
            return view('dashboard', compact(
                'usPaidAmount',
                'usUnpaidAmount',
                'gbpPaidAmount',
                'gbpUnpaidAmount'
            ));
        }
    }
    
    
}
