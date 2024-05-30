<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use App\Models\reservations;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session; // Import Session facade

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }
    public function test_view(){
        return view('mails.contact_mails');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'product_name' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new reservation
        reservations::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'product_name' => $request->input('product_name'),
            'message' => $request->input('message'),
        ]);

        // Set a session message and redirect
        Session::flash('msg', 'Reservation made successfully!');

        return redirect()->back();
    }
    public function sendContactEmail(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string'
        ]);

        // Send email
        Mail::to('dojatagui@gmail.com')->send(new ReservationMail($request->all()));

        // Redirect back with a success message
        return redirect()->back()->with('msg', 'CONTACT request sent successfully!');
    }
}
