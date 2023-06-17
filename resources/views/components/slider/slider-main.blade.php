<a class="slider-item" href="">
	<div class="slider-item-image">
		<img src="https://picsum.photos/300/300" alt="...">
		<div class="wishlist-icon-container">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart"
				viewBox="0 0 16 16">
				<path class="heart-fill"
					d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
			</svg>
		</div>
	</div>

	<div class="slider-body">
		<button class="discount-button" disabled> {{ $produit->promotion }}% Off </button> <span> <strong>{{ $produit->prix - (($produit->prix*$produit->promotion)/100) }} DH </strong> </span>
		<h5 class="slider-title mb-0"> {{ $produit->designation }} </h5>
		<p class="slider-text"> {{ $produit->description }}</p>
	</div>
</a>
