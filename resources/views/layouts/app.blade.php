<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'E-commerce') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	{{-- my-cart link --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Scripts -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	@livewireStyles
</head>

<body>
	<div class="app">
		{{-- back to top button --}}
		<a href="#" class="to-top">
			<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-up"
				viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
			</svg>
		</a>

		{{-- Blurs the page when the search component drops --}}
		<div class="layer"></div>
		{{--   --}}
		@if (!(request()->fullUrlIs('*register*') || request()->fullUrlIs('*login*')))
			{{-- search component --}}
			<div class="search-overlay w-100">

				{{-- search overlay --}}
				<div class="search-container">
					
					<form method="POST" class="col-md-10 offset-1 m-0" action=" {{ route('guest.chercherProduit') }} ">
						@method('POST')
						@csrf
						<div class="search-bar">
							<button type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
									class="bi bi-search search-icon" viewBox="0 0 16 16">
									<path
										d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
								</svg>
							</button>
							<input type="text" name="nomProduit" class="form-control" placeholder="Search for anything">
						</div>
					</form>

					<div class="col-md-1 close-overlay">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-x"
								viewBox="0 0 16 16">
								<path
									d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
							</svg>
						</button>
					</div>
				</div>
				<hr class="m-0">
				{{-- items overlay --}}
				<div class="items-overlay">
					<div class="col-md-6 categories">
						<h3>Popular Categories</h3>
						<ul class="m-0 p-0">
							@foreach ($categoriesSearchOverlay as $key => $categorieSearchOverlay)
								@if ($key < 4)
									<li>
										<a href=" {{ route('guest.toCategorie', $categorieSearchOverlay->nom) }} ">
											<div class="categorie-container">
												<img class="image" src="https://picsum.photos/100/100" alt="...">
												<div class="categorie-text">
													<h5 class="m-0">{{ $categorieSearchOverlay->nom }}</h5>
													<div class="categorie-see-more">
														<span>See more</span> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
															fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
															<path fill-rule="evenodd"
																d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
														</svg>
													</div>
												</div>
											</div>
										</a>
									</li>
								@endif
							@endforeach
						</ul>
					</div>
					<div class="col-md-6 products">
						<h3>Products of the day</h3>
						<ul class="m-0 p-0">
							@foreach ($produitsSearchOverlay as $produitSearchOverlay)
								<li>
									<a href="#">
										<div class="product-container">
											<img class="image" src="https://picsum.photos/100/100" alt="...">
											<div class="product-text">
												<h5 class="m-0">{{ $produitSearchOverlay->designation }}</h5>
												<div class="product-price">
													<span style="text-decoration: line-through ">{{ $produitSearchOverlay->prix }}</span>
													<span><strong>{{ $produitSearchOverlay->prix - ($produitSearchOverlay->prix * $produitSearchOverlay->promotion) / 100 }}</strong></span>
												</div>
											</div>
										</div>
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			{{-- navbar --}}
			<div class="header">
				<nav class="navbar navbar-expand-lg d-flex flex-column justify-content-center">

					<div class="row w-100 d-flex align-items-center justify-content-evenly">
						{{-- Left-side of the navbar --}}
						<div class="col-md-4 d-flex justify-content-md-start mb-md-0 mb-3">
							<div class="search-trigger">
								<button>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search"
										viewBox="0 0 16 16">
										<path
											d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
									</svg>
									<span class="ps-3">Chercher</span>
								</button>
							</div>
						</div>

						{{-- Middle-side of the navbar --}}
						<div class="col-md-4 d-flex justify-content-center">
							<a class="text-center" href="{{ url('/home') }}">
								<img width="200px" src="{{ asset('storage/Logo/' . 'logo.png') }}" alt="Logo">
							</a>
						</div>

						{{-- Right-side of the navbar --}}
						<div class="col-md-4 d-flex justify-content-md-end pe-3">
							<ul id="nav-icons" class="navbar-nav d-flex justify-content-center align-items-center mb-lg-0 gap-3">
								{{-- panier --}}
								<li class="nav-item">
									<a class="nav-link" href="{{ route('client-my-cart') }}">
										<div class="panier-svg">
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
												class="bi bi-cart3" viewBox="0 0 16 16">
												<path
													d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
											</svg>
											<div class="panier-number">
												<span> {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}</span>
											</div>
										</div>
										<div class="panier-text">
											<span>Panier</span>
										</div>
									</a>
									{{-- panier number --}}
								</li>
								@guest
									@if (Route::has('login'))
										<li class="nav-item se-connecter">
											<a class="nav-link" href="{{ route('login') }}">
												<button class="btn">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
														class="bi bi-person" viewBox="0 0 16 16">
														<path
															d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
													</svg>
													<span> Se connecter </span>
												</button>
											</a>
										</li>
									@endif
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
											data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->nom }}
										</a>

										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
								@endguest
							</ul>
						</div>
					</div>
				</nav>

				{{-- navbar-categories --}}
				<div class="navbar-categories">
					<div class="row d-flex justify-content-center align-items-center">
						@foreach ($categoriesSearchOverlay as $categorieSearchOverlay)
							<div class="col-lg-1">
								<a href="{{ route('guest.toCategorie', $categorieSearchOverlay->nom) }}">{{ $categorieSearchOverlay->nom }}</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		@endif



		<main>
			@yield('content')
			@include('sweetalert::alert')
			@yield('script')
		</main>



		<footer>
			@yield('footer-subscribe')
			{{-- footer-main --}}
			<div class="footer-main px-5">
				<div class="row d-flex justify-content-center">
					<div class="col-md-3">
						<h5>COMPANY INFO</h5>
						<ul class="p-0">
							<li><a href=""> About </a></li>
							<li><a href=""> Social </a></li>
							<li><a href=""> Policies </a></li>
							<li><a href=""> Blogger </a></li>
							<li><a href=""> Supply Chain </a></li>
							<li><a href=""> Impact </a></li>
							<li><a href=""> Discount </a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>CUSTOMER CARE</h5>
						<ul class="p-0">
							<li><a href=""> Shipping Info </a></li>
							<li><a href=""> Returns </a></li>
							<li><a href=""> Refund </a></li>
							<li><a href=""> How To Order </a></li>
							<li><a href=""> How To Track </a></li>
							<li><a href=""> Premium Merbership </a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>HELP & SUPPORT</h5>
						<ul class="p-0">
							<li><a href=""> Help Center </a></li>
							<li><a href=""> Privacy settings </a></li>
						</ul>
					</div>

					<div class="col-md-3 links">
						<div class="app-download">
							<h5 class="m-0">DOWNLOAD OUR APP</h5>
							<ul class="app-btn p-0">
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
											class="bi bi-apple" viewBox="0 0 16 16">
											<path
												d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
											<path
												d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
										</svg>
										<div class="app-text">
											<span class="small-title">Download on the</span>
											<span class="big-title">App Store</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
											class="bi bi-google-play" viewBox="0 0 16 16">
											<path
												d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z" />
										</svg>
										<div class="app-text">
											<span class="small-title">Download on the</span>
											<span class="big-title">Google Play</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="row links-social">
						<div class="col-md-5 credit-cards">
							<span class="m-0">ON ACCEPTE</span>
							<img src="{{ asset('storage/credit-cards.png') }}" alt="">
						</div>
						<div class="col-md-5 social-media">
							<span class="m-0">RETROUVEZ-NOUS SUR</span>
							<ul class="m-0 p-0">
								<li>
									<button>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
											class="bi bi-facebook" viewBox="0 0 16 16">
											<path
												d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
										</svg>
									</button>
								</li>
								<li>
									<button>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
											class="bi bi-instagram" viewBox="0 0 16 16">
											<path
												d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
										</svg>
									</button>
								</li>
								<li>
									<button>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
											class="bi bi-twitter" viewBox="0 0 16 16">
											<path
												d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
										</svg>
									</button>
								</li>
								<li>
									<button>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
											class="bi bi-pinterest" viewBox="0 0 16 16">
											<path
												d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
										</svg>
									</button>
								</li>
								<li>
									<button>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
											class="bi bi-youtube" viewBox="0 0 16 16">
											<path
												d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
										</svg>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			{{-- footer-end --}}
			<div class="footer-end px-5">
				<div class="col-md m-0 p-0">
					<ul class="m-0 p-0">
						<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-globe-europe-africa" viewBox="0 0 16 16">
								<path
									d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM3.668 2.501l-.288.646a.847.847 0 0 0 1.479.815l.245-.368a.809.809 0 0 1 1.034-.275.809.809 0 0 0 .724 0l.261-.13a1 1 0 0 1 .775-.05l.984.34c.078.028.16.044.243.054.784.093.855.377.694.801-.155.41-.616.617-1.035.487l-.01-.003C8.274 4.663 7.748 4.5 6 4.5 4.8 4.5 3.5 5.62 3.5 7c0 1.96.826 2.166 1.696 2.382.46.115.935.233 1.304.618.449.467.393 1.181.339 1.877C6.755 12.96 6.674 14 8.5 14c1.75 0 3-3.5 3-4.5 0-.262.208-.468.444-.7.396-.392.87-.86.556-1.8-.097-.291-.396-.568-.641-.756-.174-.133-.207-.396-.052-.551a.333.333 0 0 1 .42-.042l1.085.724c.11.072.255.058.348-.035.15-.15.415-.083.489.117.16.43.445 1.05.849 1.357L15 8A7 7 0 1 1 3.668 2.501Z" />
							</svg><span> Maroc </span></li>
						<li>Francais</li>
						<li>DH (MAD)</li>
					</ul>
				</div>
				<div class="col-md m-0 p-0">
					<ul class="m-0 p-0">
						<li>© 2023 Myriad, Inc.</li>
						<li><a href="#"> Conditions d'utilisation </a></li>
						<li><a href="#"> Confidentialité </a></li>
						<li><a href="#"> Publicités </a></li>
						<li><a href="#"> Boutiques locales </a></li>
						<li><a href="#"> Régions </a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>

	<script>
		//scroll to-top 
		const toTop = document.querySelector(".to-top");
		window.addEventListener("scroll", () => {
			if (window.pageYOffset > 100 && window.pageYOffset + window.innerHeight < document.documentElement
				.scrollHeight - 100) {
				toTop.classList.add("active");
			} else {
				toTop.classList.remove("active");
			}
		})

		//navbar scroll down
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.querySelector(".header").style.top = "0";
			} else {
				document.querySelector(".header").style.top = "-150px";
			}
			prevScrollpos = currentScrollPos;
		}

		// search script
		const showButton = document.querySelector('.search-trigger');
		const hideButton = document.querySelector('.close-overlay');
		const component = document.querySelector('.search-overlay');
		const layer = document.querySelector('.layer');

		showButton.addEventListener('click', function() {
			component.classList.toggle('show');
			layer.style.opacity = 1;
			layer.style.pointerEvents = 'auto';
		});

		hideButton.addEventListener('click', function() {
			component.classList.toggle('show');
			layer.style.opacity = 0;
			layer.style.pointerEvents = 'none';
		});

		//slider script
		const containers = document.querySelectorAll('.slider-container');
		containers.forEach((container) => {
			const slider = container.querySelector('.slider');
			const prevButton = container.querySelector('.prevButton');
			console.log(prevButton);
			const nextButton = container.querySelector('.nextButton');
			console.log(nextButton);
			const item = slider.querySelectorAll('.slider-item')[0];
			let itemWidth = parseInt(item.clientWidth * 5 + parseInt("36px", 10));

			prevButton.addEventListener('click', () => {
				slider.scrollLeft += -itemWidth;
			})

			nextButton.addEventListener('click', () => {
				slider.scrollLeft += itemWidth;
			})
		})

		// wishlist script
		const wishlist = document.querySelectorAll('.wishlist-icon-container');
		const heart = document.querySelectorAll('.heart-fill');

		wishlist.forEach((div) => {
			div.addEventListener('click', () => {
				div.classList.add('clicked');
				setTimeout(() => {
					div.classList.remove('clicked');
					div.closest('.heart-fill').set
				}, 200);
			});
		});
	</script>

	@livewireScripts

</body>

</html>
