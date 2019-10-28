@extends('admin.master')
@section('title', 'New Product')
@section('content')

<div class="container-fluid">
	<div class="row">
		<main id="newProductForm" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
			<h3>Add New Product</h3>
			<div class="col-md-6">
				<div class="panel-body">
					<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group{{$errors->has('name')?' has-error':''}}">
							<label for="name">Category Name</label>
							<input type="text" class="form-control" id="name" name="name">
							<span class="text-danger">{{$errors->first('name')}}</span>
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

@endsection