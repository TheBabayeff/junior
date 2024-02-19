@extends('frontend.layouts.app')
@section('content')
    <!-- wpo-event-details-area start -->
    <div class="clearfix error-handling-messages">
        <div id="success">Thank you</div>
        <div id="error"> Error occurred while sending . Please try again later.
        </div>
    </div>
    <div class="wpo-event-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-event-item">
                        <div class="wpo-event-details-wrap">
                            <div class="wpo-event-details-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="Schedule-tab" data-bs-toggle="tab" href="#Schedule"
                                           role="tab" aria-controls="Schedule" aria-selected="true">İş Haqqında</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Map-tab" data-bs-toggle="tab" href="#Map" role="tab"
                                           aria-controls="Map" aria-selected="false">Map Location</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Contact-tab" data-bs-toggle="tab" href="#Contact" role="tab"
                                           aria-controls="Contact" aria-selected="false">{{ __('welcome.appeal') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpo-event-details-content">
                                <div class="tab-content">
                                    <div id="Schedule" class="tab-pane active">
                                        <p>{!! \App\Helpers\MarkdownHelper::toHtml($vacancy->description) !!}</p>

                                    </div>
                                    <div id="Map" class="tab-pane">
                                        <div class="contact-map">
                                            <iframe src="https://maps.app.goo.gl/oSdHm12QQP4nqRMR9" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div id="Contact" class="tab-pane">
                                        <div class="volunteer-contact">
                                            <div class="volunteer-contact-form" style="margin-top: 0px;">
                                                <h2>Məlumatları düzgün doldurun</h2>
                                                <form  method="POST" action="{{ route('send.resume') }}" enctype="multipart/form-data"  class=" contact-validation-active" id="contact-form-main">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in imgUp">
                                                            <div class="imagePreview" style="cursor: pointer; width: 100%; height: 200px; display: flex; justify-content: center; align-items: center; overflow: hidden; background-size: cover; background-position: center center;">
                                                                Click to upload
                                                            </div>
                                                            <input id="photo" type="file" class="form-control uploadFile img" name="photo" style="display: none;">
                                                            <label for="photo">Upload Your Photo</label>

                                                        </div>

                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group">
                                                            <input type="text" class="form-control" name="name" id="name"
                                                                   placeholder="Full name">
                                                        </div>


                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group">
                                                            <input type="text" class="form-control" name="phone" id="phone"
                                                                   placeholder="Phone">
                                                        </div>

                                                        <div id="pdfInfo"></div>
                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                            <label for="file">Upload Your CV</label>
                                                            <input id="file" type="file" class="form-control" name="pdf">
                                                            <i class="ti-cloud-up"></i>
                                                        </div>
                                                        <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">
                                                        <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="description" id="note"
                                                          placeholder="Description..."></textarea>
                                                        </div>
                                                        <div class="submit-area col-lg-12 col-12">
                                                            <button type="submit" class="theme-btn submit-btn">Send</button>
                                                            <div id="loader">
                                                                <i class="ti-reload"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix error-handling-messages">
                                                        <div id="success">Thank you</div>
                                                        <div id="error"> Error occurred while sending . Please try again later.
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">
                        <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search ..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>{{ __('welcome.latestNews') }}</h3>
                            <div class="posts">
                                @foreach($news AS $new)
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset("storage/" . $new->photo) }}" width="80px;" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="{{ route('news.show', $new->slug) }}">{{ \Illuminate\Support\Str::limit($new->title, 40) }}</a></h4>
                                        <span class="date">19 Jun 2021 </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-details-area end -->
@endsection
