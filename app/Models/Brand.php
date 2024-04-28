<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_path',
        'redirect_url',
    ];

    public static $rules = [
        'name' => 'required',
        'logo_path' => 'required',
        'redirect_url' => 'required',
    ];
}
