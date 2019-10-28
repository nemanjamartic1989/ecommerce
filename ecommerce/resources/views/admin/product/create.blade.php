@extends('admin.master')
@section('title', 'New Product')
@section('content')

<div class="container-fluid">
	<div class="row">
		<main id="newProductForm" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
			<h3>Add New Product</h3>
			<div class="col-md-6">
				<div class="panel-body" ng-app="MyApp" ng-controller="MyController">
					<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group{{$errors->has('product_name')?' has-error':''}}">
							<label for="product_name">Product Name</label>
							<input type="text" class="form-control" id="product_name" name="product_name">
							<span class="text-danger">{{$errors->first('product_name')}}</span>
						</div>

						<div class="form-group{{$errors->has('product_code')?' has-error':''}}">
							<label for="product_code">Product Code</label>
							<input type="text" class="form-control" id="product_code" name="product_code" pattern="^[A-Za-z0-9]+$" ng-pattern-restrict>
							<span class="text-danger">{{$errors->first('product_code')}}</span>
						</div>

						<div class="form-group{{$errors->has('product_price')?' has-error':''}}">
							<label for="product_price">Product Price</label>
							<input type="text" id="product_price" name="product_price" class="form-control" pattern="^[0-9]+$" ng-pattern-restrict required>
							<span class="text-danger">{{$errors->first('product_price')}}</span>
						</div>

						<div class="form-group{{$errors->has('product_info')?' has-error':''}}">
							<label for="product_info">Product Description</label>
							<textarea name="product_info" id="product_info" class="form-control"></textarea>
							<span class="text-danger">{{$errors->first('product_info')}}</span>
						</div>

						<div class="form-group{{$errors->has('stock')?' has-error':''}}">
							<label for="stock">Product Stock</label>
							<input type="text" id="stock" name="stock" class="form-control">
							<span class="text-danger">{{$errors->first('stock')}}</span>
						</div>

						<div class="form-group{{$errors->has('image')?' has-error':''}}">
							<label for="image">Product Image</label>
							<input type="file" id="image" name="image" class="form-control">
							<span class="text-danger">{{$errors->first('image')}}</span>
						</div>

						<div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
							<label for="spl_price">Sale Price</label>
							<input type="text" id="spl_price" name="spl_price" class="form-control" pattern="^[0-9]+$" ng-pattern-restrict required>
							<span class="text-danger">{{$errors->first('spl_price')}}</span>
						</div>

						<div class="form-group{{$errors->has('category')?' has-error':''}}">
							<label for="spl_price">Categories</label>
							<select id="category" name="category" class="form-control">
								<option>-- Choose Category --</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
							<span class="text-danger">{{$errors->first('category')}}</span>
						</div>
						@if(Auth::user()->admin == 1)
						<button type="submit" class="btn btn-primary">Add</button>
						@endif
					</form>
				</div>
			</div>
		</main>
	</div>
</div>

<script type="text/javascript" src="{{ asset('dist/js/validation.js') }}"></script>

@endsection