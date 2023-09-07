<?php

use App\Models\Product;

use App\Http\Livewire\Cart;
use App\Models\Add_prodocts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomepageConstroller;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\WebsiteProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
// <<<<<<< dev_s
//     return view('checkoutpage');
// });


Route::get('/' , [HomepageConstroller::class, 'Homepage'])->name("home");


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/formcheckout', function () {
    return view('formcheckout');
});

Route::get('/products', function () {
    $products = Add_prodocts::all();
    return view('products', [
        'products'=> $products
    ]);
});

Route::get("product_details/{id}", [ProductDetailController::class, 'ProductDetail']);

Route::get("Checkout/{id}", [ProductDetailController::class, 'BuyNow']);

// Route::get('product_details/{id}', function($id)  {
//     return view('product_details', [
//         'products' => Add_prodocts::find($id)
//     ]);
// });






Route::get('/ed', function (Request $request) {

    var_dump($request->all());

    // try {
    //     session()->put('formdata', $request->all());
    //     return response()->json(['message' => 'Success']);
    // } catch (\Exception $e) {
    //     // Log the exception or handle it appropriately
    //     return response()->json(['error' => 'Something went wrong'], 500);
    // }
    

});





Route::get("/pay", [PaymentController::class, 'checkout']);
Route::get("/add_prd", [WebsiteProductController::class, 'add_prd']);
Route::post("add_product", [WebsiteProductController::class, 'insertdata']);



Route::get("/add", function() {
    $jsonFile = file_get_contents(storage_path("json/replaced_products.json"));
    $data = json_decode($jsonFile, true);

    foreach ($data as $item) {
        Product::create([
            'prd_name' => $item['prd_name'],
            "prd_image" => $item['prd_image'],
            'prd_min_price' => $item['prd_min_price'],
            "prd_max_price" => $item['prd_max_price']
        ]);
    }

    echo "Okay";
});

Route::get("/payment", function() {
    return view('product');
}); 


Route::get("/redirect", function(Request $request) {
    return response()->json(['message' => 'Success']);
});

Route::get("/order_detail",[MailController::class,'mail']);



Route::post("/form-route", function(Request $request) {
    try {
        Session()->put('formdata', $request->all());
        return response()->json(['message' => 'Success']);
    } catch (\Exception $e) {
        // Log the exception or handle it appropriately
        return response()->json(['error' => 'Something went wrong'], 500);
    }
}); 

Route::get('/paypal/create-payment', [PayPalPaymentController::class, 'createPayment'])->name('paypal.create');
Route::get('/paypal/success', [PayPalPaymentController::class, 'success'])->name('paypal.success');
Route::get('/paypal/cancel',  [PayPalPaymentController::class, 'cancel'])->name('paypal.cancel');
Route::get('/paypal/error', [PayPalPaymentController::class, 'error'])->name('paypal.error');

Route::get("/stripe/create-payment", [StripeController::class, 'createPayment'])->name('stripe.create');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('payment.success');


Route::post("/add-to-cart", [Cart::class, 'addToCart']);