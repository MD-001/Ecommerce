<div>
    {{-- Be like water. --}}

    {{-- {{ dd($cart); }} --}}
    {{-- <p>{{ $num }}</p>
    <button wire:click="add" >+</button>
    <button wire:click="sub" >-</button> --}}
    
    <div class="card mt-3">
        <div class="row ">
    <div class="col-md-8 cart">
        <div class="title">
            <div class="row">
                
                <div class="col"><h4><b>Shopping Cart</b></h4></div>
                <div class="col align-self-center text-right text-muted">Nomber Produits:  <input class="col w-25 text-right" id="" wire:model="nbrProduit"  readonly></div>
               
            </div>
        </div>  
        
        @foreach (Cart::content()  as $cartItem )
       {{-- {{ dd($cartItem); }}  --}}
            
      
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col">
                        <div class="row text-muted fw-bold">Shirt</div>
                        <div class="row fw-bold">{{ $cartItem->name }}</div>
                    </div>
                    <div class="col">
                    {{-- <input class="form-control text-center fs-6 d-inline ms-3" id="inputQuantity" type="number"  value="{{ $cartItem->qty }}" style="max-width: 4rem; max-height:2rem; margin-top:40px;" wire:click="$emit('increment')" /> --}}
                    <div class="col">
                        <a href="#" wire:click="$emit('decrement', {{$cartItem->id}}, {{$cartItem->qty}})" class="text-decoration-none fs-2 fw-bold">-</a><a href="#" class="fs-5" class="border">{{ $cartItem->qty }}</a><a href="#" wire:click="$emit('increment', {{$cartItem->id}}, {{$cartItem->qty}})" class="text-decoration-none fs-4 fw-bold">+</a>
                    </div>
                    {{-- {{ $cartItem->rowId }} --}}
                    
                    </div>
                    <div class="col fw-bold">&euro; {{ $cartItem->price }} MAD <span wire:click="$emit('close', {{$cartItem->id}})" class="close">&#10005;</span></div>
                </div>
            </div>

        @endforeach
          {{-- <p>{{ $num }}</p> --}}
        {{-- {{ $cart->links() }} --}}


        
  
        {{-- <div class="back-to-shop"><a href="#" class="text-decoration-none">&leftarrow;</a><span class="text-muted fw-bold">Back to shop</span></div> --}}


          
    </div>
    <div class="col-md-4 summary">
        <div><h5><b>Summary</b></h5></div>
        <hr>
        <div class="row">
            {{-- <div class="col" style="padding-left:0;">Produits ({{ $cart->count(); }})</div> --}}
            <div class="col" style="padding-left:0;">Sous Total:</div>
            <div class="col text-right"> {{ Cart::total() }} MAD</div>
        </div>
        <form>
            <p>Mode de Livraison:</p>
            <select wire:model="selectedShippingOption" wire:change="$emit('shipping', $event.target.value)">
                {{-- <option class="text-muted">Standard-Delivery- &euro;5.00</option> --}}
                @foreach ($ServiceLivraison as $serv)
                <option value="{{$serv->id  }}" class="text-muted">{{ $serv->libelle }}</option>
                    
                @endforeach
               
            </select>
            <p>Prix de livraison:</p>
            <input id="" readonly wire:model="shippingPrice"  placeholder="Enter your code">

        </form>
        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
            <div class="d-flex m-0 p-0">
                <div class="col m-0 p-0">TOTAL :</div>
                {{-- <div class="col text-right">k</div> --}}
                <input class="col text-right" id="" wire:model="totalPrice"  >
            </div>
          
        </div>

        <a href="{{ route("client.Checkout") }}" class="w-100">
        <button class="btn-checkout fs-6">Passer la commande</button>
        </a>
        <a href="" class="w-100">
             <button class="btn-checkout fs-6">Continue shopping</button>
            </a>
    </div>
</div>
</div>
</div>
</div>

