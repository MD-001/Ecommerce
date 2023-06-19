<div>
	{{-- The Master doesn't talk, he acts. --}}
	<!-- Product section-->
	<section class="py-5">
		<div class="px-lg-5 container my-5 px-4">
			<div class="row gx-4 gx-lg-5 align-items-center">
				<div class="col-md-6"><img class="card-img-top mb-md-0 mb-5" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg"
						alt="..." /></div>
				<div class="col-md-6">
					<h1 class="display-5 fw-bolder">{{ $produit->designation }}</h1>
					<div class="fs-5 mb-5">
					</div>
					<p class="lead">{{ $produit->description }}</p>

					<div class="d-flex mb-3">

						<span class="fs-3 me-2"> Prix:</span>

						<span class="fs-3 fw-bold" style="color: rgb(44, 135, 44)"> {{ $produit->prix }} MAD</span>
					</div>

					<div class="d-flex">

						{{--  --}}
						{{-- {{ Cart::content()->count(); }} --}}

						{{-- {{  $arrayItems}} --}}

						@if (Cart::content()->where('id', $produit->ref)->count())
							{{-- <div class="alert alert-warning" role="alert">
                    deja dans panier
                  	</div> --}}
							<button type="button" class="btn btn-danger"
								wire:click="RemoveItemFromCart({{ $produit->ref }})">Supprimer</button>
						@else
							{{-- <form  action="{{ route('cart.store') }}" method="POST">
                            @csrf --}}
							<input class="form-control me-3 text-center" id="inputQuantity" oninput="limitQuantity()" type="number"
								min="1" max="{{ $produit->qte_stock }}" style="max-width: 4rem" value="1" wire:model="quantity"
								wire:change="$emit('selectedQty', $event.target.value)" />

							<input type="hidden" value="{{ $produit->ref }}" type="number" name="product_id" />
							<button class="btn btn-outline-dark flex-shrink-0" type="button"
								wire:click="addItemToCArt({{ $produit->ref }})">
								<i class="bi-cart-fill me-1"></i>
								Add to cart
							</button>
							{{-- </form> --}}
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Related items section-->
	<section class="bg-light py-5">
		<div class="px-lg-5 container mt-5 px-4">
			<h2 class="fw-bolder mb-4">Related products</h2>
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				@foreach ($relatedProduct as $product)
					<div class="col mb-5">
						<div class="card h-100">
							<!-- Product image-->
							<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">{{ $product->nom }}</h5>
									<!-- Product price-->
									{{ $product->prix }} MAD
								</div>
							</div>
							<!-- Product actions-->
							<div class="card-footer border-top-0 bg-transparent p-4 pt-0">
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
</div>
</section>
<!-- Footer-->
</div>
{{-- seet alert --}}
<script>
	window.addEventListener('swal:modal', event => {
		swal({
			title: event.detail.message,
			text: event.detail.text,
			icon: event.detail.type,
		});
	});

	window.addEventListener('swal:confirm', event => {
		swal({
				title: event.detail.message,
				text: event.detail.text,
				icon: event.detail.type,
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.livewire.emit('remove', event.detail.ref);
				}
			});
	});
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
