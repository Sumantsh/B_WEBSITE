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

            Session()->put("cr_data", $decodedData);

            if(count($decodedData) > 0) {
                $total = 0;
                foreach($decodedData as $item) {
                    $total += $item['price'] * $item['jaq_r'];
                }
                return view("formcheckout", [
                    'price' => $total
                ]);
            } else {
                abort(402, "Please retry again, Some technical Issue" );
            }
        } 
    }
}



