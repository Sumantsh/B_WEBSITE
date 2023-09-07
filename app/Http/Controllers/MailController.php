<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;
use App\Mail\OrderMail;

class MailController extends Controller
{
    public function mail(){
        $maildata = [
            'title'=> 'Mail From Edlifecare',
            'body'=> 'New Order',
        ];

        Mail::to('sumantsh0@gmail.com')->send(new OrderMail($maildata));
        
        dd('Email send successfully ');
    }
}
