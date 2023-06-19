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
	@vite(['resources/sass/auth.scss', 'resources/js/app.js'])
	@livewireStyles
</head>

<body>
	<div class="page-container">
		{{-- my register --}}
		<div class="register-container">
			<div class="register-header">
				<div class="logo-container">
					<a href="logo">
						<img src="{{ asset('storage/Logo/logo.png') }}" alt="logo">
					</a>
				</div>
				<div class="text-container">
					<h1>Créer votre compte</h1>
					<p>pour continuer sur Myriad Shop</p>
				</div>
				
				<form method="POST" action="{{ route('register') }}">
					@csrf
					{{-- nom et prenom --}}
					<div class="nom-prenom-container">
						<div class="nom-container">
							<label for="nom">Nom</label>
							<input class="form-control" value="{{ old('nom') }}" type="text" name="nom" id="nom"
								autocomplete="nom" autofocus required />
							@error('nom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="prenom-container">
							<label for="prenom">Prénom</label>
							<input class="form-control" value="{{ old('prenom') }}" type="text" name="prenom" id="prenom"
								autocomplete="prenom" autofocus required>
							@error('prenom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					
					{{-- adresse --}}
					<div class="adresse-container">
						<label for="adresse">Adresse</label>
						<input class="form-control" value="{{ old('adresse') }}" type="text" name="adresse" id="adresse"
							autocomplete="adresse" autofocus required>
						@error('adresse')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- ville --}}
					<div class="ville-container">
						<label for="ville">Ville</label>
						<select class="form-select" aria-label="Default select example" value="{{ old('ville') }}" name="ville"
							id="ville" autocomplete="ville" autofocus required>
							<option selected>Choisissez une ville</option>
							@foreach ($villes as $ville)
								<option value="{{ $ville->id }}">{{ $ville->nom }}</option>
							@endforeach
						</select>
						@error('ville')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- email --}}
					<div class="email-container">
						<label for="email">Email</label>
						<input class="form-control" value="{{ old('email') }}" type="text" name="email" id="email"
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
						<input class="form-control" value="{{ old('password') }}" type="password" name="password" id="password"
							autocomplete="password" autofocus required>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- confirm password --}}
					<div class="password-confirmer-container">
						<label for="password-confirmer">Confirmer Mot de passe</label>
						<input class="form-control" value="{{ old('password-confirmer') }}" type="password"
							name="password-confirmer" id="password-confirmer" autocomplete="password-confirmer"
							autofocus required>
						@error('password-confirmer')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- tele --}}
					<div class="phone-container">
						<label for="tel">Téléphone</label>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">+212</span>
							<input type="number" class="form-control" name="tel" id="tel"
								aria-label="Username" aria-describedby="basic-addon1" value="{{ old('tel') }}"
								autocomplete="tel" autofocus required>
							@error('tel')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<button type="submit" class="btn">Continuer</button>
				</form>
				<div class="register-footer">
					<span>Vous avez déjà un compte?</span>
					<a href="{{ route('login') }}">Se connecter</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
