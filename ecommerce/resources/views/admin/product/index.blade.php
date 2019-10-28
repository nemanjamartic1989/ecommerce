@extends('admin.master')
@section('title', 'List Products')
@section('content')

<main id="listOfProducts" class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
	<h3>Products</h3>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Price</th>
					@if(Auth::user()->admin == 1)
					<th>Delete</th>
					@endif
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td><img src="{{url('images', $product->image)}}" width="50"></td>
					<td>{{$product->product_name}}</td>
					<td>{{$product->product_price}}</td>
					@if(Auth::user()->admin == 1)
					<td>
						<form action="{{route('product.destroy', $product->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" class="btn btn-sm btn-danger" value="DELETE">
						</form>
					</td>
					@endif
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $products->links() !!}
	</div>
</main>

@endsection