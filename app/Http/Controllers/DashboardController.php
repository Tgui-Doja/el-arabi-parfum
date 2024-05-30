<?php

// DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard'); // Assuming you have a dashboard.blade.php file in the resources/views directory
    // }
    public function index(){
        return view('hello');
    }
    public function liste(){
        $users = users::all();
        return view('dashboard.liste',compact('users'));
    }
    public function ajouter_user(){
        return view('dashboard.ajouter');
    }
    public function ajouter_user_traitement(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $user = new users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save(); 


        return redirect('/ajouter')->with('status', 'User added successfully.');
    }
    public function update_user($id){
        $users = users::find($id);
        return view('dashboard.update',compact('users'));
    }
    public function update_user_traitement(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required',
        ]);
        $user =  users::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update(); 

        return redirect('/ajouter')->with('status', 'User added successfully.');

    }
    public function delete_user($id){
        $users = users::find($id);
        $users->delete();
        return redirect('/dashboard')->with('status','user delete successfully');
    }
    
   
    
}

