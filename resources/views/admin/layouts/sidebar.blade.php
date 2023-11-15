<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{route('admin.dashboard')}}" class="nav-link"
                    ><i class="fas fa-fire"></i><span>Dashboard</span></a
                >
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown {{setActive([
                'admin.category.*',
                'admin.sub-category.*',
                'admin.child-category.*',
                
            ])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-layer-group"></i> <span>Manage Categories</span></a
                >
                <ul class="dropdown-menu">
                    <li class="{{setActive(['admin.category.*'])}}">
                        <a class="nav-link" href="{{route('admin.category.index')}}"
                            ><i class="fas fa-bars mr-0"></i>Category</a
                        >
                    </li>
                    <li class="{{setActive(['admin.sub-category.*'])}}">
                        <a class="nav-link" href="{{route('admin.sub-category.index')}}"
                            ><i class="fas fa-list-ul mr-0"></i></i></i>Sub Category</a
                        >
                    </li>
                    <li class="{{setActive(['admin.child-category.*'])}}">
                        <a class="nav-link" href="{{route('admin.child-category.index')}}"
                            ><i class="fas fa-folder mr-0"></i>Child Category</a
                        >
                    </li>
                </ul>
            </li>

            <li class="dropdown {{setActive([
                'admin.brand.*',
                'admin.products.*',
                'admin.products-image-gallery.*',
                'admin.products-variant.*',
                'admin.products-variant-item.*',
            ])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-cubes"></i><span>Manage Products</span></a
                >
                <ul class="dropdown-menu">
                    <li class="{{setActive([
                        'admin.brand.*'
                    ])}}">
                        <a class="nav-link" href="{{route('admin.brand.index')}}"
                            ><i class="fab fa-apple mr-0"></i>Brands</a
                        >
                    </li>
                    <li class="{{setActive([
                        'admin.products.*',
                        'admin.products-image-gallery.*',
                        'admin.products-variant.*',
                        'admin.products-variant-item.*',
                        'admin.reviews.*',
                    ])}}">
                        <a class="nav-link" href="{{route('admin.products.index')}}"
                            ><i class="fas fa-cube mr-0"></i>Products</a
                        >
                    </li>
                </ul>
            </li>
            <li class="dropdown {{setActive([
                'admin.seller-products.*',
                'admin.seller-pending-products.*',
            ])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-cubes"></i><span>Manage Seller Products</span></a
                >
                <ul class="dropdown-menu">
                    <li class="{{setActive([
                        'admin.seller-products.*'
                    ])}}">
                        <a class="nav-link" href="{{route('admin.seller-products.index')}}"
                            ><i class="fas fa-cube mr-0"></i>Approved Products</a
                        >
                    </li>
                    <li class="{{setActive([
                        'admin.seller-pending-products.*'
                    ])}}">
                        <a class="nav-link" href="{{route('admin.seller-pending-products.index')}}"
                            ><i class="fas fa-cube mr-0"></i>Pending Products</a
                        >
                    </li>
                </ul>
            </li>

            <li class="dropdown {{setActive([
                'admin.vendor-profile.*'
            ])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-warehouse"></i><span>E-Commerce</span></a
                >
                <ul class="dropdown-menu">
                    <li class="{{setActive([
                        'admin.vendor-profile.*'
                    ])}}">
                        <a class="nav-link" href="{{route('admin.vendor-profile.index')}}"
                            ><i class="fas fa-people-carry mr-0"></i>Vendor Profile</a
                        >
                    </li>
                </ul>
            </li>

            <li class="dropdown {{setActive([
                'admin.slider.*'
            ])}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-window-maximize"></i> <span>Manage Website</span></a
                >
                <ul class="dropdown-menu">
                    <li class="{{setActive([
                        'admin.slider.*'
                    ])}}">
                        <a class="nav-link" href="{{route('admin.slider.index')}}"
                            ><i class="fas fa-image mr-0"></i>Slider</a
                        >
                    </li>
                </ul>
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