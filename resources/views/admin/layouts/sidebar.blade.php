<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Lalkhan E-Bazar</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('cart-32.png') }}" alt="Lalkhan E-Bazar">
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li
                class="dropdown {{ setActive([
                    'admin.order.*',
                    'admin.pending-orders',
                    'admin.processed-orders',
                    'admin.dropped-off-orders',
                    'admin.shipped-orders',
                    'admin.out-for-delivery-orders',
                    'admin.delivered-orders',
                    'admin.canceled-orders',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cart-plus"></i>
                    <span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.order.*']) }}"><a class="nav-link" href="{{ route('admin.order.index') }}">All
                            Orders</a></li>
                    <li class="{{ setActive(['admin.pending-orders']) }}"><a class="nav-link" href="{{ route('admin.pending-orders') }}">All
                            Pending Orders</a></li>
                    <li class="{{ setActive(['admin.processed-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.processed-orders') }}">All processed Orders</a></li>
                    <li class="{{ setActive(['admin.dropped-off']) }}"><a class="nav-link"
                            href="{{ route('admin.dropped-off-orders') }}">All Dropped Off Orders</a></li>

                    <li class="{{ setActive(['admin.shipped-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.shipped-orders') }}">All Shipped Orders</a></li>
                    <li class="{{ setActive(['admin.out-for-delivery-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.out-for-delivery-orders') }}">All Out For Delivery Orders</a></li>


                    <li class="{{ setActive(['admin.delivered-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.delivered-orders') }}">All Delivered Orders</a></li>

                    <li class="{{ setActive(['admin.canceled-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.canceled-orders') }}">All Canceled Orders</a></li>

                </ul>
            </li>
            <li class="dropdown {{ setActive(['admin.category.*', 'admin.sub-category.*', 'admin.child-category.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-layer-group"></i><span>Manage
                        Categories</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.category.index') }}"><i class="fa-solid fa-bars"></i>Category</a>
                    </li>
                    <li class="{{ setActive(['admin.sub-category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.sub-category.index') }}"><i class="fa-solid fa-list-ul"></i>Sub
                            Category</a>
                    </li>
                    <li class="{{ setActive(['admin.child-category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.child-category.index') }}"><i class="fa-solid fa-list-check"></i>Child
                            Category</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setActive([
                    'admin.brand.*',
                    'admin.products.*',
                    'admin.products-image-gallery.*',
                    'admin.products-variant.*',
                    'admin.products-variant-item.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cubes"></i><span>Manage
                        Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.brand.*']) }}">
                        <a class="nav-link" href="{{ route('admin.brand.index') }}"><i
                                class="fa-brands fa-microsoft mr-0"></i></i>Brands</a>
                    </li>
                    <li
                        class="{{ setActive([
                            'admin.products.*',
                            'admin.products-image-gallery.*',
                            'admin.products-variant.*',
                            'admin.products-variant-item.*',
                            'admin.reviews.*',
                        ]) }}">
                        <a class="nav-link" href="{{ route('admin.products.index') }}"><i class="fa-solid fa-cube mr-0"></i>Products</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown {{ setActive(['admin.seller-products.*', 'admin.seller-pending-products.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i><span>Manage Seller
                        Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.seller-products.*']) }}">
                        <a class="nav-link" href="{{ route('admin.seller-products.index') }}"><i
                                class="fa-regular fa-square-check mr-0"></i></i>Approved Products</a>
                    </li>
                    <li class="{{ setActive(['admin.seller-pending-products.*']) }}">
                        <a class="nav-link" href="{{ route('admin.seller-pending-products.index') }}"><i
                                class="fa-solid fa-spinner mr-0"></i>Pending Products</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setActive([
                    'admin.flash-sale.*',
                    'admin.coupons.*',
                    'admin.shipping-rule.*',
                    'admin.vendor-profile.*',
                    'admin.payment-settings.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fa-solid fa-cart-plus"></i><span>E-Commerce</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.flash-sale.*']) }}">
                        <a class="nav-link" href="{{ route('admin.flash-sale.index') }}"><i
                                class="fa-solid fa-bolt-lightning mr-0"></i>Flash Sale</a>
                    </li>
                    <li class="{{ setActive(['admin.coupons.*']) }}">
                        <a class="nav-link" href="{{ route('admin.coupons.index') }}"><i class="fa-solid fa-gifts mr-0"></i>Coupons</a>
                    </li>
                    <li class="{{ setActive(['admin.shipping-rule.*']) }}">
                        <a class="nav-link" href="{{ route('admin.shipping-rule.index') }}"><i
                                class="fa-solid fa-truck mr-0"></i>Shipping Rules</a>
                    </li>
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}">
                        <a class="nav-link" href="{{ route('admin.vendor-profile.index') }}"><i
                                class="fa-solid fa-person-shelter mr-0 mb-1"></i>Vendor Profile</a>
                    </li>
                    <li class="{{ setActive(['admin.payment-settings.*']) }}">
                        <a class="nav-link" href="{{ route('admin.payment-settings.index') }}"><i
                                class="fa-solid fa-person-shelter mr-0 mb-1"></i>Payment Settings</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.slider.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-solid fa-window-restore"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}">
                        <a class="nav-link" href="{{ route('admin.slider.index') }}"><i class="fa-regular fa-image mr-0"></i>Slider</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fa-solid fa-gears"></i>
                    <span>Settings</span></a>
            </li>
            {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-columns"></i> <span>Layout</span></a
                >
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="layout-default.html"
                            >Default Layout</a
                        >
                    </li>
                    <li>
                        <a class="nav-link" href="layout-transparent.html"
                            >Transparent Sidebar</a
                        >
                    </li>
                    <li>
                        <a class="nav-link" href="layout-top-navigation.html"
                            >Top Navigation</a
                        >
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a class="nav-link" href="blank.html"
                    ><i class="far fa-square"></i> <span>Blank Page</span></a
                >
            </li> --}}

        </ul>
    </aside>
</div>
