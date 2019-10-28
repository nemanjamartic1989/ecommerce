@extends('front.master')
@section('title', 'Home Page')
@section('content')

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{url('slider', 'maxresdefault.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('slider', 'slider2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('slider', 'slider2.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
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
                  <del>$ {{$product->product_price}}</del>
                  <span class="price text-muted float-right">$ {{$product->spl_price}}</span>
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