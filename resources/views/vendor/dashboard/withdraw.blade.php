@extends('vendor.layouts.master')

@section('title')
    {{ $settings->site_name }} || Withdraw Balance
@endsection

@section('content')
    <!-- DASHBOARD START-->
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('vendor.layouts.sidebar')

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="fa-solid fa-money-bill"></i>Request a Withdraw</h3>
                        <br>
                        <div class="wsus__dashboard_profile">
                            <div class="wsus__dash_pro_area">
                                <form action="{{ route('vendor.withdraw') }}" method="POST">
                                    @csrf
                                    <div class="wsus__dash_pro_single">
                                        <i class="fa-solid fa-money-bill"></i>
                                        <input type="text" name="amount" placeholder="Enter Amount">
                                    </div>
                                    <div class="wsus__dash_pro_single">
                                        <i class="fa-solid fa-money-bill"></i>
                                        <input type="text" name="bkash" placeholder="Enter Bkash Number">
                                    </div>
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
