<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'uid',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone_number',
        'address_line_1',
        'address_line_2',
        'city',
        'state_province',
        'postal_code',
        'country',
    ];

    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'email' => 'required',
        'phone_number' => 'required|string|max:255',
        'address_line_1' => 'required|string|max:255',
        'address_line_2' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'state_province' => 'required|string|max:255',
        'postal_code' => 'required|string|max:255',
        'country' => 'required|string|max:255',
    ];
}
