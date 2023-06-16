@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		{{-- my register --}}
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<section class="bg-image rounded-4"
				style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); height: 100vh;">
				<div class="mask d-flex align-items-center h-100 gradient-custom-3">
					<div class="h-100 container">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col-12 col-md-9 col-lg-7 col-xl-6">
								<div class="card" style="border-radius: 15px;">
									<div class="card-body p-5 pb-4">
										<h2 class="text-uppercase mb-5 text-center">Create an account</h2>

										<form>

											<div class="form-outline mb-4">

												<input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
													placeholder=" Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

												@error('name')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>

											<div class="form-outline mb-4">

												<input id="prenom" type="text"
													class="form-control form-control-lg @error('prenom') is-invalid @enderror" placeholder=" prenom"
													name="prenom" value="{{ old('prenom') }}" required autocomplete="Prenom" autofocus>

												@error('prenom')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>

											<div class="form-outline mb-4">
												{{-- <input type="number" id="form3Example1cg" class="form-control form-control-lg" placeholder="Telephone" /> --}}
												<input id="tel" type="text" class="form-control form-control-lg @error('tel') is-invalid @enderror"
													placeholder=" tel" name="tel" value="{{ old('tel') }}" required autocomplete="Telephone" autofocus>

												@error('tel')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>

											<div class="form-outline mb-4">

												<input id="adress" type="text"
													class="form-control form-control-lg @error('adress') is-invalid @enderror" placeholder=" adress"
													name="adress" value="{{ old('adress') }}" required autocomplete="Adress" autofocus>

												@error('adress')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>

											<div class="form-outline mb-4">
												{{-- <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder=" Email" /> --}}
												<input id="email" type="text"
													class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder=" email"
													name="email" value="{{ old('email') }}" required autocomplete="Email" autofocus>

												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>

											<div class="form-outline mb-4">
												<select class="form-select" aria-label="Default select example" name="villeId">
													<option selected>Choisi un ville</option>

													@foreach ($villes as $ville)
														<option value="{{ $ville->id }}">{{ $ville->nom }}</option>
													@endforeach

												</select>

											</div>

											<div class="form-outline mb-4">
												{{-- <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" /> --}}
												<input id="password" type="password"
													class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required
													autocomplete="Password" placeholder="Password">

												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

											<div class="form-outline mb-5">
												{{-- <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Confirne password" /> --}}
												<input id="password-confirm" type="password" class="form-control form-control-lg"
													name="password_confirmation" required autocomplete="Confirme password" placeholder="Confirme password">
											</div>

											<!-- <div class="form-check d-flex justify-content-center mb-5">
																																									<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
																																									<label class="form-check-label" for="form2Example3g">
																																									I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
																																									</label>
																																					</div> -->

											<div class="d-flex justify-content-center">
												<button type="submit"
													class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">{{ __('Register') }}</button>

											</div>

											<p class="text-muted mt-5 mb-0 text-center">Have already an account? <a href="{{ route('login') }}"
													class="fw-bold text-body"><u>Login here</u></a></p>

										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			{{-- end register --}}

	</div>
@endsection
