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

        $start_date = request()->start_date ?? null;
        $end_date = request()->end_date ?? null;
        $status = request()->status ?? null;
    
        if (Auth::check()) {
            if (isset($start_date)) {
                $query->whereDate('updated_at', '>=', $start_date);
            }
    
            // Filter by end date
            if (isset($end_date)) {
                $query->whereDate('updated_at', '<=', $end_date);
            }
    
            // Filter by status
            if (isset($status)) {
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
