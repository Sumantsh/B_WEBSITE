<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neworder extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderID',
        'name',
        'email',
        'phone',
        "shipping_address",
        'billing_address',
        'pulse',
        'prdID',
        'qty',
        'mg'
    ]; 
}
