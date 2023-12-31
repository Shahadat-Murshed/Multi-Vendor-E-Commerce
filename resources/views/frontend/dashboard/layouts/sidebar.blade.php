<div class="dashboard_sidebar">
    <span class="close_icon">
      <i class="far fa-bars dash_bar"></i>
      <i class="far fa-times dash_close"></i>
    </span>
    <a href="dsahboard.html" class="dash_logo"><img src="{{asset('frontend/images')}}/logo.png" alt="logo" class="img-fluid"></a>
    <ul class="dashboard_link">
      <li><a class="active" href="{{route('user.dashboard')}}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
      <li><a href="{{route('user.dashboard')}}"><i class="fas fa-list-ul"></i> Orders</a></li>
      <li><a href="dsahboard_download.html"><i class="fa-solid fa-cloud-download"></i> Downloads</a></li>
      <li><a href="dsahboard_review.html"><i class="far fa-star"></i> Reviews</a></li>
      <li><a href="dsahboard_wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li>
      <li><a href="{{route('user.profile')}}"><i class="far fa-user"></i> My Profile</a></li>
      <li><a href="{{route('user.address.index')}}"><i class="fa fa-address-card"></i> Addresses</a></li>
      <li>
        
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();"><i class="fa-solid fa-sign-out"></i> Log out</a>
      </form>
    </li>
    </ul>
  </div>