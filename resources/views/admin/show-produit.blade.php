@extends('layouts.app')
@section('content')
       
       <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset($produit->image) }}" alt="image" /></div>
                    {{-- <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $produit->image ? asset('storage/' . $produit->image) : '/images/User.jpg' }}" alt="..." /></div> --}}
                    <div class="col-md-6">
              
                        <h1 class="display-5 fw-bolder">{{ $produit->designation }}</h1>
             
                        <p class="lead">{{ $produit->description }}</p>
                        <div class="d-flex mb-3">
                           
                            <button class="btn btn-dark flex-shrink-0 fs-6  w-25" type="button">
                     
                                Categorie
                            </button> 
                            
                            <span class="ms-3 pt-1 fs-5"> {{ $produit->categorie->nom }}</span>
                        </div>
                        <div class="d-flex mb-3">
                            <button class="btn btn-dark flex-shrink-0 fs-6  w-25" type="button">
                                Marque
                            </button> 
                            
                            <span class="ms-3 pt-1 fs-5"> {{  $produit->marque->nom }}</span>
                        </div>
                        <div class="d-flex mb-3">
                    
                            <button class="btn btn-dark flex-shrink-0 fs-6  w-25" type="button">
                                fournisseur
                            </button>
                            <span class="ms-3 pt-1 fs-5"> {{ $produit->fournisseur->nom }}</span>
                        </div>
                        <div class="d-flex mb-3">
                            <button class="btn btn-dark flex-shrink-0 fs-6 w-25" type="button">
                                quantite en stock
                            </button> 
                            <input class="form-control ms-3 text-center fs-5 me-3" id="inputQuantity" type="num" readonly value="{{ $produit->qte_stock }}" style="max-width: 5rem" />
                        </div>
                        <div class="d-flex mb-3">
                            <button class="btn btn-dark flex-shrink-0 fs-6  w-25" type="button">
                                Prix
                            </button>
                            <span class="ms-3 pt-1 fs-5"> {{ $produit->prix }}</span>
                        </div>
                        <div class="d-flex mb-3">
                            <button class="btn btn-dark flex-shrink-0 fs-6  w-25" type="button">
                                Date de creation
                            </button>
                            <span class="ms-3 pt-1 fs-5"> {{  \Carbon\Carbon::parse($produit->created_at)->format('d/m/Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <!-- Footer-->
        @endsection

