<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Fournisseur;
use App\Models\Marque;
use App\Models\Propriete;
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
    $fournisseurs = Fournisseur::all();
    $marques = Marque::all();
    $categories = Categorie::all();
    $proprietes = Propriete::all();
    return view('admin.create-produit', ['fournisseurs'=>$fournisseurs, 'marques'=>$marques, 'categories'=>$categories, 'proprietes'=>$proprietes]);
}


    public function store(Request $request)
    {
        $produit = new Produit;
    $produit->designation = $request->designation;
    $produit->description = $request->description;
    $produit->prix = $request->prix;
    if ($request->hasFile('image')) {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $produit->image = '/storage/' . $path;
    } else {
        $produit->image = ''; // ou une valeur par défaut si nécessaire
    }
    $produit->qte_stock = $request->qte_stock;
    $produit->tva = $request->tva;
    $produit->rating = $request->rating;
    $produit->propriete_id = $request->propriete_id;
    $produit->marque_id = $request->marque_id;
    $produit->fournisseur_id = $request->fournisseur_id;
    $produit->categorie_id = $request->categorie_id;
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
        $fournisseurs = Fournisseur::all();
        $marques = Marque::all();
        $categories = Categorie::all();
        $proprietes = Propriete::all();
        return view('admin.edit-produit', ['produit'=>$produit,'fournisseurs'=>$fournisseurs, 'marques'=>$marques, 'categories'=>$categories, 'proprietes'=>$proprietes]);
    }

    public function update(Request $request,$produit)
    {
        $produit = Produit::findOrFail($produit);
        $produit->designation = $request->designation;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $produit->image = '/storage/' . $path;
        } else {
            unset($produit->image); ; // ou une valeur par défaut si nécessaire
        }
        $produit->tva = $request->tva;
        $produit->rating = $request->rating;
        $produit->propriete_id = intval($request->propriete_id);
        $produit->marque_id = intval($request->marque_id);
        $produit->fournisseur_id = intval($request->fournisseur_id);
        $produit->categorie_id = intval($request->categorie_id);
        $produit->update();
        
        return redirect()->route('produit.index');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->back();
    }
}
