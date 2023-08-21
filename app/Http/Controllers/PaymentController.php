<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function checkout(Request $request) {
        $encodedData = $request->query('bsahd'); 
        $decodedData = json_decode(urldecode($encodedData), true);

        Session()->put("cr_data", $decodedData);
        $total = 0;
        foreach($decodedData as $item) {
            $total += $item['price'];
        }
        return view("formcheckout", [
            'price' => $total
        ]); 
    }
}



