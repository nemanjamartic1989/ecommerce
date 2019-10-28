<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/admin')}}">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <!-- Only admin can add Product -->
      @if(Auth::user()->admin == 1)
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.create')}}">
          <span data-feather="file"></span>
          Add Products
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">
          <span data-feather="shopping-cart"></span>
          List Products
        </a>
      </li>
      <!-- Only admin can add Category -->
      @if(Auth::user()->admin == 1)
      <li class="nav-item">
        <a class="nav-link" href="{{route('categories.create')}}">
          <span data-feather="users"></span>
          Add Category
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
          <span data-feather="users"></span>
          Categories
        </a>
      </li>
    </ul>
  </div>
</nav>