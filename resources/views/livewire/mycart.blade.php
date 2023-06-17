<div>
	{{-- Be like water. --}}
	<h1>test livewire</h1>
	{{-- {{ dd($cart); }} --}}
	{{-- <p>{{ $num }}</p>
    <button wire:click="add" >+</button>
    <button wire:click="sub" >-</button> --}}

	<div class="card mt-3">
		<div class="row">
			<div class="col-md-8 cart">
				<div class="title">
					<div class="row">

						<div class="col">
							<h4><b>Shopping Cart</b></h4>
						</div>
						<div class="col align-self-center text-muted text-right">3 items</div>
					</div>
				</div>

				@foreach (Cart::content() as $cartItem)
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
									<a href="#" wire:click="$emit('decrement', {{ $cartItem->id }}, {{ $cartItem->qty }})"
										class="text-decoration-none fs-5 fw-bold">-</a><a href="#" class="border">{{ $cartItem->qty }}</a><a
										href="#" wire:click="$emit('increment', {{ $cartItem->id }}, {{ $cartItem->qty }})"
										class="text-decoration-none fw-bold">+</a>
								</div>
								{{-- {{ $cartItem->rowId }} --}}

							</div>
							<div class="col fw-bold">&euro; {{ $cartItem->price }} MAD <span wire:click="$emit('close', {{ $cartItem->id }})"
									class="close">&#10005;</span></div>
						</div>
					</div>
				@endforeach
				{{-- <p>{{ $num }}</p> --}}
				{{-- {{ $cart->links() }} --}}

				<div class="back-to-shop"><a href="#" class="text-decoration-none">&leftarrow;</a><span
						class="text-muted fw-bold">Back to shop</span></div>

				<div class="back-to-shop fixed-bottom text-center">
					<a href="#" class="text-decoration-none">&leftarrow;</a>
					<span class="text-muted fw-bold">Back to shop</span>

				</div>

			</div>
			<div class="col-md-4 summary">
				<div>
					<h5><b>Summary</b></h5>
				</div>
				<hr>
				<div class="row">
					<div class="col" style="padding-left:0;">Produits ({{ $cart->count() }})</div>
					<div class="col text-right"> {{ Cart::total() }} MAD</div>
				</div>
				<form>
					<p>SHIPPING</p>
					<select>
						{{-- <option class="text-muted">Standard-Delivery- &euro;5.00</option> --}}
						@foreach ($ServiceLivraison as $serv)
							<option class="text-muted">{{ $serv->nom }}</option>
						@endforeach

					</select>
					<p>GIVE CODE</p>
					<input id="code" placeholder="Enter your code">
				</form>
				<div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
					<div class="col">TOTAL PRICE</div>
					<div class="col text-right">&euro; 137.00</div>
				</div>
				<button class="btn-checkout">CHECKOUT</button>
			</div>
		</div>
	</div>
</div>
</div>
