@extends('layouts.app')

<title>Shop Homepage</title>
    @section('content')
    {{-- carousel --}}
			<section class="py-4">
				<div class="px-lg-5 container-fluid d-flex justify-content-center">
					<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							@for ($a = 0; $a < 5; $a++)
								<div class="carousel-item active">
									<img src="https://picsum.photos/1920/720" class="d-block w-100" alt="...">
									<div class="carousel-caption text-dark text-start">
										<h5>First slide label</h5>
										<p>Some representative placeholder content for the first slide. </p>
									</div>
								</div>
							@endfor
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</section>

			{{-- sliders --}}
			<section class="container mb-4 slider-container">
				<x-slider.slider-header />
					<div class="slider">
						@foreach ($telephones as $produit)
						<x-slider.slider-main :produit="$produit" />	
						@endforeach
					</div>
			</section>

			<section class="container mb-4 slider-container">
				<x-slider.slider-header />
					<div class="slider">
						@foreach ($laptops as $produit)
						<x-slider.slider-main :produit="$produit" />	
						@endforeach
					</div>
			</section>

			<section class="container mb-4 slider-container">
				<x-slider.slider-header />
					<div class="offre-container">
						<img src="" alt="">
						<div class="offre-text">
							<div class="offre-counter">

							</div>
						</div>
					</div>
			</section>

			<section class="container mb-4 slider-container">
				<x-slider.slider-header />
					<div class="offre-container">
						<img src="" alt="">
						<div class="offre-text">
							<div class="offre-counter">

							</div>
						</div>
					</div>
			</section>

			{{-- section of infos --}}
			<section class="shipping-info">
				<div class="container">
					<ul>
						<!-- Free Shipping -->
						<li>
							<div class="media-icon">
								<i class="bi bi-truck"></i>
							</div>
							<div class="media-body">
								<h5>Free Shipping</h5>
								<span>On order over $99</span>
							</div>
						</li>
						<!-- Money Return -->
						<li>
							<div class="media-icon">
								<i class="bi bi-chat-left-text"></i>
							</div>
							<div class="media-body">
								<h5>24/7 Support.</h5>
								<span>Live Chat Or Call.</span>
							</div>
						</li>
						<!-- Support 24/7 -->
						<li>
							<div class="media-icon">
								<i class="bi bi-credit-card-2-back"></i>
							</div>
							<div class="media-body">
								<h5>Online Payment.</h5>
								<span>Secure Payment Services.</span>
							</div>
						</li>
						<!-- Safe Payment -->
						<li>
							<div class="media-icon">
								<i class="bi bi-arrow-repeat"></i>
							</div>
							<div class="media-body">
								<h5>Easy Return.</h5>
								<span>Hassle Free Shopping.</span>
							</div>
						</li>
					</ul>
				</div>
			</section>
        @endsection
		
		@section('footer-subscribe')
			{{-- footer-subscribe --}}
			<div class="prepended-background-shape">
				<span class="inline-svg">
					<svg xmlns="http://www.w3.org/2000/svg" class="wt-fill-denim-tint wt-width-full" viewBox="0 0 1280 30"
						preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false">
						<path
							d="M1280 30h-8.1c-5.7 0-37-10.9-37.4-10.7-2.2 1.2-17.6-.8-19.9-4.1 0 0-9.8-3.3-10.3-3.3-1.3 0-12.6 3-13 2.5-.7-.7-13.8-3.7-13.8-5.3-2.3 1.3-21.2-7.8-23.4-6.7-1-.8-2.2-1.5-3.3-2.4-1.8 1.9-3.3 3.4-4.7 4.9-2.7-.8-4.8-1.4-7.1-2.1-.5.1-1 .3-1.5.5-4 1.3-5.3 1-7.3-1.3-1.7-2.1-5.3-2.2-8.1-.8-2 1-4.6 2.6-6.5 2.3-4.5-.7-6 1.1-8.1 2.6-1.5 1.1-3.1 2.1-4.6 3.1-1.8-.8-3.5-1.2-5.3-2-.3.8-.7 1.3-.8 2-.5 0-.8 0-1.2-.1V3.5c-2 .8-3.5 1.2-4.8 1.8-1.3-.8-2.3-1.6-3.5-2.4-5.1 1.2-10.1 2-15.3.1-.8-.3-2.2-.3-3-.1-1.2.3-2.2 1-3.3 1.6-1.2-.3-2.3-.8-3.8-1.1-1.7 1.1-3 2.9-6.5 1.6-.8-.3-2.3.1-3.5.3-4 .8-7.8 1.4-11.9 2-1.5.2-3-.2-4.7-.3-1-.1-1.8-.2-2.8-.2-6-.3-11.8 2.3-17.8.1-.5-.2-1.3-.2-1.8-.1-3.8 1.6-8.3 1.2-12.5 1.3-1 0-2.2.5-3.1.9-1.8.8-9.5 1.5-11.5 1.1-4.5-.8-8.1-.3-10.1 2.3-12.8-1.6-12.8-1.6-17.1.9-2.3-.4-6-1.6-7.1-1.1-4.7 2.4-7 .2-9.8-1.4-5 1.1-10.8-.8-15.8 1.4-7.3-2.7-14.9-2.7-22.9-.2-5-3.7-9.6-3.8-13.8 0-.3-1.3-.7-2.5-1-3.8-3.3.8-6.1 1.1-8.6 1.8-2.7.7-6 2.3-7.5 1.9-4.2-1.3-5.3 1.8-9 1.4-1-.9-2.3-2.2-4-3.5-1.3.3-2.8.7-4 1-3.5 1.1-6.8 2-10.3 0-.5-.3-1.8-.2-2.8-.1-2.5.2-4.8.7-7.5.9-.8.9-1.7 1.9-2.3 2.9-8.5-1.1-16.4-2.6-24.7-.4-.3.1-1.2-.1-1.7-.3-2.3-1.2-3.7-.3-5.1.8-1.2.7-2.7 1.8-4 1.8-7.3.2-14.8-.4-22.1.3-3 .3-6.8-.3-9 .7-3.3 1.5-6 .9-9.1.5-2.7-.4-5-.9-7.1-2.1-2-1-4.3-.5-4.6 1.1-.3 1.5-1.8 2.3-3.7 2.1-3.3-.8-6.8-.3-10-1.8-4.8-2.1-10.6-2.7-16.3-.7-1.7.7-3.3 1-5 1.6-.3.1-.8.1-1.5.1-1.2-.7-2.3-1.2-3.5-1.9-2 1.8-4.6 1.8-7.1.9-2.8-.8-5.6-1.3-8.8-.9-2.7.3-5.5.5-8.3.7-2 .1-4.5.8-5.8-.9-.2-.3-1.5-.4-2.2-.3-3.7.7-7.3 1.5-11 2.2-.2-.3-.5-.5-.5-.7-.2-.3-.2-.8-.2-.8-1.8.5-3.7 1.2-5.6 1.4-1.8.2-4.7-.7-5.8-.1-3.8 1.9-8.1 1.2-12.3 1.9-2.2-2.5-2.2-2.5-5.8-.9-.7.3-1.5.5-2.3.5-3-.1-6.1-.2-9.1-.5-2.7-.3-5.6-.5-7.6-1.4s-3.8-1.3-6.1-1.2c-4.6.2-9.3.3-13.9.5-4.3.2-8.6.4-14.3.8-1.7-.5-4.7-1.2-7.5-2.2-3.7-1.4-7.1-1.4-10.8.1-1.7.7-4.5 1.6-5.5 1.2-3.3-1.4-1.7 1.3-3 1.1-1.8-.3-3.7-.9-5.1-.7-3.7.4-7.1-.2-10.8-.1-5 .1-10 0-11.6 4.1-5-2.4-9.1-1-13 .5-1.3-.8-2.2-1.4-2.8-1.9-1.7.5-3 1.3-4.2 1.1-2.7-.3-5-1.1-7.3-1.8-1 .4-2 1-3 1.1-5.1.4-10.3.4-15.3.9-2 .2-5-.5-6.6 1.1-.3.3-2.8.4-3.3 0-2.2-1.9-5.1-1.2-8-1-3.3.3-6.6.5-9.8-.7-1.5-.5-4-.8-5.3-.2-4.6 1.9-9.5 2.6-14.9 3.3-5.6.8-9.8-.5-13.9-2.2-1.7 1-3.3 1.6-5.5.4-4.8-3-10.1-2.1-15.6-.7-2.8-.8-5.5-3.3-9.6-1.2-5.6-.8-11.1-.7-16.4 1-.7.2-2 .1-2.3-.2-1.7-1-3.5-1.8-6-1.6-1.2-2.5-4-.9-6.1-.8-2.5 0-5.1 1-7.1.5-2.5-.7-5-.4-7.3-.8-2.8-.4-6 .8-9 .8-5.3.3-10 1.4-13.9 3.6-.8.4-1.7.9-2.5.9-3.8.3-7.6.7-11.5.4-3.7-.3-7.3-.7-11.1-.1-1 .1-2.3-.5-3.3-.9-2.5-1-4.8-1.9-8.1-1.1-2.2.4-4.2 0-3.8-1.8-2.3.1-5 .8-7.1.3-2-.4-3-.9-4.5.5-.7.5-3.2.1-4.6.5-4.2.9-8.1 2.4-12.3 3-2.2.3-5.5.3-7.5-1.3-3.5-2.6-5.3-2.4-11-.9-1.3.3-2.8.8-4.3.9-3.3.2-6.8.3-10.8.5-2-2.9-6-5.2-11.5-7v3.1c-4.5-3.8-10.8-3-16.1-4.4-4.5 1.8-9 3.4-14.6 5.5-5-1-9.6-3.1-15.3-1.2-1 .3-3.2.1-4-.4-3.2-1.9-7.5-1.9-11-3.2-4.2-1.6-8.8-2.9-13.3-4.2-1.2-.3-11.8 2.4-13 2.4-6.6 0-20.3 11.5-25.6 9.8-6.1-2-13 .2-20.1-1-8.1 2.3-15.3 7.2-19.8 7.7H0M172.9 20c.1 0 .3 0 0 0z">
						</path>
					</svg>
				</span>
			</div>
			<div class="footer-subscribe row m-0 px-5">
				<h5>Oui ! Je souhaite recevoir des offres exclusives, des notifications sur les derniers produits et des astuces
					personnalisées.</h5>
				<form class="form-subscribe row">
					<input class="form-control" placeholder="Indiquer votre adresse email">
					<button type="submit" class="btn">S'abonner</button>
				</form>
			</div>
		@endsection

@section('script')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="admin/js/scripts.js"></script>

@endsection

