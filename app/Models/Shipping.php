<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'country',
        'full_address',
        'city_town',
        'zip_code',
        'order_status',
        'order_note',
        'customer_id',
        'total_amount',
    ];
}
