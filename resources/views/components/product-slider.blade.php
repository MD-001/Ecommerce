<div class="section-slider-header">
	<div class="section-slider-description">
		<h3 class="m-0">Best sellers</h3>
		<a href=""><button class="show-more"> All products </button></a>
	</div>
	<div class="section-slider-buttons">
		<button class="prevButton">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left"
				viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
			</svg>
		</button>
		<button class="nextButton">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-right"
				viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
			</svg>
		</button>
	</div>
</div>

<div class="slider">
	@for ($a = 0; $a < 10; $a++)
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
				<button class="discount-button" disabled> 22% Off </button>
				<h5 class="slider-title mb-0">Product {{ $a }}</h5>
				<p class="slider-text">Some quick example text to build on the card title and make up the bulk of the card's
					content.</p>
			</div>
		</a>
	@endfor
</div>

