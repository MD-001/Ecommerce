<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\ServiceLivraison;


class Mycart extends Component
{
    use WithPagination;
    public $num =1;
    public $cart;
    protected $listeners = ['increment' => 'incrementQty', 'decrement' => 'decrementQty' , 'close' => 'closeProduit'];


    public function mount($cart)
    {
        $this->cart = $cart;
    }
    public function render()
    {
        $ServiceLivraison = ServiceLivraison::all();
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
