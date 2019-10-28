@extends('admin.master')
@section('title', 'Category Page')
<main id="listOfCategories" class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
	<h3>List Categories</h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Category Name</th>
					@if(Auth::user()->admin == 1)
					<th>Action</th>
					@endif
				</tr>
			</thead>
			<tbody>
				@if(!empty($categories))
				@foreach($categories as $category)
				<tr>
					<td>{{$category->name}}</td>
					@if(Auth::user()->admin == 1)
					<td>
						<form action="{{route('categories.destroy', $category->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" class="btn btn-sm btn-danger" value="DELETE">
						</form>
					</td>
					@endif
				</tr>
				@endforeach
				@else
					<td>No Category</td>
					<td></td>
				@endif
			</tbody>
		</table>
		{!! $categories->links() !!}
</main>
@section('content')
@endsection