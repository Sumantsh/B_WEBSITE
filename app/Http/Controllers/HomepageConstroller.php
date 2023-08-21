<?php

namespace App\Http\Controllers;
use App\Models\Add_prodocts;

use Illuminate\Http\Request;

class HomepageConstroller extends Controller
{
    public function Homepage()  {
        
        return view('home', [
            'products' => Add_prodocts::all()
        ]);

        

    }
}
