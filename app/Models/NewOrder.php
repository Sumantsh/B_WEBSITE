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
        'address',
        'prdID',
        'qty',
        'mg'
    ]; 

    protected $hidden = [
        
    ];
}
