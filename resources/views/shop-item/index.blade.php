
@extends('layouts.app')

@section('content')
       
       <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">{{ $produit->designation }}</h1>
                        <div class="fs-5 mb-5">
                        </div>
                        <p class="lead">{{ $produit->description }}</p>

                        <div class="d-flex mb-3">
                           
                            <span class=" fs-3 me-2"> Prix:</span>
                             
                            <span class=" fs-3 fw-bold" style="color: rgb(44, 135, 44)"> {{  $produit->prix }} MAD</span>
                        </div>


                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" oninput="limitQuantity()" type="number" min="1" max="{{ $produit->qte_stock }}" {} value="1" style="max-width: 4rem" />

                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ( $relatedProduct as $product)
                        
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $product->nom }}</h5>
                                        <!-- Product price-->
                                        {{ $product->prix }} MAD
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
                   
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        @endsection
 @section('script')

 <script>
    function limitQuantity() {
        var inputQuantity = document.getElementById('inputQuantity');
        var selectedQuantity = parseInt(inputQuantity.value);
        var maxQuantity = parseInt(inputQuantity.getAttribute('max'));
        var minQuantity = parseInt(inputQuantity.getAttribute('min'));

        if (selectedQuantity > maxQuantity) {
            inputQuantity.value = maxQuantity;
        }

        if (selectedQuantity < minQuantity) {
            inputQuantity.value = minQuantity;
        }
    }
</script>
 

@endsection
