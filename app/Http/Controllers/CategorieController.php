<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        $categories = Categorie::all();
        return view('admin.liste-categorie', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.ajouter-categorie');
    }

    public function store(Request $request)
{
    // $request->validate([
    //     'nom' => 'required',
    //     'image' => 'required|image',
    // ]);

    // $categorie = new Categorie();
    // $categorie->nom = $request->nom;

    // if ($request->hasFile('image')) {
    //     $image = $request->file('image');
    //     $imageName = time() . '.' . $image->getClientOriginalExtension();
    //     $image->move(public_path('admin/assets/img'), $imageName);
    //     $categorie->image = $imageName;
    // }

    // $categorie->save();

    // return redirect()->route('categorie.index');
    $requestData = $request->all();
    if ($request->hasFile('image')) {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
    } else {
        $requestData["image"] = ''; // ou une valeur par défaut si nécessaire
    }
    Categorie::create($requestData);
    return redirect()->route('categorie.index');
}



    public function show(Categorie $categorie)
    {
        //
    }

    public function edit(Categorie $categorie)
    {
        $categorie = Categorie::findOrFail($categorie->id);
        return view('admin.edit-categorie', ['categorie'=>$categorie]);
    }

    public function update(Request $request, Categorie $categorie)
    {
        $requestData = $request->all();
        
        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData["image"] = '/storage/'.$path;
        } else {
            unset($requestData["image"]); // ou une valeur par défaut si nécessaire
        }
        $categorie->update($requestData);
    
        return redirect()->route('categorie.index');
    }
    


    public function destroy(Categorie $categorie)
    {
        $categorie = Categorie::findOrFail($categorie->id);
        $categorie->delete();
        return redirect()->back();
    }
}
