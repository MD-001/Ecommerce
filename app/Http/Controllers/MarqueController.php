<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marque::all();
        return view('admin.liste-marque', ['marques' => $marques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ajouter-marque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marque = new Marque;
    $marque->nom = $request->nom;
    $marque->libelle = $request->libelle;
    if ($request->hasFile('image')) {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $marque->image = '/storage/' . $path;
    } else {
        $marque->image = ''; // ou une valeur par défaut si nécessaire
    }
    $marque->save();
    return redirect()->route('marque.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function show(Marque $marque)
    {
        $produits = Produit::where('marque_id', $marque->id)->get();
        // dd($produits)
        return view('admin.show-marque', ['produits' => $produits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function edit(Marque $marque)
    {
        $marque = Marque::findOrFail($marque->id);
        return view('admin.edit-marque', ['marque'=>$marque]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marque $marque)
    {
        $marque = Marque::findOrFail($marque->id);
    $marque->nom = $request->nom;
    $marque->libelle = $request->libelle;
    if ($request->hasFile('image')) {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $marque->image = '/storage/' . $path;
    } else {
        unset($marque->image);  // ou une valeur par défaut si nécessaire
    }
    $marque->update();
    return redirect()->route('marque.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return redirect()->route('marque.index');
    }
}
