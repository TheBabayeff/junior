@extends('frontend.layouts.app')
@section('title', 'Junior Achievment Azerbaijan')
@section('content')
    <section class="wpo-hero-section-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col col-xs-6 col-lg-6">
                    <div class="wpo-hero-section-text">
                        <div class="wpo-hero-title-top">
                            <span>{{ $settings->welcome_greenText }}</span>
                        </div>
                        <div class="wpo-hero-title">
                            <h2>{{ $settings->welcome_mainText }}</h2>
                        </div>
                        <div class="wpo-hero-subtitle">
                            <p>{{ $settings->welcome_descriptionText }}</p>
                        </div>
                        <div class="btns">
                            <a href="{{ route('volunteers') }}" class="btn theme-btn-s2">{{ __('welcome.getInvolved') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-vec">
                        <div class="right-items-wrap">
                            <div class="right-item">
                                <div class="r-img">
                                    <img src="assets/images/slider/slider222.png" alt="">
                                </div>

                            </div>
                            <div class="right-item">
                                <div class="wpo-total-project">
                                    <div class="wpo-total-project-wrap">
                                        <div class="wpo-total-project-icon">
                                            <i class="fi flaticon-salary"></i>
                                        </div>
                                        <div class="wpo-total-project-text">
                                            <h3>252+</h3>
                                            <p>Total Projects</p>
                                        </div>
                                    </div>
                                    <div class="project-shape">
                                        <img src="assets/images/slider/s.png" alt="">
                                    </div>
                                </div>
                                <div class="r-img">
                                    <img src="{{ asset('assets/images/step.png') }}" alt="Jaa Azerbaijan">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpo-about-section section-padding">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap ">
                        <div class="wpo-about-img">
                            <img src="{{ asset('assets/images/opportunirty.png') }}" alt="">


                            <div class="wpo-ab-shape-1">
                                <div class="s-s1"></div>
                                <div class="s-s2"></div>
                            </div>
                            <div class="wpo-ab-shape-2">
                                <img src="{{ asset('assets/images/ab-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                        <span>{{ __('welcome.ourActivity') }}</span>
                        <h2>{{ __('welcome.youthPrograms') }}</h2>
                        <p>{{ __('about.focusesOn') }}</p>
                        <ul>
                            <li>{{ __('welcome.workReadiness') }}</li>
                            <li>{{ __('welcome.entrepreneurship') }}</li>
                            <li>{{ __('welcome.financialLiteracy') }}</li>
                        </ul>
                        <a class="theme-btn-s2" href="{{ route('about') }}">{{ __('welcome.moreAbout') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-about-section -->
    <!-- start of wpo-blog-section -->
    <section class="wpo-blog-section-s2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>{{ __('welcome.latestNews') }}</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    @foreach($news AS $new)
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{ asset("storage/" . $new->photo[0]) }}" alt="">
                                <span class="thumb-2">{{ $new->published_at }}</span>
                            </div>
                            <div class="wpo-blog-content" style="background: transparent;">
                                <div class="wpo-blog-content-top">
                                    <h2><a href="{{ route('news.show', $new->slug) }}">{{ \Illuminate\Support\Str::limit($new->title, 37) }}</a></h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="wpo-section-title section-padding" style="padding: 50px; margin-bottom: -50px;">
            <div class="btns">
                <a href="{{ route('news') }}" class="btn theme-btn-s2">{{ __('welcome.seeAll') }}</a>
            </div>
        </div>
    </section>
    <!-- end of wpo-blog-section -->

    <!-- wpo-testimonial-area end -->

    <section class="wpo-fun-fact-section" >
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-fun-fact-grids clearfix" style="background: linear-gradient(to left, rgba(93, 196, 184, 0.75), #47bcae);">
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="8">00</span>+</h3>
                                <p>Layihə</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="6252">00</span>+</h3>
                                <p>Gənc</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="247">00</span>+</h3>
                                <p>Müəllim Təlimçi</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="65">00</span></h3>
                                <p>Könüllü</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="25642">00</span></h3>
                                <p>Saat</p>
                            </div>
                        </div>

                        <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- wpo-testimonial-area start -->
    <div class="wpo-testimonial-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>{{ __('welcome.successStories') }}</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-testimonial-wrap">
                <div class="testimonial-slider owl-carousel">
                    @foreach($youngs AS $young)
                    <div class="wpo-testimonial-item">
                        <div class="wpo-testimonial-img">
                            <img src="{{ asset("storage/" . $young->photo) }}" alt="">
                        </div>
                        <div class="wpo-testimonial-content">
                            <p>{{ $young->description }}</p>
                            <h2>{{ $young->name }}</h2>
                            <span>{{ $young->position }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-testimonial-area end -->


{{--    <!-- start wpo-project-section -->--}}
{{--    <section class="wpo-project-section-s2 section-padding">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="sortable-gallery">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="project-grids  gallery-active owl-carousel clearfix"  >--}}

{{--                            @foreach($galleries AS $gallery)--}}
{{--                                <div class="grid">--}}
{{--                                    <div class="img-holder">--}}
{{--                                        <img src="{{ asset("storage/" . $gallery->image[0]) }}" alt="">--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <a class="video-btn" data-fancybox="gallery" href="{{ asset("storage/" . $gallery->image[0]) }}">--}}
{{--                                                <i class="ti-plus"></i>--}}
{{--                                            </a>--}}
{{--                                            <h4>--}}
{{--                                                <a class="video-btn" data-fancybox="gallery" href="{{ asset("storage/" . $gallery->image[0]) }}">--}}
{{--                                                    JA Azerbaijan--}}
{{--                                                </a>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                           </div>--}}
{{--                        <div class="wpo-section-title section-padding" style="padding: 50px; margin-bottom: -50px;">--}}
{{--                            <div class="btns">--}}
{{--                                <a href="{{ route('gallery') }}" class="btn theme-btn-s2">{{ __('welcome.seeAll') }}</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> <!-- end container -->--}}
{{--    </section>--}}
{{--    <!-- end wpo-project-section -->--}}
    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->


    <!-- start of wpo-site-footer-section -->
@endsection
