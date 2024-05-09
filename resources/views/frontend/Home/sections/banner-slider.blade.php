<section id="wsus__banner">
    <div class="container">
        <div class="row p-0 m-0">
            <div class="col-xl-12">
                <div class="wsus__banner_content">
                    <div class="row banner_slider">
                        @foreach ($sliders as $slider)
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url({{ $slider->banner }});">
                                    <div class="container">

                                        <div class="wsus__single_slider_text">
                                            <h3 style="font-size: 20px">{!! $slider->type !!}</h3>
                                            <h1 style="color: white; font-size: 30px">{!! $slider->title !!}</h1>
                                            <h6>starts at {{ $settings->currency_icon }}{{ $slider->starting_price }}</h6>
                                            <a class="common_btn" href="{{ $slider->btn_url }}">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
