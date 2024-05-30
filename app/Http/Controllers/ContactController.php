<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session; // Import Session facade

class ContactController extends Controller
{    
    public function show(){
        return view('contact');
    }
    public function liste(){
        $reservations = reservations::all();
        return view('dashboard1.liste',compact('reservations'));
    }
    public function ajouter_reservations(){
        return view('dashboard1.ajouter_reservations');
    }
    public function ajouter_reservations_traitement(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=> 'required',
            'product_name'=> 'required',
            'message'=> 'required',   
        ]);

        $reservations = new reservations();
        $reservations->name = $request->name;
        $reservations->email = $request->email;
        $reservations->phone = $request->phone;
        $reservations->product_name = $request->product_name;
        $reservations->message = $request->message;
        $reservations->save(); 


        return redirect('/ajouter_reservations')->with('status', 'reservation added successfully.');
    }
    // public function update_reservations($id){
    //     $reservation = reservations::find($id); // Assuming Reservation is your model
    //     return view('dashboard1.update-reservations')->with('reservation', $reservation);
    // }
    
    // public function update_reservations_traitement(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone'=> 'required',
    //         'product_name'=> 'required',
    //         'date'=> 'required',
    //         'message'=> 'required',  
    //     ]);
    //     $reservations =  reservations::find($request->id);
    //     $reservations->name = $request->name;
    //     $reservations->email = $request->email;
    //     $reservations->phone = $request->phone;
    //     $reservations->product_name = $request->product_name;
    //     $reservations->date = $request->date;
    //     $reservations->message = $request->message;
    //     $reservations->update(); 

    //     return redirect('/ajouter_reservations')->with('status', 'reservations added successfully.');

    // }
    public function delete_reservations($id){
        $reservations = reservations::find($id);
        $reservations->delete();
        return redirect('/dashboard1')->with('status','reservations delete successfully');
    }
    
   
}
