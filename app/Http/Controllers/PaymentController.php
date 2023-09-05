<?php

namespace App\Http\Controllers;

use App\Models\Add_prodocts;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function checkout(Request $request) {
        $referer = $request->header('referer');
        if($referer == "http://127.0.0.1:8000/") {
            $encodedData = $request->query('bsahd'); 
            $decodedData = json_decode(urldecode($encodedData), true);
            
            $productIndex = rand(0, count($decodedData) - 1);
            $product = $decodedData[$productIndex];

            $prd = Add_prodocts::find($product['x_fre']);
            $prd_title = substr($prd['prd_title'], 0, 25) . "....";
            Session()->put("cr_data", $decodedData);

            $total = 0;
            foreach($decodedData as $item) {
                $total += $item['price'] * $item['jaq_r'];
            }
            return view("formcheckout", [
                'price' => $total,
                'prd_title' => $prd_title
            ]);
        } 
    }
}



