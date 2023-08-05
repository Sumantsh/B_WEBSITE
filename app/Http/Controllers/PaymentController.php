<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function product(Request $request) {
        $id = $request->query('id');
        $qty = $request->query('qty');
        $mg = $request->query('mg');
        $product = Product::find($id);

        $request->session()->put('orderDetails', ['qty' => $qty, 'mg' => $mg, 'prdID' => $id]);

        return view("formcheckout", [
            $product,
        ]); 
    }
}



