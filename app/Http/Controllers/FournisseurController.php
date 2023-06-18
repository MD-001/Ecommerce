<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{

    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view('admin.liste-fournisseur', ['fournisseurs'=>$fournisseurs]);
    }

    public function create()
    {
        return view('admin.create-fournisseur');
    }

    public function store(Request $request)
    {
        $fournisseur = new Fournisseur;
        $fournisseur->nom = $request->nom;
        $fournisseur->email = $request->email;
        $fournisseur->tel = $request->tel;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->save();
        return redirect()->route('fournisseur.index');

    }

    public function show($id)
    {
        $produits = Produit::where('fournisseur_id', $id)->get();
        return view('admin.show-fournisseur', ['produits'=> $produits]);
    }

    public function edit($id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
        return view('admin.edit-fournisseur', ['fournisseur'=>$fournisseur]);
    }

    public function update(Request $request, $fournisseur)
    {
        $fournisseur = Fournisseur::findOrFail($fournisseur);
        $fournisseur->nom = $request->nom;
        $fournisseur->email = $request->email;
        $fournisseur->tel = $request->tel;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->save();
        return redirect()->route('fournisseur.index');
    }

    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->back();
    }
}
