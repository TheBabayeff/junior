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
                                        <img src="{{ asset("storage/" . $searchNew->photo) }}" alt="">
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

            </div>
        </div>
    </div>
    <!-- wpo-campaign-area end -->

    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
