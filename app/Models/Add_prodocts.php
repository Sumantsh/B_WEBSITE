<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_prodocts extends Model
{

    use HasFactory;
    public $table = 'balaji_prd';
    

    // public $primarykey = 'id';
    // public $incrementing = true;
    public $timestampe = false;

    protected $fillable = [
        'prd_id',
        'prd_title',
        'prd_price',
        'company',
        'prd_cate',
        'highlight',
        'prd_disc',
        'prd_img',
        'stock'
    ];

    // return $this->where(function ())



}
