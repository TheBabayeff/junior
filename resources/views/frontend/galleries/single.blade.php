@extends('frontend.layouts.app')
@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
        <div class="container">

            <div class="wpo-campaign-wrap">
                <div class="row">
                    @foreach($gallerySingle->image AS $galleryImage)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <a href="{{ asset("storage/" . $galleryImage) }}" class="video-btn" data-fancybox="gallery" >
                                        <img src="{{ asset("storage/" . $galleryImage) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-campaign-area end -->

    @include('frontend.components.partners')
@endsection
