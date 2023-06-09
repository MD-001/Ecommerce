Désignation: {{ $produit->designation }}<br />
description: {{ $produit->description }}<br />
prix : {{ $produit->prix }}<br />
image: {{ $produit->image }}<br />
tva : {{ $produit->tva }}<br />
rating: {{ $produit->rating }}<br />
marque->nom: {{ $produit->marque->nom }}<br />
marque->libelle: {{ $produit->marque->libelle }}<br />
marque->image: {{ $produit->marque->image }}<br />
fournisseur->nom: {{ $produit->fournisseur->nom }}<br />
fournisseur->email: {{ $produit->fournisseur->email }}<br />
fournisseur->tel: {{ $produit->fournisseur->tel }}<br />
fournisseur->adresse: {{ $produit->fournisseur->adresse }}<br />
@if ($produit->commentaire->count() > 0)
    @foreach ($produit->commentaire as $commentaire)
        commentaire->contenu: {{ $commentaire->contenu }}<br />
    @endforeach
@endif
propriete->libelle: {{ $produit->propriete->libelle }}<br />
propriete->description: {{ $produit->propriete->description }}<br />
