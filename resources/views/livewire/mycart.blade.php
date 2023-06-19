<section class="shopping-cart-container">
	<div class="shopping-cart">
		<div class="card my-3">
			<div class="row">
				<div class="col-md-8 cart">
					<div class="title">
						<div class="row d-flex align-items-center">
							<div class="col">
								<h4>
									<b>Shopping Cart</b>
								</h4>
							</div>
							<div class="col align-self-center text-muted text-right">({{ $cart->count() }}) items</div>
						</div>
					</div>

					@foreach (Cart::content() as $cartItem)
						<div class="row border-top border-bottom">
							<div class="row items-info">
								<div class="col-2">
									<img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg">
								</div>
								<div class="col">
									<div class="row text-muted fw-bold">Shirt</div>
									<div class="row fw-bold">{{ $cartItem->name }}</div>
								</div>
								<div class="col">
									<div class="col quantite-container">
										<a href="#" wire:click="$emit('decrement', {{ $cartItem->id }}, {{ $cartItem->qty }})"
											class="text-decoration-none fs-5 fw-bold">-</a>

										<a href="#" class="quantite-number">{{ $cartItem->qty }}</a>

										<a href="#" wire:click="$emit('increment', {{ $cartItem->id }}, {{ $cartItem->qty }})"
											class="text-decoration-none fw-bold">+</a>
									</div>
								</div>
								<div class="col prix-container">
									<span class="fw-bold">{{ $cartItem->price }} MAD </span>
									<span wire:click="$emit('close', {{ $cartItem->id }})" class="close">&#10005;</span>
								</div>
							</div>
						</div>
					@endforeach

				</div>
				<div class="col-md-4 summary">
					<div class="title">
						<h4 class="m-0">
							<b>Summary</b>
						</h4>
					</div>
					<hr>
					<div class="row produit-prix">
						<div class="col" style="padding-left:0;">Produits ({{ $cart->count() }})</div>
						<div class="col text-right"> <strong>{{ Cart::total() }} MAD </strong> </div>
					</div>
					<form>
						<div>
							<p>SHIPPING</p>
							<select class="form-select">
								@foreach ($ServiceLivraison as $serv)
									<option class="text-muted">{{ $serv->nom }}</option>
								@endforeach
							</select>
						</div>

						<div>
							<p>GIVE CODE</p>
							<input class="form-control" id="code" placeholder="Enter your code">
						</div>
					</form>
					<div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
						<div class="col">Prix Total</div>
						<div class="col text-right"> <strong> {{ Cart::total() }} MAD </strong> </div>
					</div>
					<button class="btn">CHECKOUT</button>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
