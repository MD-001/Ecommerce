@extends('layouts.app')
<title>Products / Categorie Name</title>

@section('content')
	{{-- directory container --}}
	<div class="directory-container">
		<div class="directory-links">
			<a href="{{ url('/shop/index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
					fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
					<path
						d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
				</svg>Home
            </a> 
            <span>/</span>
			<a href="#">Categorie</a>
		</div>
	</div>

	{{-- all products --}}
	<section>
		<div class="px-lg-5 container">
			{{-- filter container --}}
			<div class="filter-container">
				{{-- off-canvas button --}}
				<div class="filter">
					<button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
						aria-controls="offcanvasWithBothOptions">
						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-sliders"
							viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
						</svg>
						<span>Tous les filtres</span>
					</button>
				</div>

				{{-- off-canvas --}}
				<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
					aria-labelledby="offcanvasWithBothOptionsLabel">
					<form action="">
						<div class="form-container">
							<div class="form-header">
								<h2>Filtres</h2>
							</div>
							<div class="range-prix">
								<h5>Gamme De Prix</h5>
								<input type="range" class="form-range" name="prix" id="prix">
							</div>
							<div class="checkbox-prix">
								<h5>Filtrer Par Prix</h5>
								<div>
									<input class="form-check-input" type="checkbox" name="" id="">
									<label for="">$50 - $100L (208)</label>
								</div>
								<div>
									<input class="form-check-input" type="checkbox" name="" id="">
									<label for="">$100L - $500 (311)</label>
								</div>
								<div>
									<input class="form-check-input" type="checkbox" name="" id="">
									<label for="">$500 - $1,000 (485)</label>
								</div>
								<div>
									<input class="form-check-input" type="checkbox" name="" id="">
									<label for="">$1,000 - $5,000 (213)</label>
								</div>
							</div>
						</div>
						<div class="form-confirmer">
							<button type="button" data-bs-dismiss="offcanvas" aria-label="Close">Annuler</button>
							<button>Confirmer</button>
						</div>
					</form>
				</div>

				{{-- sort-by --}}
				<div class="sort-by">
					<span>Sort by:</span>
					<select class="form-select" name="" id="">
						<option value="Pertinence">Pertinence</option>
						<option value="Le plus récent">Le plus récent</option>
						<option value="Le moins cher">Le moins cher</option>
						<option value="Le plus cher">Le plus cher</option>
						<option value="Les mieux notés">Les mieux notés</option>
					</select>
				</div>
			</div>

			{{-- products section --}}
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				@foreach ($produitsDeCategorie as $produit)
					<div class="col mb-5">
						<a class="slider-item" href="">
							<div class="slider-item-image">
								<img src="https://picsum.photos/300/300" alt="...">
							</div>

							<div class="slider-body">
								<button class="discount-button" disabled> {{$produit->promotion}}% Off </button> <span> <strong>{{ $produit->prix - (($produit->prix*$produit->promotion)/100) }} DH </strong> </span>
								<h5 class="slider-title mb-0">{{$produit->designation}}</h5>
								<p class="slider-text">{{$produit->description}}</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection
