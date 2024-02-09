@extends('frontend.layouts.app')
@section('content')
    <!-- wpo-event-details-area start -->
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
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div id="Contact" class="tab-pane">
                                        <div class="event-volunteer-contact-form ">
                                            <div class="volunteer-contact-form " style="padding: 350px 40px; position: unset;">
                                                <form method="POST" action="{{ route('send.resume') }}" class="contact-validation-active " id="contact-form-main ">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                            <input type="text" class="form-control " name="name" id="name"
                                                                   placeholder="First and Last Name">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                            <input type="text" class="form-control" name="email" id="phone"
                                                                   placeholder="Phone">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                            <input type="text" class="form-control" name="subject" id="subject"
                                                                   placeholder="Subject">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in ">
                                                            <label for="file">Upload Your CV</label>
                                                            <input id="file" type="file" class="form-control" name="file">
                                                            <i class="ti-cloud-up"></i>
                                                        </div>
                                                        <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="note" id="note"
                                                          placeholder="Case Description..."></textarea>
                                                        </div>
                                                        <div class="submit-area col-lg-12 col-12">
                                                            <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                                            <div id="loader">
                                                                <i class="ti-reload"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix error-handling-messages">
                                                        <div id="success">Thank you</div>
                                                        <div id="error"> Error occurred while sending email. Please try again later.
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
