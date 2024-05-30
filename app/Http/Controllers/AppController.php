<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function index()
    {
        // Increment the session counter
        // $compteur = $request->session()->increment('compteur', 1);

        // Send the email
        // Mail::to('dojatagui@gmail.com')->send(new ContactFormMail());

        // Return the view with the 'compteur' variable
        // return back()->with('msg','thanks for reaching out.');
        return view('index');
    }
}
