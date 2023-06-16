<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Produit;
use RealRashid\SweetAlert\Facades\Alert;


class CartController extends Controller
{
    //

    public function store(Request $request)
    {
        // dd($request);
        //
               $product = Produit::findOrFail($request->input('product_id'));
            //    dd($product);
       Cart::add(
           $product->ref,
           $product->designation,
           $request->input('quantity'),
           $product->prix,
       );

       Alert::success('produit ajouter au panier avec success', '');


       return redirect()->back();
    }
}
