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
	@vite(['resources/sass/auth.scss', 'resources/js/app.js'])
</head>

<body>
	<div class="page-container">
		<div class="login-container">
			{{-- my login --}}
			<div class="row g-0">
				<div class="col-md-6 col-lg-6 d-none d-md-block">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form"
						class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="login-header">
						<div class="logo-container">
							<a href="logo">
								<img src="{{ asset('storage/Logo/logo.png') }}" alt="logo">
							</a>
						</div>
						<div class="text-container">
							<h1>Identifiez-vous</h1>
							<p>pour continuer sur Myriad Shop</p>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
							
							{{-- email --}}
							<div class="email-container">
								<label for="email">Email</label>
								<input class="form-control" value=" {{ old('email') }} " type="text" name="email" id="email"
									autocomplete="email" autofocus required>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							{{-- password --}}
							<div class="password-container">
								<label for="password">Mot de passe</label>
								<input class="form-control" value=" {{ old('password') }} " type="text" name="password" id="password"
									autocomplete="password" autofocus required>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<button type="submit" class="btn">Continuer</button>
						</form>
						<div class="register-footer">
							<span>Pas de compte?</span>
							<a href="{{ route('register') }}">Créer un compte</a>
						</div>
						<div class="terms">
							<a href="#">Terms & services</a>
							<span>|</span>
							<a href="#">Policies</a>
						</div>
					</div>
				</div>
			</div>
			{{-- end login --}}
		</div>
	</div>
</body>

</html>
