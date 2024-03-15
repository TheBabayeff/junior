@extends('frontend.layouts.app')
@section('title', $newsSingle->title))


@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $newsSingle->title }}</h2>
                        <ul>
                            <li><a href="{{ route('welcome') }}">{{ __('welcome.home') }}</a></li>
                            <li><span>{{ __('welcome.projects') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-blog-content">
                        <div class="post format-gallery">
                            <div class="entry-media">
                                <div class="post-slider owl-carousel">
                                    @foreach($newsSingle->photo AS $newsPhoto)
                                        <img src="{{ asset("storage/" . $newsPhoto) }}" alt>
                                    @endforeach
                                </div>

                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-calendar"></i> {{ $newsSingle->published_at }}</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <p>{!! \App\Helpers\MarkdownHelper::toHtml($newsSingle->content) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">
                        <div class="widget search-widget" style="background-color: #c9f0eb">
                            <form action="{{ route('search') }}" method="GET">
                                <div>
                                    <input type="text" name="search" class="form-control" placeholder="Axtarış...">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>{{ __('welcome.projects') }}</h3>
                            <div class="posts">
                                @foreach($projects AS $proje)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset("storage/" . $proje->photo[0]) }}" width="80px;" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="{{ route('project.show' , $proje->slug) }}">{{ \Illuminate\Support\Str::limit($proje->title, 40) }}</a></h4>
                                            <span class="date">{{ $proje->published_at }} </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>{{ __('welcome.latestNews') }}</h3>
                            <div class="posts">
                                @foreach($news AS $new)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset("storage/" . $new->photo[0]) }}" width="80px;" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="{{ route('news.show' , $new->slug) }}">{{ \Illuminate\Support\Str::limit($new->title, 35) }}</a></h4>
                                            <span class="date">{{ $new->published_at }} </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->

    <!-- start partners-section -->
    @include('frontend.components.partners')
    <!-- end partners-section -->
@endsection
