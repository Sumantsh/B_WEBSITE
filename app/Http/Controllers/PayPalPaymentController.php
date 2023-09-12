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


    public function success(Request $request)
    {
        $orderData = session()->get('orderdata');
        $orderId = $orderData['orderId'];

        $formdata = $orderData['formData'];
        $orderDetails = Session::get('cr_data');

        foreach ($orderDetails as $value) {
            NewOrder::create([
                'orderID' => $orderId,
                'name' => $formdata['firstname'] . " " . $formdata['lastname'],
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
