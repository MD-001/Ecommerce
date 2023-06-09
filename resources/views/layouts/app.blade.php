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
		<div class="search-overlay w-100 py-4">
			<form action="">
				<div class="row d-flex align-items-center justify-content-center">
					<div id="search-bar" class="col-md offset-md-1 d-flex justify-content-center align-items-center">
						<svg xmlns="http://www.w3.org/2000/svg" id="search" width="20" height="20" fill="currentColor"
							class="bi bi-search" viewBox="0 0 16 16">
							<path
								d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
						</svg>
						<input type="text" class="form-control" placeholder="Search for anything">
					</div>
					<div class="close col-md-1 d-flex justify-content-start">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
							viewBox="0 0 16 16">
							<path
								d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
						</svg>
					</div>
				</div>
			</form>
		</div>

		<div class="container-fluid p-0">
			<nav class="navbar navbar-expand-lg d-flex flex-column justify-content-center px-4">

				<div class="row w-100 d-flex align-items-center justify-content-evenly">
					{{-- Left-side of the navbar --}}
					<div class="col-md-4 d-flex justify-content-md-start mb-md-0 mb-3">
						<div class="search-icon">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search"
									viewBox="0 0 16 16">
									<path
										d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
								</svg>
							</span>
							<span class="ps-3">Search</span>
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
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart"
										viewBox="0 0 16 16">
										<path
											d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3"
										viewBox="0 0 16 16">
										<path
											d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">
									<button class="btn btn-outline-success">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person"
											viewBox="0 0 16 16">
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

			<div class="categories d-flex align-items-center">
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

		<main>
			{{-- carousel --}}
			<section class="py-4">
				<div class="px-lg-5 container-fluid d-flex justify-content-center px-4">
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

			<section>
				<div class="px-lg-5 container-fluid px-4">
					<div class="d-flex align-items-center flex-row gap-4">
						<h3 class="text-start"> Top Sellers </h3>
						<a href="">See more</a>
					</div>

					<div class="d-flex align-items-center flex-row gap-4">
						@for ($a = 0; $a < 5; $a++)
							<div class="card" style="width: 18rem;">
								<img src="https://picsum.photos/365/225" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
										content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						@endfor
					</div>

				</div>
			</section>
		</main>

		<main class="py-4">
			@yield('content')
			@yield('body')
			@yield('script')
		</main>
	</div>

	<script>
		const showButton = document.querySelector('.search-icon');
		const hideButton = document.querySelector('.close');
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
	</script>
</body>

</html>
