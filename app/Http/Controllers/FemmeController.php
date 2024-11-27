<?php


// app/Http/Controllers/FemmeController.php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;

class FemmeController extends Controller
{
    public function index()
    {
        $femmes = Femme::all();
        return view('femme',compact('femmes'),);
    }
    public function femmeCart(){
        return view('cart');
    }
    public function cartUser() {
        $cart = session()->get('cart', []);
        return view('cartUser', compact('cart'));
    }
    
    
    
   // Dans FemmeController.php


public function addFemmetoCart($id) {
    $femme = Femme::findOrFail($id);
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $femme->name,
            "quantity" => 1,
            "price" => $femme->price,
            "image" => $femme->image
        ];
    }
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'parfum has been added to cart');
}

public function deleteProduct(Request $request) {
    if ($request->id)  {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product successfully deleted.');
    }
    return response()->json(['success' => true]);
}
public function deleteProductUser(Request $request) {
    if ($request->id)  {
        $cartUser = session()->get('cartUser');
        if (isset($cartUser[$request->id])) {
            unset($cartUser[$request->id]);
            session()->put('cart', $cartUser);
        }
        session()->flash('success', 'Product successfully deleted.');
    }
    return response()->json(['success' => true]);
}



    // FemmeController.php
// FemmeController.php
// Dans FemmeController.php
public function transferStatus(Request $request)
{
    if ($request->id) {
        $userCart = session()->get('cartUser', []);

       

        if (isset($userCart[$request->id])) {
            $userCart[$request->id]['status'] = 'Payé';
            session()->put('cartUser', $userCart);
        }

    }

    return response()->json(['success' => false]);
}



public function liste_femme(){
    $femmes = Femme::orderBy('created_at', 'ASC')->get();
    return view('dashboard3.liste_femme', compact('femmes'));
}

public function create() {
    return view('dashboard3.create');
}
public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $requestData = $request->all();
    if ($request->hasFile('image')) {
        $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        $path = 'images/' . $fileName;
        $request->file('image')->move(public_path('images'), $fileName);
        $requestData['image'] = $fileName;
    }
    $femme = Femme::create($requestData);
    return redirect()->route('dashboard3.liste_femme')->with('success', 'Book added successfully.');
}

    public function show($id)
    {
    $femme = Femme::findOrFail($id);
    return view('dashboard3.show', compact('femme'));
    }
    public function edit(string $id)
    {
        $femme = Femme::findOrFail($id);
        return view('dashboard3.edit', compact('femme'));
    }
    public function update(Request $request, Femme $femme)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $requestData = $request->all();
    
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
    
            $path = 'images/' . $fileName;
    
            $request->file('image')->move(public_path('images'), $fileName);
    
            $requestData['image'] = $fileName;
    
            if ($femme->image) {
                $oldImagePath = public_path('images/' . $femme->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
    
        $femme->update($requestData);
    
        return redirect()->route('dashboard3.liste_femme')->with('success', 'Product updated successfully.');
    }
    

    public function destroy( string $id)
    {
        $femme = Femme::findOrFail($id);
        $femme->delete();
        return redirect()->route('dashboard3.liste_femme')->with('success','product deleted successfuly');
    }
    
 

}

