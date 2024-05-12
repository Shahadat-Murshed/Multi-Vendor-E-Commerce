<div class="dashboard_sidebar">
    <span class="close_icon">
        <i class="far fa-bars dash_bar"></i>
        <i class="far fa-times dash_close"></i>
    </span>
    <a href="{{ route('home') }}"><img style="max-width: 95%" class="ms-2 mt-2" src="{{ asset('frontend/images') }}/logo.png" alt="logo"></a>
    <ul class="dashboard_link">
        <li><a class="{{ setActive(['user.dashboard']) }}" href="{{ route('user.dashboard') }}"><i
                    class="fas fa-tachometer"></i>Dashboard</a></li>
        <li><a class="{{ setActive(['user.orders.*']) }}" href="{{ route('user.orders.index') }}"><i class="fas fa-list-ul"></i> Orders</a>
        </li>
        <li><a class="{{ setActive(['user.profile']) }}" href="{{ route('user.profile') }}"><i class="far fa-user"></i> My Profile</a></li>
        <li><a class="{{ setActive(['user.address.index']) }}" href="{{ route('user.address.index') }}"><i class="fa fa-address-card"></i>
                Addresses</a></li>
        @php
            $exists = \App\Models\Delivery_boy::where('email', Auth::user()->email)->exists();
        @endphp
        @if ($exists)
            <li>
                <a class="{{ setActive(['user.parcel.index']) }}" href="{{ route('user.parcel.index') }}">
                    <i class="fa fa-truck"></i>
                    Parcel Delivery
                </a>
            </li>
        @endif

        <li><a href="{{ route('user.vendor-request.index') }}"><i class="fa-solid fa-shop"></i>Become A Vendor</a></li>
        <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();"><i
                        class="fa-solid fa-sign-out"></i> Log out</a>
            </form>
        </li>
    </ul>
</div>
