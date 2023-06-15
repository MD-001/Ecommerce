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
        return view('admin.create-produit');
    }

    public function store(Request $request)
    {
        $produit = new Produit;
        $produit->designation = $request->designation;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->image = $request->image;
        $produit->qte_stock = $request->qte_stock;
        $produit->tva = $request->tva;
        $produit->rating = $request->rating;
        $produit->propriete_id = 2;
        $produit->marque_id = 2;
        $produit->fournisseur_id = 5;
        $produit->categorie_id = 2;
        $produit->save();
        
        return redirect()->route('produit.index');
    }

    public function show(Produit $produit)
{
    $produit = Produit::findOrFail($produit->ref);
    return view('admin.show-produit', ['produit' => $produit]);
}


    public function edit($produit)
    {
        $produit = Produit::findOrFail($produit);
        return view('admin.edit-produit', ['produit'=>$produit]);
    }

    public function update($id,Request $request)
    {
        $produit = Produit::findOrFail($id);
        $produit->designation = $request->designation;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->image = $request->image;
        $produit->tva = $request->tva;
        $produit->rating = $request->rating;
        $produit->save();
        
        return redirect()->route('produit.index');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->back();
    }
}
