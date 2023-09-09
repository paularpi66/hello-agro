<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'order_id',
        'total_amount',
        'bkash_no',
        'bkash_txnid',
        'nagad_no',
        'nagad_txnid',
        'rocket_no',
        'rocket_txnid',
        'status',
        'order_status',
        'payment_status',
    ];
}
