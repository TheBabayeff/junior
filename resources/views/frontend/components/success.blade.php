@extends('frontend.layouts.app')
@section('content')

    <!-- start error-404-section -->
    <section class="error-404-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="content clearfix">
                        <div class="error">
                            <img src="{{ asset('assets/images/icon/success.png') }}" alt>
                        </div>
                        <div class="error-message">
                            <h3>Successfully sent</h3>
                            <p>Müraciətiniz üçün təşəkkür edirik !</p>
                            <a href="{{ route('welcome') }}" class="theme-btn-s2">{{ __('welcome.home') }}</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
@endsection
