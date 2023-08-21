<?php
namespace App\Http\Controllers;

use App\Models\NewOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PayPalPaymentController extends Controller
{
    private $client;

    public function __construct()
    {
        $environment = config('app.env') === 'production'
            ? new ProductionEnvironment(env('paypal.live_client_id'), env('paypal.live_client_secret'))
            : new SandboxEnvironment(env('PAYPAL_SANDBOX_CLIENT_ID'), env('PAYPAL_SANDBOX_CLIENT_SECRET'));

        $this->client = new PayPalHttpClient($environment);
    }

    public function error()
    {
        $errorMessage = Session::get('error');
        return view('error', compact('errorMessage'));
    }

    public function createPayment()
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $data = Session()->get('cr_data');
        $total = 0;
        foreach($data as $item) {
            $total += $item['price'];
        };

        $request->body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $total, // Replace with the actual amount
                    ],
                ],
            ],
            'application_context' => [
                'cancel_url' => route('paypal.cancel'),
                'return_url' => route('paypal.success'),
            ],
        ];

        try {
            // $response = $this->client->execute($request);
            // $paypalLink = collect($response->result)->get('links')->where('rel', 'approve')->first()->href;
            // return redirect()->away($paypalLink);


            // $response = $this->client->execute($request);
            // $links = $response->result->links;
            // $approveLink = collect($links)->where('rel', 'approve')->first()['href'];
            // return redirect()->away($approveLink);

            $response = $this->client->execute($request);
            $links = $response->result->links;

            $approveLink = collect($links)->where('rel', 'approve')->first();
            if ($approveLink) {
                $approveLink = $approveLink->href;
                return redirect()->away($approveLink);
            } else {
                // Handle the case when 'approve' link is not found in the response
                Session::flash('error', 'Approval link not found in the PayPal response.');
                return redirect()->route('paypal.error');
            }
        } catch (\PayPalHttp\HttpException $e) {
            // Handle PayPal HTTP exceptions
            Session::flash('error', 'PayPal API Error: ' . $e->getMessage());
            return redirect()->route('paypal.error');
        } catch (\Exception $e) {
            // Handle other exceptions
            Session::flash('error', 'An unexpected error occurred: ' . $e->getMessage());
            return redirect()->route('paypal.error');
        }
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

        $orderId = $request->input('token');

        $formdata = Session::get('formdata');
        $orderDetails = Session::get('orderDetails');

        NewOrder::create([
            'orderID' => $orderId,
            'name' => $formdata['name'],
            'email' => $formdata['email'],
            'phone' => $formdata['phoneNumber'],
            'address' => $formdata['address'] . ", ". $formdata['state'] . ", " . $formdata['country'] . ", " . $formdata['zip'],
            'qty' => $orderDetails['qty'],
            'mg' => $orderDetails['mg'],
            'prdID' => $orderDetails['prdID']
        ]);
        
        Session::flash('success', 'Payment successful! Thank you for your purchase.');
        return redirect()->route('home'); // Replace 'home' with the desired route after successful payment
    }

}
