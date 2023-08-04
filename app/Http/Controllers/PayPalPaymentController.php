<?php
namespace App\Http\Controllers;

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
        $request->body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => '10.00', // Replace with the actual amount
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
                Session::put('error', 'Approval link not found in the PayPal response.');
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
        // Process the successful payment here
        // For example, you can check the payment status and update your database

        // Get the PayPal order ID from the query parameters
        $orderId = $request->input('token');

        // Assuming you store the payment details in the database, you can update the payment status
        // Replace this with your database update logic
        // Example: Payment::where('order_id', $orderId)->update(['status' => 'completed']);

        // Display a success message to the user
        Session::flash('success', 'Payment successful! Thank you for your purchase.');
        return redirect()->route('home'); // Replace 'home' with the desired route after successful payment
    }

}
