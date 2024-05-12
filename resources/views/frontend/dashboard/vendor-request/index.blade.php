@extends('frontend.dashboard.layouts.master')

@section('title')
    {{ $settings->site_name }} || Became a Vendor Today
@endsection

@section('content')
    <!--=============================
                                                                    DASHBOARD START
                                                                  ==============================-->
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i> Vendor Request</h3>
                        <div class="wsus__dashboard_profile">
                            @php
                                $exists = \App\Models\Vendor::where('user_id', Auth::user()->id)->exists();
                            @endphp
                            @if ($exists)
                                <div class="wsus__dash_pro_area">
                                    <div class="flex flex-grow flex-col max-w-full">
                                        <div data-message-author-role="assistant" data-message-id="5b12b655-8e95-45b7-8965-d535b3ee3084"
                                            dir="auto"
                                            class="min-h-[20px] text-message flex flex-col items-start whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 juice:w-full juice:items-end overflow-x-auto gap-3">
                                            <div class="markdown prose w-full break-words dark:prose-invert light">
                                                <ol>
                                                    <li>
                                                        <p><strong>Application Update:</strong></p>
                                                        <ul>
                                                            <li>We already have received your application. Please wait for response. We will get
                                                                back to you shortly</li>
                                                        </ul>
                                                    </li>

                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="wsus__dash_pro_area">
                                    {!! @$content->content !!}
                                </div>
                        </div>
                        <br>
                        <div class="wsus__dashboard_profile">
                            <div class="wsus__dash_pro_area">
                                <form action="{{ route('user.vendor-request.create') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                        <input type="file" name="shop_image" placeholder="Shop Banner Image">
                                    </div>
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                        <input type="text" name="shop_name" placeholder="Shop Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="fas fa-user-tie" aria-hidden="true"></i>
                                                <input type="text" name="shop_email" placeholder="Shop Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="fas fa-user-tie" aria-hidden="true"></i>
                                                <input type="text" name="shop_phone" placeholder="Shop Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                        <input type="text" name="shop_address" placeholder="Shop Address">
                                    </div>
                                    <div class="wsus__dash_pro_single">
                                        <textarea name="about" placeholder="About You"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                                    DASHBOARD START
                                                                  ==============================-->
@endsection
