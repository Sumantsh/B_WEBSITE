<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalPaymentController;
use Srmklive\PayPal\Facades\PayPal;

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
});


Route::get("/pay/{id}/{qty}/{mg}", [PaymentController::class, 'product']);


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

Route::get('handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');