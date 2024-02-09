@extends('frontend.layouts.app')
@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ __('welcome.latestNews') }}</h2>
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->


    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media" >
                                <img src="{{ asset("storage/" . $newsSingle->photo) }}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">{{ $newsSingle->author->name }}</a> </li>
                                    <li><i class="fi flaticon-calendar"></i>{{ $newsSingle->published_at }}</li>
                                </ul>
                            </div>
                            <h2>{{ $newsSingle->title }}</h2>
                            <p>{!! \App\Helpers\MarkdownHelper::toHtml($newsSingle->content) !!}</p>
                        </div>

                        <div class="more-posts">
                            @if($prevPost)
                            <div class="previous-post">
                                <a href="{{ route('news.show', $prevPost->slug)  }}">
                                    <span class="post-control-link">Previous Post</span>
                                    <span class="post-name">{{ $prevPost->title }}</span>
                                </a>
                            </div>
                            @endif
                            @if($nextPost)
                            <div class="next-post">
                                <a href="{{ route('news.show', $nextPost->slug)  }}">
                                    <span class="post-control-link">Next Post</span>
                                    <span class="post-name">{{ $nextPost->title }}</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->
    @include('frontend.components.partners')
@endsection
