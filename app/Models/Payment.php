<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    protected $fillable = [
        'user_id',
        'customer_id',
        'gateway_id',
        'brand_id',
        'invoice_number',
        'package_name',
        'description',
        'price',
        'currency',
        'status',
        'tax',
        'remaining',
        'session_id',
    ];

    public static $rules = [
        'customer_id' => 'required',
        'gateway_id' => 'required',
        'brand_id' => 'required',
        'invoice_number' => 'required',
        'package_name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'currency' => 'required',
        'tax' => 'required',
        'remaining' => 'required',
    ];
}
