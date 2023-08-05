<?php

use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalPaymentController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/pay", [PaymentController::class, 'product']);

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