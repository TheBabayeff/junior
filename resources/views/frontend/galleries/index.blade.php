@extends('frontend.layouts.app')
@section('title', 'Junior Achievment Projects')

@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
        <div class="container">

            <div class="wpo-campaign-wrap">
                <div class="row">
                    @foreach($galleries AS $gallery)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <a href="{{ route('gallery.show' , $gallery->id) }}">
                                        <img src="{{ asset("storage/" . $gallery->image[0]) }}" alt="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($galleries->lastPage() > 1)
                    <div class="pagination-wrapper pagination-wrapper-center">
                        <ul class="pg-pagination">
                            @if ($galleries->onFirstPage())
                                <li style="visibility: hidden"><span><i class="fi ti-angle-left"></i></span></li>
                            @else
                                <li><a href="{{ $galleries->previousPageUrl() }}" aria-label="Previous"><i class="fi ti-angle-left"></i></a></li>
                            @endif

                            @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                                <li class="{{ $page == $galleries->currentPage() ? 'active' : '' }}"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endforeach

                            @if ($galleries->hasMorePages())
                                <li><a href="{{ $galleries->nextPageUrl() }}" aria-label="Next"><i class="fi ti-angle-right"></i></a></li>
                            @else
                                <li style="visibility: hidden"><span><i class="fi ti-angle-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- wpo-campaign-area end -->

    <!-- start partners-section -->
{{--    @include('frontend.components.partners')--}}
    <!-- end partners-section -->
@endsection
