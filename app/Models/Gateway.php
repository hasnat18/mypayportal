<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'name',
        'key1',
        'key2',
    ];

    public static $rules = [
        'name' => 'required',
        'key1' => 'required',
        'key2' => 'required',
    ];

}
