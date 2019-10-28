@extends('front.master')
@section('title', 'Shop Page')
@section('content')

<main role="main">

<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @if(!empty($products))
        @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Card image cap" src="{{url('images', $product->image)}}">
            <div class="card-body">
              <p class="card-text">{{$product->product_name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{url('productDetail', $product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                  <a href="{{url('cart/addItem', $product->id)}}" class="btn btn-sm btn-outline-secondary">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <span class="text-center">No Products</span>
        @endif
      </div>
	</div>
</div>

</main>

@endsection