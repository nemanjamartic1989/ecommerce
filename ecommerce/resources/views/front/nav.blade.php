<nav id="mainNavbar" class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href=""><img src="{{url('images/webshop.jpg')}}" id="logoImg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('shop')}}">Shop</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($categories as $category)
          <a class="dropdown-item" href="{{url('category', $category->id)}}">{{$category->name}}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Wishlist</a>
      </li>
      @if(Auth::check())
      <li class="nav-link dropdown">
        <a href="" class="nav-link dropdown-toggle" id="dropdown_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
        <div class="dropdown-menu" aria-labelledby="dropdown_1">
          <a href="javascript:void(0)" class="dropdown-item">{{Auth::user()->name}}</a>
          <a href="{{url('/logout')}}" class="dropdown-item">Logout</a>
          <a href="{{url('/')}}/profile" class="dropdown-item">Profile</a>
        </div>
      </li>
      @else
      <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Login</a></li>
      @endif
      <li class="nav-item">
        <a href="{{url('/cart')}}" class="nav-link">Cart ({{Cart::count()}} items)&nbsp({{Cart::total()}} EUR)</a>
      </li>
    </ul>
  </div>
</nav>