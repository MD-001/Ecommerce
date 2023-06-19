@extends('layouts.app')

@section('content')
	@livewire('single-product', ['produit' => $produit, 'relatedProduct' => $relatedProduct])
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
