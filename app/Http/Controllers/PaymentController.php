<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function product(Request $request) {
        $id = $request->id;
        $product = Product::find($id);
        $qty = $request->qty;
        $mg = $request->mg;

        echo $product;
        var_dump($qty);
        var_dump($mg);
    }
}



