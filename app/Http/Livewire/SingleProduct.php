<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Produit;
use RealRashid\SweetAlert\Facades\Alert;

class SingleProduct extends Component
{
    public $produit;
    public $relatedProduct;
    public $cart;
    public $num =1;
    public $quantity;
 
    protected $listeners = ['addItem' => 'addItemToCArt','selectedQty' => 'Qty', 'confirmeDelete' ,''=>'DeleteConfirme','remove'=>'RemoveItemFromCart'];
    public function mount($produit, $relatedProduct)
    {

        $this->produit=$produit;
        $this->relatedProduct=$relatedProduct;        
        $this->cart=Cart::content();  
        $this->quantity=1;     
        
       

    }
    public function render()
    {
        return view('livewire.single-product', ['produit'=>$this->produit, 'relatedProduct'=>$this->relatedProduct,  ]);
    }

    public function addItemToCArt($ref)
    {
        $product = Produit::findOrFail($ref);
        //    dd($product, $this->quantity);
        Cart::add(
            $product->ref,
            $product->designation,
            $this->quantity,
            $product->prix,
        );
        $this->cart=Cart::content()->count();
        // dd(Cart::content()->count());
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',  
            'message' => 'Ce produit a été ajoute a votre panier avec succès', 
            'text' => ''
        ]);
        $this->emit('updateCart');
        // Redessiner le composant Livewire
    $this->render();
       
        // $this->render();
        // dd('render');
        // dd("of");
//    Alert::success('produit ajouter au panier avec success', '');
        // dd("testokad tocart", $ref, $this->quantity);
     

    }

    public function Qty($num)
    {
        $this->quantity=intval($num);  

        return;
     

    }

    // public function DeleteConfirme($ref)
    // {
    //     $this->dispatchBrowserEvent('swal:confirm', [
    //         'type' => 'Confirme Delete',  
    //         'message' => 'Vous etes sure?', 
    //         'ref' => $ref
    //     ]);
    // }

    public function RemoveItemFromCart($ref)
    {
        // $this->RemoveItemFromCart($ref);
       
        $cart = Cart::search(function ($cartItem, $rowId) use ($ref) {
            return $cartItem->id === $ref;
        });
        foreach ($cart as $item) {
            $rowId = $item->rowId;
            // Use the $rowId as needed
        }
        
        // dd($rowId);
        Cart::remove($rowId);
        // update panier
        $this->emit('updateCart');

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'warning',  
            'message' => 'Ce produit a été retiré de votre panier', 
            'ref' => $ref,
        ]);

    }
    public function add()
    {
        $this->num++;
    }
}
