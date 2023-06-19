<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class NumberAchat extends Component
{
    public $nbrAchat;
    protected $listeners = ['updateCart' => 'render',];
    public function render()
    {
        return view('livewire.number-achat');
    }

    // public function update()
    // {
    //     dd("testok");
     

    // }
}
