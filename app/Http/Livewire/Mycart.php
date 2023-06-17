<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\ModeLivraison;


class Mycart extends Component
{
    use WithPagination;

    public $num =1;
    public $cart;
    public $selectedShippingOption;
    public $shippingPrice;

   
    public $productsPrice;

    public $totalPrice;
    public $nbrProduit;

    protected $listeners = ['increment' => 'incrementQty', 'decrement' => 'decrementQty' , 'close' => 'closeProduit', 'shipping' => 'shipping'];

// 


// protected $listeners = ['shipping'];



// 
    public function mount($cart)
    {

        $this->cart = $cart;
        $this->productsPrice = Cart::total(2, '.', '');
         $this->nbrProduit =Cart::content()->count();
         $this->shippingPrice=empty(session('prixLivraison')) ? "35.00" : session('prixLivraison');

        // dd( floatval($this->productsPrice) + floatval($this->shippingPrice));
          // update totale
          if (Cart::count()==0) {
            $this->totalPrice = 0;
        }else {
            $this->totalPrice = floatval($this->productsPrice) + floatval($this->shippingPrice);
        }
       

    }
    public function render()
    {
        $ServiceLivraison = ModeLivraison::all();
        // dd($this->cart);
        return view('livewire.mycart', ['ServiceLivraison'=>$ServiceLivraison]);
    }

    public function incrementQty($id, $qty)
    {
        $qty +=1;
        // dd($qty);
        $id =$id;
        // dd('jhjh');
        // $this->num++;
        // dd($value);
        $cart = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });
        foreach ($cart as $item) {
            $rowId = $item->rowId;
            // Use the $rowId as needed
        }
 
        Cart::update($rowId,  $qty); // Will update the quantity
             // update totale
             if (Cart::count()==0) {
                $this->totalPrice = 0;
            }else {
                $this->productsPrice = Cart::total(2, '.', '');
                $this->totalPrice = floatval($this->productsPrice) + floatval($this->shippingPrice);
            }
    }
    public function decrementQty($id, $qty)
    {
        // dd("test");
        $qty -=1;
        // dd($qty);
        $id =$id;
        // dd('jhjh');
        // $this->num++;
        // dd($value);
        $cart = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });
        foreach ($cart as $item) {
            $rowId = $item->rowId;
            // Use the $rowId as needed
        }
        if ($qty ==0) {
           return;
        }
 
        Cart::update($rowId,  $qty); // Will update the quantity
           // update totale
           if (Cart::count()==0) {
            $this->totalPrice = 0;
        }else {
            $this->productsPrice = Cart::total(2, '.', '');
            $this->totalPrice = floatval($this->productsPrice) + floatval($this->shippingPrice);
        }
    }

    public function closeProduit($id)
    {
        $cart = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });
        foreach ($cart as $item) {
            $rowId = $item->rowId;
            // Use the $rowId as needed
        }
        // dd($rowId);
        Cart::remove($rowId);
        $this->nbrProduit =Cart::content()->count();
        // update panier
        $this->emit('updateCart');
            // update totale
    if (Cart::count()==0) {
        $this->totalPrice = 0;
    }else {
        $this->productsPrice = Cart::total(2, '.', '');
        $this->totalPrice = floatval($this->productsPrice) + floatval($this->shippingPrice);
        
    }
 
    }

    public function shipping($id)
{
    $prixLivraison = ModeLivraison::where('id',$id)->first();
    

    // Utilisez la valeur sélectionnée ici
    $this->shippingPrice = $prixLivraison->prix;
    session(['prixLivraison' =>$this->shippingPrice]);

    // dd($prixLivraison->prix);
           // update totale
           if (Cart::count()==0) {
            $this->totalPrice = 0;
        }else {
            $this->productsPrice = Cart::total(2, '.', '');
            $this->totalPrice = floatval($this->productsPrice) + floatval($this->shippingPrice);
        }
}

    public function add()
    {
        $this->num++;
    }
    public function sub()
    {
        $this->num--;
    }
}
