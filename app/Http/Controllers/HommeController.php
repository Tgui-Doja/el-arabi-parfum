<?php

namespace App\Http\Controllers;

use App\Models\Homme;
use Illuminate\Http\Request;

class HommeController extends Controller
{
    public function index()
    {
        $hommes = Homme::all();
        return view('homme',compact('hommes'));
    }
    public function hommeCart(){
        return view('cart');
    }
    public function addHommetoCart($id){
        $homme = Homme::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $homme->name,
                "quantity" => 1,
                "price" =>$homme->price,
                "image" =>$homme->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success','parfum has been added to cart');
    }
    public function deleteProduct(Request $request)
{
    if ($request->id) {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'parfum successfully deleted.');
    }

    return response()->json(['success' => true]);
}
    public function liste_homme(){
        $hommes = Homme::orderBy('created_at', 'ASC')->get();
        return view('dashboard4.liste_homme', compact('hommes'));
    }

    public function create() {
        return view('dashboard4.create');
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
    $homme = Homme::create($requestData);
    return redirect()->route('dashboard4.liste_homme')->with('success', 'parfum added successfully.');
}


    public function show($id)
    {
    $homme = Homme::findOrFail($id);
    return view('dashboard4.show', compact('homme'));
    }
    public function edit(string $id)
    {
        $homme = Homme::findOrFail($id);
        return view('dashboard4.edit', compact('homme'));
    }
    public function update(Request $request, Homme $homme)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    $requestData = $request->except(['image']);

    if ($request->hasFile('image')) {
        $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        $path = 'images/' . $fileName;

        $request->file('image')->move(public_path('images'), $fileName);

        $requestData['image'] = $fileName;

        // Supprimer l'ancienne image si elle existe
        if ($homme->image) {
            $oldImagePath = public_path('images/' . $homme->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
    }

    // Mettre à jour le modèle avec les nouvelles données
    $homme->update($requestData);

    // Rediriger vers la liste des parfums avec un message de succès
    return redirect()->route('dashboard4.liste_homme')->with('success', 'Parfum updated successfully.');
}
    public function destroy( string $id)
    {
        $homme = Homme::findOrFail($id);
        $homme->delete();
        return redirect()->route('dashboard4.liste_homme')->with('success','parfum deleted successfuly');
    }
    
 


}
