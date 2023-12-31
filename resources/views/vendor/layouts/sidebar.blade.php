<div class="dashboard_sidebar">
  <span class="close_icon">
    <i class="far fa-bars dash_bar"></i>
    <i class="far fa-times dash_close"></i>
  </span>
  <a href="dsahboard.html" class="dash_logo"><img src="{{asset('frontend/images')}}/logo.png" alt="logo" class="img-fluid"></a>
  <ul class="dashboard_link">
    <li><a class="{{setActive(['vendor.dashboard'])}}" href="{{route('vendor.dashboard')}}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
    <li>
      <a class="{{setActive(['vendor.products.index',
                        'vendor.products-image-gallery.*',
                        'vendor.products-variant.*',
                        'vendor.products-variant-item.*',
                        'vendor.reviews.*',])}}" 
                        href="{{route('vendor.products.index')}}">
                        <i class="far fa-tachometer"></i>Products</a></li>
    <li><a class="{{setActive(['vendor.shop-profile.index'])}}" href="{{route('vendor.shop-profile.index')}}"><i class="fab fa-shopify"></i> Shop Profile</a></li>
    <li><a class="{{setActive(['vendor.profile'])}}" href="{{route('vendor.profile')}}"><i class="far fa-user"></i> My Profile</a></li>
    
    <li>
      
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
        this.closest('form').submit();"><i class="fa-solid fa-sign-out"></i> Log out</a>
      </form>
  </li>
  </ul>
</div>