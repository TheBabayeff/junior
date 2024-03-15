@extends('frontend.layouts.app')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Events</h2>
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><span>{{ __('welcome.jobOpportunities') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- wpo-event-area start -->
    <div class="wpo-event-area-s2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <span>Events</span>
                        <h2>Fundraising Events</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-event-wrap">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        @foreach($vacancies AS $vacancy)
                        <div class="wpo-event-single">
                            <div class="wpo-event-item">
                                <div class="wpo-event-img">
                                    <img src="{{ asset("storage/" . $vacancy->photo) }}" alt="">
                                </div>
                                <div class="wpo-event-content">
                                    <div class="wpo-event-text-top">
                                        <span>{{ $vacancy->expiration_at }}</span>
                                        <h2><a href="{{ route('vacancy.show', $vacancy->id) }}">{{ $vacancy->name }}</a></h2>
                                        <p>{{ \Illuminate\Support\Str::limit($vacancy->description, 200) }}</p>
                                        <a class="read-more" href="{{ route('vacancy.show', $vacancy->id) }}">{{ __('welcome.moreAbout') }}</a>
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
    <!-- wpo-event-area end -->
    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
