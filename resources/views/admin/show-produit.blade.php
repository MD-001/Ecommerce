@extends('layouts.app')
@section('content')
<body>
    <div class="m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $produit->image }}" alt="Image du produit" class="img-fluid product-image">
                </div>
                <div class="col-md-6">
                    <h1>{{ $produit->designation }}</h1>
                    <div class="product-details">
                        <span style="margin-left:50px"><h3 class="d-inline-block">Catégorie:</h3> {{ $produit->categorie->nom }} </p>
                    </div>
                    <p class="product-description">{{ $produit->description }}</p>
                    <div class="product-details">
                        <p class="product-price">Prix: {{ $produit->prix }} MAD</p>
                        <p class="product-tva">TVA: {{ $produit->tva }}%</p>
                        <p class="product-rating">Évaluation: {{ $produit->rating }}/5</p>
                    </div>
                     <div class="brand-details">
                        <h4 class="brand-name">Marque: {{ $produit->marque->nom }}</h4>
                        <p class="brand-description">{{ $produit->marque->libelle }}</p>
                        <img src="{{ $produit->marque->image }}" alt="Logo de la marque" class="img-fluid brand-logo" height="20" width="100" >
                    </div>
                    <div class="supplier-details">
                        <h4 class="supplier-name">Fournisseur: {{ $produit->fournisseur->nom }}</h4>
                        <p class="supplier-email">Email: {{ $produit->fournisseur->email }}</p>
                        <p class="supplier-phone">Téléphone: {{ $produit->fournisseur->tel }}</p>
                        <p class="supplier-address">Adresse: {{ $produit->fournisseur->adresse }}</p>
                    </div>
                    @if ($produit->commentaire->count() > 0)
                        <div class="comments-section">
                            <h4>Commentaires:</h4>
                            @foreach ($produit->commentaire as $commentaire)
                                <p class="comments">{{ $commentaire->contenu }}</p>
                            @endforeach
                        </div>
                    @endif
                    
                    <div class="property-details">
                        <h4>Propriété:</h4>
                        <p class="property-label">Libellé: {{ $produit->propriete->libelle }}</p>
                        <p class="property-description">Description:{{ $produit->propriete->description }}</p>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection