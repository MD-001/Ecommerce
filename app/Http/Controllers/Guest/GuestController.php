<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function layout()
    {
        return view('layouts.app', compact('categories', 'produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $telephones = Produit::join('categories', 'produits.categorie_id', '=', 'categories.id')
                            ->select('id','prix','designation','description','promotion')
                            ->where('categories.nom', 'Téléphone')
                            ->where('produits.promotion','>', 0)
                            ->limit(10)
                            ->get();
        $laptops = Produit::join('categories', 'produits.categorie_id', '=', 'categories.id')
                            ->select('id','prix','designation','description','promotion')
                            ->where('categories.nom', 'Laptop')
                            ->where('produits.promotion','>', 0)
                            ->limit(10)
                            ->get();
        return view('guest.home', compact('telephones', 'laptops'));
    }


    public function toCategorie($categorie)
    {
        // dd($categorie);
        $produitsDeCategorie = Produit::join('categories', 'produits.categorie_id', '=', 'categories.id')
                                    ->select('id', 'prix', 'designation', 'description', 'promotion')
                                    ->where('categories.nom', $categorie)
                                    ->get();
        return view('guest.produitsParCategorie', compact('produitsDeCategorie'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
