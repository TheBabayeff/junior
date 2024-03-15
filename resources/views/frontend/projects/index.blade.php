@extends('frontend.layouts.app')
@section('title', 'Junior Achievment Projects')

@section('content')
    <!-- wpo-campaign-area start -->
    <div class="wpo-campaign-area bg-green section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>{{ __('welcome.latestProjects') }}</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form,</p>
                    </div>
                </div>
            </div>
            <div class="wpo-campaign-wrap">
                <div class="row">
                    @foreach($projects AS $project)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <a href="{{ route('project.show', $project->slug) }}">
                                        <img src="{{ asset("storage/" . $project->photo[0]) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h4><a href="{{ route('project.show', $project->slug) }}">{{ \Illuminate\Support\Str::limit($project->title, 40) }}</a></h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($projects->lastPage() > 1)
                    <div class="pagination-wrapper pagination-wrapper-center">
                        <ul class="pg-pagination">
                            @if ($projects->onFirstPage())
                                <li style="visibility: hidden"><span><i class="fi ti-angle-left"></i></span></li>
                            @else
                                <li><a href="{{ $projects->previousPageUrl() }}" aria-label="Previous"><i class="fi ti-angle-left"></i></a></li>
                            @endif

                            @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                                <li class="{{ $page == $projects->currentPage() ? 'active' : '' }}"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endforeach

                            @if ($projects->hasMorePages())
                                <li><a href="{{ $projects->nextPageUrl() }}" aria-label="Next"><i class="fi ti-angle-right"></i></a></li>
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
