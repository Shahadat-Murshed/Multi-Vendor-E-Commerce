@extends('frontend.dashboard.layouts.master')

@section('title')
    {{ Auth::user()->name }} Dashboard
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content">
                        <div class="wsus__dashboard">
                            <div class="row">
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item red" href="{{ route('user.orders.index') }}">
                                        <i class="fas fa-list-ul"></i>
                                        <p>order</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item green" href="{{ route('user.profile') }}">
                                        <i class="far fa-user"></i>
                                        <p>my profile</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item sky" href="{{ route('user.address.index') }}">
                                        <i class="fa fa-address-card"></i>
                                        <p>Addresses</p>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-6 col-md-4">
                                    <a class="wsus__dashboard_item blue" href="{{ route('user.vendor-request.index') }}">
                                        <i class="fa-solid fa-shop"></i>
                                        <p>Become A Vendor</p>
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
