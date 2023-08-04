<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
//     return view('checkoutpage');
// });

Route::get('/', function () {
    return view('formcheckout');
});




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