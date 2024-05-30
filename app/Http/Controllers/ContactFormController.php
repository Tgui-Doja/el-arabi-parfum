<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    function post_message(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);
        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'product-name' =>$request->product_name,
            'date' =>$request->date,
            'message' =>$request->message,

        ];

        //send email 
        Mail::to('dojatagui@gmail.com')->send(new ContactFormMail($data));
        return back()->with('msg','thanks for reaching out.');
    }
}
