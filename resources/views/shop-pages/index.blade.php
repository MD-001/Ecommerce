@extends('layouts.app')

<title>Shop Homepage</title>
    @section('content')
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

			{{-- <section>
				<div class="quality-section row">
					<div class="col-md-4">
						<img src="" alt="">
						<div class="quality-text">
							<h5></h5>
							<p></p>
						</div>
					</div>
					<div class="col-md-4">
						<img src="" alt="">
						<div class="quality-text">
							<h5></h5>
							<p></p>
						</div>
					</div>
					<div class="col-md-4">
						<img src="" alt="">
						<div class="quality-text">
							<h5></h5>
							<p></p>
						</div>
					</div>
					<div class="col-md-4">
						<img src="" alt="">
						<div class="quality-text">
							<h5></h5>
							<p></p>
						</div>
					</div>
				</div>
			</section> --}}

			{{-- sliders --}}
			<section class="slider-container mt-2 px-5">
				<x-product-slider />
			</section>

			<section class="slider-container mt-5 px-5">
				<x-product-slider />
			</section>

			<section class="slider-container mt-5 px-5">
				<x-product-slider />
			</section>

        @endsection
@section('script')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="admin/js/scripts.js"></script>

@endsection
