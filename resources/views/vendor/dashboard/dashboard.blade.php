@extends('vendor.layouts.master')
@section('title')
    {{ Auth::user()->name }} - Vendor Dashboard
@endsection
@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('vendor.layouts.sidebar')
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content">
                        <div class="wsus__dashboard">
                            <div class="row">
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item red" href="{{ route('vendor.orders.index') }}">
                                        <i class="fas fa-cart-plus"></i>
                                        <p>order</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item green" href="{{ route('vendor.products.index') }}">
                                        <i class="fa-solid fa-cube"></i>
                                        <p>products</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item sky" href="{{ route('vendor.shop-profile.index') }}">
                                        <i class="fab fa-shopify"></i>
                                        <p>shop profile</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item blue" href="{{ route('vendor.profile') }}">
                                        <i class="far fa-user"></i>
                                        <p>My Profile</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
