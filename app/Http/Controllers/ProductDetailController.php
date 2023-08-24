<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\RouteModelBinding;
use App\Models\Add_prodocts;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function ProductDetail($id) {
        
        // return view('product_details', [
        //             'products' => Add_prodocts::find($id)
        //         ]);
        
        $product  = Add_prodocts::find($id);
            

                
    if (!$product) {
        return print_r('roduct not Found'); // Replace with your custom error view
    }

    return view('product_details', compact('product'));

    }



    public function BuyNow($id) {
       
        $product  = Add_prodocts::find($id);

        if (!$product) {
            return print_r('roduct not Found'); // Replace with your custom error view
        }
    
        return view('Checkout', compact('product'));
    
        }

   
    }   
      
       
