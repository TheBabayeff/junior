@extends('frontend.layouts.app')

@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
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
            <div class="wpo-campaign-wrap">
                <div class="row">
                    @foreach($news AS $new)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="wpo-campaign-single">
                            <div class="wpo-campaign-item">
                                <div class="wpo-campaign-img">
                                    <img src="{{ asset("storage/" . $new->photo) }}" alt="">
                                </div>
                                <div class="wpo-campaign-content">
                                    <div class="wpo-campaign-text-top">
                                        <h4><a href="{{ route('news.show', $new->slug) }}">{{ \Illuminate\Support\Str::limit($new->title, 40) }}</a></h4>
                                        <div class="campaign-btn">
                                            <ul>
                                                <li>
                                                    <span><img src="{{ asset('storage/' . $new->author->photo) }}" alt="" width="25px;"></span>
                                                    <span><a href="event-single.html">{{ $new->author->name }}</a></span>
                                                </li>
                                                <li><a class="e-btn" href="{{ route('news.show', $new->slug) }}">{{ __('welcome.moreAbout') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-wrapper pagination-wrapper-center">
                    <ul class="pg-pagination">
                        @if ($news->onFirstPage())
                            <li style="visibility: hidden"><span><i class="fi ti-angle-left"></i></span></li>
                        @else
                            <li><a href="{{ $news->previousPageUrl() }}" aria-label="Previous"><i class="fi ti-angle-left"></i></a></li>
                        @endif

                        @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                            <li class="{{ $page == $news->currentPage() ? 'active' : '' }}"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endforeach

                        @if ($news->hasMorePages())
                            <li><a href="{{ $news->nextPageUrl() }}" aria-label="Next"><i class="fi ti-angle-right"></i></a></li>
                        @else
                            <li style="visibility: hidden"><span><i class="fi ti-angle-right"></i></span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-campaign-area end -->

    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
