@extends('frontend.layouts.app')

@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Axtarış nəticələri</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-campaign-wrap">
                <div class="row">
                    @if($searchNews->isNotEmpty())
                        @foreach($searchNews AS $searchNew)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="{{ asset("storage/" . $searchNew->photo[0]) }}" alt="">
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h4><a href="{{ route('news.show', $searchNew->slug) }}">{{ \Illuminate\Support\Str::limit($searchNew->title, 40) }}</a></h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                       @endforeach
                    @endif
                </div>
                @if ($searchNews->lastPage() > 1)
                    <div class="pagination-wrapper pagination-wrapper-center">
                        <ul class="pg-pagination">
                            @if ($searchNews->onFirstPage())
                                <li style="visibility: hidden"><span><i class="fi ti-angle-left"></i></span></li>
                            @else
                                <li><a href="{{ $searchNews->previousPageUrl() }}" aria-label="Previous"><i class="fi ti-angle-left"></i></a></li>
                            @endif

                            @foreach ($searchNews->getUrlRange(1, $searchNews->lastPage()) as $page => $url)
                                <li class="{{ $page == $searchNews->currentPage() ? 'active' : '' }}"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endforeach

                            @if ($searchNews->hasMorePages())
                                <li><a href="{{ $searchNews->nextPageUrl() }}" aria-label="Next"><i class="fi ti-angle-right"></i></a></li>
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
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
