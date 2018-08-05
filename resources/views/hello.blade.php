Hello E-Tech You are the company in the future

@foreach($products as $product )
	{{ $product->name }}
	{{ $product->id }}
	${{ $product->cost }}
	{{ $product->created_at }}
@endforeach