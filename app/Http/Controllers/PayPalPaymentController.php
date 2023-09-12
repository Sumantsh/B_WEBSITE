<?php
namespace App\Http\Controllers;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use App\Models\NewOrder;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;

use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Session;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PayPalPaymentController extends Controller
{

    public function error()
    {
        $errorMessage = Session::get('error');
        return view('error', compact('errorMessage'));
    }


    // Other methods for handling responses from PayPal
    public function cancel()
    {
    // You can display a message to the user or redirect them to a specific page
        Session::put('error', 'Payment was canceled by the user.');
        return redirect()->route('paypal.error');
    }


    public function success()
    {
        $orderData = session()->get('orderdata');

        if($orderData) {
            $orderId = $orderData['orderId'];
            $formdata = $orderData['formData'];
            $orderDetails = Session::get('cr_data');

            foreach ($orderDetails as $value) {
                NewOrder::create([
                    'orderID' => $orderId,
                    'name' => $formdata['firstname'] . " " . $formdata['lastname'],
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
            
            return redirect()->route('success.paypal.page');
        } else {
            abort(404, 'Requested Page Not Found');
        }
    }
}
