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

	<!-- Scripts -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
	<div class="app">
		{{-- Blurs the page when the search component drops --}}
		<div class="layer"></div>

		{{-- search component --}}
		<div class="search-overlay w-100">

			{{-- search overlay --}}
			<div class="search-container">
				<form class="col-md-10 offset-1" action="">
					<div class="search-bar">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
								class="bi bi-search search-icon" viewBox="0 0 16 16">
								<path
									d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
							</svg>
						</button>
						<input type="text" class="form-control" placeholder="Search for anything">
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
						<li>
							<a href="#">
								<div class="categorie-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="categorie-text">
										<h5 class="m-0">Categorie</h5>
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
						<li>
							<a href="#">
								<div class="categorie-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="categorie-text">
										<h5 class="m-0">Categorie</h5>
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
						<li>
							<a href="#">
								<div class="categorie-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="categorie-text">
										<h5 class="m-0">Categorie</h5>
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
						<li>
							<a href="#">
								<div class="categorie-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="categorie-text">
										<h5 class="m-0">Categorie</h5>
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
					</ul>
				</div>
				<div class="col-md-6 products">
					<h3>Products of the day</h3>
					<ul class="m-0 p-0">
						<li>
							<a href="#">
								<div class="product-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="product-text">
										<h5 class="m-0">product</h5>
										<div class="product-price">
											<span>Prev</span> <span>new</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="product-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="product-text">
										<h5 class="m-0">product</h5>
										<div class="product-price">
											<span>Prev</span> <span>new</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="product-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="product-text">
										<h5 class="m-0">product</h5>
										<div class="product-price">
											<span>Prev</span> <span>new</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="product-container">
									<img class="image" src="https://picsum.photos/100/100" alt="...">
									<div class="product-text">
										<h5 class="m-0">product</h5>
										<div class="product-price">
											<span>Prev</span> <span>new</span>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		{{-- navbar --}}
		<div class="container-fluid p-0">
			<nav class="navbar navbar-expand-lg d-flex flex-column justify-content-center px-4">

				<div class="row w-100 d-flex align-items-center justify-content-evenly">
					{{-- Left-side of the navbar --}}
					<div class="col-md-4 d-flex justify-content-md-start mb-md-0 mb-3">
						<div class="search-trigger">
							<button>
								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
									class="bi bi-search" viewBox="0 0 16 16">
									<path
										d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
								</svg>
								<span class="ps-3">Search</span>
							</button>
						</div>
					</div>

					{{-- Middle-side of the navbar --}}
					<div class="col-md-4 d-flex justify-content-center">
						<a class="text-center" href="#">Brand</a>
					</div>

					{{-- Right-side of the navbar --}}
					<div class="col-md-4 d-flex justify-content-md-end">
						<ul id="nav-icons" class="navbar-nav d-flex justify-content-center align-items-center mb-lg-0 gap-2">
							<li class="nav-item">
								<a class="nav-link" href="">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
										class="bi bi-heart" viewBox="0 0 16 16">
										<path
											d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
										class="bi bi-cart3" viewBox="0 0 16 16">
										<path
											d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">
									<button class="btn btn-outline-success">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
											class="bi bi-person" viewBox="0 0 16 16">
											<path
												d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
										</svg>
										Sign up
									</button>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			{{-- navbar-categories --}}
			<div class="navbar-categories d-flex align-items-center">
				<div class="container-fluid">
					<div class="row d-flex justify-content-center align-items-center gap-1">
						<div class="col-lg-1">
							<a href="#">All</a>
						</div>
						@for ($i = 0; $i < 6; $i++)
							<div class="col-lg-1">
								<a href="#">Test</a>
							</div>
						@endfor
						<div class="col-lg-1">
							<a href="#">Best deals</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- <!-- Right Side Of Navbar -->
					<ul class="navbar-nav ms-auto">
						<form class="d-flex">
							<button class="btn btn-outline-dark" type="submit">
								<i class="bi-cart-fill me-1"></i>
								Panier
								<span class="badge bg-dark ms-1 rounded-pill text-white">0</span>
							</button>
						</form>
						<!-- Authentication Links -->
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
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
					</ul> --}}

		<main class="mb-5">
			@yield('content')
			@yield('script')
		</main>

		<footer>
			{{-- footer-subscribe --}}
			<div class="footer-subscribe row m-0 px-5">
				<h5>Oui ! Je souhaite recevoir des offres exclusives, des idées de cadeaux uniques et des astuces personnalisées
					pour acheter et vendre sur site.</h5>
				<form class="form-subscribe row">
					<input class="form-control" type="Indiquer votre adresse email">
					<button class="btn btn-info">S'abonner</button>
				</form>
			</div>

			{{-- footer-main --}}
			<div class="footer-main px-5">
				<div class="row">
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
							<ul class="m-0 p-0">
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
											class="bi bi-android2" viewBox="0 0 16 16">
											<path
												d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z" />
										</svg></button></li>
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
											class="bi bi-apple" viewBox="0 0 16 16">
											<path
												d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
											<path
												d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
										</svg></button></li>
							</ul>
						</div>
						<div class="social-media">
							<h5 class="m-0">FIND US ON</h5>
							<ul class="m-0 p-0">
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
											class="bi bi-facebook" viewBox="0 0 16 16">
											<path
												d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
										</svg></button></li>
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
											class="bi bi-instagram" viewBox="0 0 16 16">
											<path
												d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
										</svg></button></li>
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
											class="bi bi-twitter" viewBox="0 0 16 16">
											<path
												d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
										</svg></button></li>
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
											class="bi bi-pinterest" viewBox="0 0 16 16">
											<path
												d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
										</svg></button></li>
								<li><button><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
											class="bi bi-youtube" viewBox="0 0 16 16">
											<path
												d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
										</svg></button></li>
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
						<li>© 2023 Etsy, Inc.</li>
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
</body>

</html>
