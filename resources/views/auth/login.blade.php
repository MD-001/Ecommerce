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
	<div class="">
		<div class="row justify-content-center">

			<div class="row justify-content-center">
				{{-- my login --}}
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<section class="mt-5" style="height:100vh;">
						<div class="container py-5">
							<div class="row d-flex justify-content-center align-items-center h-100">
								<div class="col col-xl-10">
									<div class="card" style="border-radius: 1rem;">
										<div class="row g-0">
											<div class="col-md-6 col-lg-5 d-none d-md-block">
												<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form"
													class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
											</div>
											<div class="col-md-6 col-lg-7 d-flex align-items-center">
												<div class="card-body p-lg-5 mb-4 p-4 text-black">

													<form>

														<div class="d-flex align-items-center mb-3 pb-1">
															<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
															<span class="h1 fw-bold mb-0" style="font-size: 55px;">Logo</span>
														</div>

														<h5 class="fw-normal fs-3 mb-4 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

														<div class="form-outline mb-4">
															{{-- <input type="email" id="form2Example17" class="form-control form-control-lg fs-4" placeholder="Email address" /> --}}
															<input id="email" type="email"
																class="form-control form-control-lg fs-4 @error('email') is-invalid @enderror" name="email"
																value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

															@error('email')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror

														</div>

														<div class="form-outline mb-4">

															{{-- <input type="password" id="form2Example27" class="form-control form-control-lg fs-4" placeholder="Password" /> --}}
															<input id="password" type="password"
																class="form-control form-control-lg fs-4 @error('password') is-invalid @enderror" name="password"
																required autocomplete="current-password" placeholder="Password">

															@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror

														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="remember" id="remember"
																{{ old('remember') ? 'checked' : '' }}>

															<label class="form-check-label" for="remember">
																{{ __('Remember Me') }}
															</label>
														</div>

														<div class="mb-4 pt-1">
															<button type="submit" class="btn btn-dark btn-lg btn-block w-100" type="button">
																{{ __('Login') }}</button>

														</div>

														@if (Route::has('password.request'))
															<a class="small text-muted fs-5" href="{{ route('password.request') }}">
																{{ __('Forgot Your Password?') }}
															</a>
														@endif
														<p class="pb-lg-2 fs-5 mb-5 mt-2" style="color: #393f81;">Don't have an account? <a
																href="{{ route('register') }}" style="color: #393f81;">Register here</a></p>
														<a href="#!" class="small text-muted">Terms of use.</a>
														<a href="#!" class="small text-muted">Privacy policy</a>
													</form>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					{{-- end login --}}
			</div>
		</div>
</body>

</html>