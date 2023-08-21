<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Add_prodocts;


class WebsiteProductController extends Controller
{
    public function add_prd(){
        
        return view("add_product.addform");

    }

    public function insertdata(Request $request) {

        $data= new Add_prodocts;
        $data->prd_id=$request->id;
        $data->prd_title=$request->title;
        $data->prd_price=$request->price;
        $data->company=$request->company;
        $data->prd_cate=$request->prd_cat;
        $data->highlight=$request->highlight;
        $data->prd_disc=$request->prd_disc;
        $data->prd_img=$request->prd_img;
        $data->stock=$request->stock;
        $data->timestamps=$request->date_and_time;
        
        $data->save();

        if($data) 
        return redirect('add_prd'); 
        else 
        echo "not";



    }

}
