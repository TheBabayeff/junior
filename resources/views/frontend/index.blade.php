@extends('frontend.layouts.app')
@section('content')
    <section class="wpo-hero-section-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col col-xs-6 col-lg-6">
                    <div class="wpo-hero-section-text">
                        <div class="wpo-hero-title-top">
                            <span>Help The Poor Children</span>
                        </div>
                        <div class="wpo-hero-title">
                            <h2>Your Marcy Can Change Someone’s Life</h2>
                        </div>
                        <div class="wpo-hero-subtitle">
                            <p>We help local nonprofits access the funding, tools, training, and support they need
                                to become more.</p>
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
                                <div class="wpo-happy-client">
                                    <div class="wpo-happy-client-img">
                                        <ul class="wpo-happy-client-slide owl-carousel">
                                            @foreach($youngs AS $young)
                                            <li><img src="{{ asset("storage/" . $young->photo) }}" alt=""></li>
                                            @endforeach
                                        </ul>
                                    </div>
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
                                    <img src="assets/images/step.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-hero-section-1 slider -->
    <section class="wpo-features-section-s5">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-lg-6">
                    <div class="wpo-section-title" >
                        <span>What We Do</span>
                        <h2>Fəaliyyət istiqamətimiz</h2>
                        <p>JA təlim proqramları özündə üç əsas istiqamət – karyerahazırlığı, maliyyə savadlılığı və
                            sahibkarlıq – əks etdirən bir kurrikulum üzərində hazırlanıb.</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="assets/images/icon/KadrIcon.png" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="service-single.html">Karyera hazırlığı</a></h2>
                            <p>JA gəncləri iş dünyası ilə tanış edir və onlara məqsədyönlü şəkildə peşə seçimi etmələri üçün kömək edir</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item active">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="assets/images/icon/SahibkarIcon.png" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="service-single.html">Sahibkarlıq</a></h2>
                            <p>JA iş dünyası ilə təhsil sistemi arasında körpü quraraq gənclər üçün sahibkarlıqanlayışı, biznes və onun idarə olunması, əmək bazarının tələblərini daha yaxşıanlamaları üçün proqramlar həyata keçirir</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="assets/images/icon/MaaliyeIcon.png" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="service-single.html">Maliyyə savadlılığı</a></h2>
                            <p>JA büdcə, xərc, gəlir, investisiya və kreditdən məsuliyyətli istifadə mövzusundapraktik təlimlər keçirir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-features-section -->
    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="assets/images/opportunirty.png" alt="">
{{--                            <div class="pop-up-video">--}}
{{--                                <div class="video-holder">--}}
{{--                                    <a href="https://www.youtube.com/embed/DG3lDoUt8Uw" class="video-btn" data-type="iframe"><i class="fi flaticon-play"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="wpo-ab-shape-1">
                                <div class="s-s1"></div>
                                <div class="s-s2"></div>
                            </div>
                            <div class="wpo-ab-shape-2">
                                <img src="assets/images/ab-shape-2.png" alt="">

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
                        <a class="theme-btn-s2" href="">{{ __('welcome.moreAbout') }}</a>
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
                                <img src="{{ asset("storage/" . $new->photo) }}" alt="">
                                <span class="thumb-2">{{ $new->published_at }}</span>
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <h2><a href="{{ route('news.show', $new->slug) }}">{{ \Illuminate\Support\Str::limit($new->title, 40) }}</a></h2>
                                </div>
                                <div class="wpo-blog-content-btm">
                                    <div class="wpo-blog-content-btm-left">
                                        <div class="wpo-blog-content-btm-left-img">
                                            <img src="{{ asset("storage/" . $new->author->photo) }}" alt="">
                                        </div>
                                        <div class="wpo-blog-content-btm-left-text">
                                            <h4><a href="">{{ $new->author->name }}</a></h4>
                                        </div>

                                    </div>
                                    <div class="wpo-blog-content-btm-right">
                                        <span><i class="fi flaticon-graduation-cap"></i> 1241</span>
                                    </div>
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
                <a href="{{ route('news') }}" class="btn theme-btn-s2">See All News</a>
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

    <!-- wpo-cta-area end -->
    <div class="wpo-cta-area-s2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-cta-section">
                        <div class="wpo-cta-content">
                            <h2>Lets Chenge The World With Humanity</h2>
                            <a href="{{ route('volunteers') }}">{{ __('welcome.becomeVolunteer') }}</a>
                        </div>
                        <div class="volunteer-img">
                            <img src="assets/images/volunteer.png" alt="">
                        </div>
                        <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start of wpo-blog-section -->

    <!-- wpo-event-area start -->
    <div class="wpo-event-area-s2 section-padding bg-green">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <span>{{ __('welcome.vacancies') }}</span>
                        <h2>{{ __('welcome.jobOpportunities') }}</h2>
                    </div>
                </div>
            </div>
            @foreach($vacancies AS $vacancy)
            <div class="wpo-event-wrap">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        <div class="wpo-event-single">
                            <div class="wpo-event-item">
                                <div class="wpo-event-img">
                                    <img src="{{ asset("storage/" . $vacancy->photo) }}" alt="">
                                </div>
                                <div class="wpo-event-content">
                                    <div class="wpo-event-text-top">
                                        <span>24 Nov,  2021</span>
                                        <h2><a href="event-single.html">{{ $vacancy->name }}</a></h2>
                                        <p>{{ \Illuminate\Support\Str::limit($vacancy->description, 200) }}</p>
                                        <a class="read-more" href="{{ route('vacancy.show', $vacancy->id) }}">{{ __('welcome.appeal') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- wpo-event-area end -->
    <!-- start wpo-project-section -->
    <section class="wpo-project-section-s2 section-padding">
        <div class="container-fluid">
            <div class="sortable-gallery">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-grids  gallery-active owl-carousel clearfix"  >

                            @foreach($galleries AS $gallery)
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="{{ asset("storage/" . $gallery->image[0]) }}" alt="">
                                        <div class="hover-content">
                                            <a class="video-btn" data-fancybox="gallery" href="{{ asset("storage/" . $gallery->image[0]) }}">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <h4>
                                                <a class="video-btn" data-fancybox="gallery" href="{{ asset("storage/" . $gallery->image[0]) }}">
                                                    Sundarbans Royel Tiger
                                                </a>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-project-section -->
    <!-- wpo-team-area start -->
    <div class="wpo-team-area-s2 section-padding" style="background: #e9fafa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <span>Expert Team</span>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-team-wrap">
                <div class="team-items">
                    <div class="row">
                        @foreach($teams AS $team)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="{{ asset("storage/" . $team->photo) }}" alt="{{ $team->name }}">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="team-single.html">{{ $team->name }}</a></h2>
                                    <span>{{ $team->position }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
{{--                <div class="team-slider owl-carousel">--}}
{{--                    @foreach($teams AS $team)--}}
{{--                    <div class="wpo-team-item">--}}
{{--                        <div class="wpo-team-img">--}}
{{--                            <img src="{{ asset("storage/" . $team->photo) }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="wpo-team-content">--}}
{{--                            <h2><a href="team-single.html">{{ $team->name }}</a></h2>--}}
{{--                            <span>{{ $team->name }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- end of wpo-blog-section -->
    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->


    <!-- start of wpo-site-footer-section -->
@endsection
