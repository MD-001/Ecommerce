<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Payment;
use App\Models\Commande;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        $relatedProduct = Produit::where('categorie_id', $produit->categorie_id)->inRandomOrder()->take(4)->get();
        return view('shop-item.index', ['produit' => $produit, 'relatedProduct' => $relatedProduct]);
    }

    public function showMyCart()
    {
        $cart = Cart::content();
        return view('shop-item.my-cart', ['cart' => $cart]);
    }

    public function Checkout()
    {
        $cart = Cart::content();
        // dd($cart);
        return view('shop-item.checkout');
    }

    public function ConfirmeCheckout(Request $request)
    {
        // dd($request);
        // $user = User::where('id', Auth::id())->first();
        // dd($user->prenom);

        $rules = [
            'Cardholder' => 'required',
            'CardNumber' => 'required',
            'MM-Date' => 'required|date_format:m|digits:2',
            'YYYY-Date' => 'required|date_format:Y|digits:4',
            'CVC-CVV' => 'required|digits_between:3,4',
        ];
        $messages = [
            'Cardholder.required' => 'Titulaire de la carte requis.',
            'CardNumber.required' => 'Numéro de carte requis.',
            'MM-Date.required' => 'Mois requis.',
            'MM-Date.date_format' => 'Mois invalide.',
            'MM-Date.digits' => 'Mois invalide.',
            'YYYY-Date.required' => 'Année requise.',
            'YYYY-Date.date_format' => 'Année invalide.',
            'YYYY-Date.digits' => 'Année invalide.',
            'CVC-CVV.required' => 'Code requis.',
            'CVC-CVV.digits_between' => 'Code invalide.',
        ];

        $request->validate($rules, $messages);
        $user = User::where('id', Auth::id())->first();

        $checkPayment = Payment::where('cardholder_name', $request->Cardholder)
            ->where('card_number', $request->CardNumber)
            ->where('MM-Date', $request->input('MM-Date'))
            ->where('YYYY-Date', $request->input('YYYY-Date'))
            ->where('cvc', $request->input('CVC-CVV'))
            ->exists();

        if ($checkPayment) {
            // Toutes les données de paiement existent dans la table "payments"
            // Effectuez les actions nécessaires ici
            // dd('exist payment');
            $newCommade = new Commande();
            $newCommade->date = Carbon::now();
            $newCommade->description = 'test decription';
            $newCommade->etat_commande_id = '1';
            $newCommade->total = floatval(Cart::total(2, '.', '')) + floatval(session('prixLivraison'));
            $newCommade->client_id = $user->id;
            $newCommade->save();
            // send email


            $data = [
                'name' => $user->nom,
                'prenom' => $user->prenom,
                'email_client' => $user->email,
                'Adresse' => $user->adresse,
                'phone_number' => $user->tel,
                'numCommande' => $newCommade->ref,
                'date_commande' =>  $newCommade->created_at,
                'total' => $newCommade->total,
            ];

            Mail::to("amine1nhili@gmail.com")
                ->send(new SendEmail($data));

            // vider le panier et supprime la session livraison
            Cart::destroy();
            session()->forget('prixLivraison');

            Alert::success('Commande effectue avec succes', '');
            return redirect()->route('shop-add');
        } else {
            // Certaines ou toutes les données de paiement n'existent pas dans la table "payments"
            // Traitez l'erreur ou effectuez des actions appropriées ici
            // dd('Non exist payment');
            Alert::success('Commande erreurs', '');
            return redirect()->back();
        }

        // dd($request);
    }
    // public function PasserCommande()
    // {
    //     //

    // }

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
