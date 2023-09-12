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

            'name' => $formdata['firstname'] . ", " . $formdata['lastname'],
            'address' => [
                'line1'       => $formdata['billing_line_one'],
                'postal_code' => $formdata['billing_zip'],
                'city'        => $formdata['billing_city'],
                'state'       => $formdata['billing_state'],
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

    public function order(Request $request) {
        $orderDetails = $request->all();

        session()->put('stripeOrder', $orderDetails);
        return response()->json(['message' => 'Order Processed'], 201);
    }

    public function success() {
        $stripeOrder = session()->get('stripeOrder');

        if($stripeOrder) {
            if($stripeOrder['orderStatus'] === "succeeded") {
                $formdata = Session::get('formdata');
                $orderDetails = Session::get('cr_data');

                foreach ($orderDetails as $value) {
                    NewOrder::create([
                        'orderID' => $stripeOrder['orderId'],
                        'name' => $formdata['firstname'] . " " .  $formdata['lastname'],
                        'email' => $formdata['email'],
                        'phone' => $formdata['phoneNumber'],
                        'shipping_address' => $formdata['shipping_line_one'] . ", ". $formdata['shipping_line_two']  . ", " . $formdata['shipping_state'] . ", " . $formdata['shipping_city']  . ", " . $formdata['shipping_country'] . ", " . $formdata['shipping_zip'],
                        'billing_address' => $formdata['billing_line_one'] . ", " . $formdata['billing_line_two'] . ", ". $formdata['billing_state'] . ", " . $formdata['billing_city']  . ", " . $formdata['billing_country'] . ", " . $formdata['billing_zip'],
                        'pulse' => $value['hg_e3'],
                        'qty' => $value['jaq_r'],
                        'mg' => $value['asgf'],
                        'prdID' => $value['x_fre']
                    ]);
                } 
                return redirect()->route('success.stripe.page');
            }
        } else {
            abort('402');
        }   
    }
}
