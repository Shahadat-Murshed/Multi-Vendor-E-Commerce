@extends('frontend.dashboard.layouts.master')

@section('title')
    {{ $settings->site_name }} || Deliver Parcel
@endsection

@section('content')
    <!-- DASHBOARD START-->
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i> Vendor Request</h3>
                        <br>
                        <div class="wsus__dashboard_profile">
                            <div class="wsus__dash_pro_area">
                                <form action="{{ route('user.parcels.update', $id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                        <input type="text" name="otp" placeholder="Enter OTP">
                                    </div>
                                    <input type="hidden" id="otpInput" name="otp_g" value="">
                                    <button type="button" onclick="generateOTP()" class="btn btn-primary">Generate OTP</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DASHBOARD START-->
@endsection

@push('scripts')
    <script>
        function generateOTP() {
            let otp = Math.floor(100000 + Math.random() * 900000);
            document.getElementById("otpInput").value = otp;
            console.log(otp)
        }
    </script>
@endpush
