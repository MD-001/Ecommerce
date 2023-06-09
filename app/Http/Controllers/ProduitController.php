<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index()
    {
        $produits = Produit::all();
        return view('admin.liste-produit', ['produits'=>$produits]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Produit $produit)
{
    $produit = Produit::findOrFail($produit->ref);
    return view('admin.show-produit', ['produit' => $produit]);
    
}


    public function edit(Produit $produit)
    {
        //
    }

    public function update(Request $request, Produit $produit)
    {
        //
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->back();
    }
}
