<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Customer;
use App\Models\NewOrder;
use Stripe\PaymentIntent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function createPayment() {
        Stripe::setApiKey(config('services.stripe.secret'));

        $data = Session()->get('cr_data');
        $formdata = Session()->get('formdata');
        $total = 0;
        foreach($data as $item) {
            $total += ($item['price'] * $item['jaq_r']);
        };

        $total += $formdata['shipping'];


        $customer = Customer::create([
            'name' => $formdata['firstname']. ' ' . $formdata['lastname'],
            'address' => [
                'line1'       => $formdata['address'],
                'postal_code' => $formdata['zip'],
                'city'        => $formdata['city'],
                'state'       => $formdata['state'],
                'country'     => "US",
            ],
        ]);


        $intent = PaymentIntent::create([
            'customer' => $customer['id'],
            'amount' => $total * 100, // Amount in cents
            'currency' => 'usd',
            "description" => 'Payment for' . " " . $customer['name'],
        ]);

        return view('stripeCheckout', [
            'clientSecret' => $intent->client_secret,
        ]); 
    }

    public function success() {
        $orderId = "stripe" . Str::uuid();

        $formdata = Session::get('formdata');
        $orderDetails = Session::get('cr_data');

        foreach ($orderDetails as $value) {
            NewOrder::create([
                'orderID' => $orderId,
                'name' => $formdata['firstname'] . " " .  $formdata['lasttname'],
                'email' => $formdata['email'],
                'phone' => $formdata['phoneNumber'],
                'address' => $formdata['address'] . ", ". $formdata['state'] . ", " . $formdata['country'] . ", " . $formdata['zip'],
                'pulse' => $value['hg_e3'],
                'qty' => $value['jaq_r'],
                'mg' => $value['asgf'],
                'prdID' => $value['x_fre']
            ]);
        }
        
        return view('success', [
            'orderId' => $orderId,
            'shippingAddress' => $formdata
        ]);
    }
}
