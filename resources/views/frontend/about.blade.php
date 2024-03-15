@extends('frontend.layouts.app')
@section('title', 'About Us')

@section('content')

    <!-- wpo-about-video-area start -->
    <div class="wpo-about-video-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="wpo-about-video-item">
                        <div class="wpo-about-video-img">
                            <img src="{{ asset("storage/" . $settings->about_firstPhoto) }}" alt="">
                            <div class="entry-media video-holder">
                                <a href="{{ $settings->about_firstVideo }}" class="video-btn" data-type="iframe">
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                        <h2>See what we do for the <span>poor people and the children</span></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-about-video-area end -->

    <!-- start of wpo-features-section -->
    <section class="wpo-features-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/SahibkarIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="">25.000 Saat iş təcrübəsi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/SahibkarIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="">8+ Layihə </a></h2>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/SahibkarIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="">6252 + Gənc</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/SahibkarIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="">247 + Müəllim , Təlimçi </a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-features-section -->
    <section class="wpo-about-section-s5 section-padding">
        <div class="container">
            <div class="wpo-about-items">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="wpo-about-wrap">
                            <div class="wpo-about-img">
                                <img src="{{ asset("storage/" . $settings->about_secondPhoto) }}" alt="">
                                <div class="pop-up-video">
                                    <div class="video-holder">
                                        <a href="{{ $settings->about_secondVideo }}" class="video-btn" data-type="iframe"><i class="fi flaticon-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-shape"><img src="{{ asset('assets/images/slider/right-img5.png') }}" alt=""></div>
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
                            <a class="theme-btn-s2" href="{{ route('projects') }}">{{ __('welcome.moreAbout') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-hero-section-1 slider -->

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

    <section class="wpo-features-section-s5">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-lg-6">
                    <div class="wpo-section-title" >
                        <span> JA Azerbaijan</span>
                        <h2>Fəaliyyət istiqamətimiz</h2>
                        <p>JA təlim proqramları özündə üç əsas istiqamət – karyerahazırlığı, maliyyə savadlılığı və
                            sahibkarlıq – əks etdirən bir kurrikulum üzərində hazırlanıb.</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item" style="height: 320px;">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/KadrIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="#">Karyera hazırlığı</a></h2>
                            <p>JA gəncləri iş dünyası ilə tanış edir və onlara məqsədyönlü şəkildə peşə seçimi etmələri üçün kömək edir</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item " style="height: 320px;">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/SahibkarIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="#">Sahibkarlıq</a></h2>
                            <p>JA iş dünyası ilə təhsil sistemi arasında körpü quraraq gənclər üçün sahibkarlıqanlayışı, biznes və onun idarə olunması, əmək bazarının tələblərini daha yaxşıanlamaları üçün proqramlar həyata keçirir</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-4 col-sm-6 col-12">
                    <div class="wpo-features-item" style="height: 320px;">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/MaaliyeIcon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="#">Maliyyə savadlılığı</a></h2>
                            <p>JA büdcə, xərc, gəlir, investisiya və kreditdən məsuliyyətli istifadə mövzusundapraktik təlimlər keçirir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start partners-section -->
    <section class="partners-section section-padding" style="padding: 50px;">
        <h2 class="hidden">partner</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partner-grids partners-slider owl-carousel">
                        @foreach($partners AS $partner)
                        <div class="grid">
                            <img src="{{ asset("storage/" . $partner->photo) }}" alt="{{ $partner->name }}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partners-section -->
@endsection
