@extends('frontend.layouts.app')
@section('title', 'Junior Achievment Projects')

@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>{{ __('welcome.ourTeam') }}</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-campaign-wrap blog-sidebar">
                <div class="row">
                    @foreach($teams AS $team)
                        <div class="widget about-widget col-lg-3 col-md-6 col-12" style="background: transparent">
                            <div class="img-holder">
                                <a class="video-btn" data-fancybox="gallery" href="{{ asset("storage/" . $team->photo) }}">
                                <img  src="{{ asset("storage/" . $team->photo) }}" alt="">
                                </a>
                            </div>
                            <h4>{{ $team->name }}</h4>
                            <h6>{{ $team->position }}</h6>

                            <div class="aw-shape">
                                <img src="{{ asset('assets/images/blog/ab.png') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-campaign-area end -->

    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
