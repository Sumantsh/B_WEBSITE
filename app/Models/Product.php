<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "prd_name",
        "prd_image",
        "prd_min_price",
        "prd_max_price"
    ];
}
