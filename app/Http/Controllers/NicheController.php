<?php

namespace App\Http\Controllers;

use App\Models\Niche;
use Illuminate\Http\Request;

class NicheController extends Controller
{
    public function index()
    {
        $niches = Niche::all();
        return view('niche',compact('niches'));
    }
    public function nicheCart(){
        return view('cart');
    }
    public function addNichetoCart($id){
        $niche = Niche::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $niche->name,
                "quantity" => 1,
                "price" =>$niche->price,
                "image" =>$niche->image
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
            session()->flash('success', 'Product successfully deleted.');
        }

        return response()->json(['success' => true]);
    }
        public function liste_niche(){
            $niches = Niche::orderBy('created_at', 'ASC')->get();
            return view('dashboard2.liste_niche', compact('niches'));
        }
        
        public function create() {
            return view('dashboard2.create');
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
            $homme = Niche::create($requestData);
            return redirect()->route('dashboard2.liste_niche')->with('success', 'parfum added successfully.');
        }
        public function show($id)
        {
        $niche = Niche::findOrFail($id);
        return view('dashboard2.show', compact('niche'));
        }
        public function edit(string $id)
    {
        $niche = Niche::findOrFail($id);
        return view('dashboard2.edit', compact('niche'));
    }
        public function update(Request $request, Niche $niche)
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
        if ($niche->image) {
            $oldImagePath = public_path('images/' . $niche->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
    }

    // Mettre à jour le modèle avec les nouvelles données
    $niche->update($requestData);

    // Rediriger vers la liste des parfums avec un message de succès
    return redirect()->route('dashboard2.liste_niche')->with('success', 'Parfum updated successfully.');
}
public function destroy( string $id)
{
    $niche = Niche::findOrFail($id);
    $niche->delete();
    return redirect()->route('dashboard2.liste_niche')->with('success','parfum deleted successfuly');
}
        
     
    

    
}
