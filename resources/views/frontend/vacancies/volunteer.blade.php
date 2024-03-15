@extends('frontend.layouts.app')
@section('content')

    <div class="volunteer-area">
        <div class="volunteer-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="volunteer-item">
                            <div class="volunteer-img-wrap">
                                <div class="volunter-img">
                                    <img src="{{ asset('assets/images/volunteer.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="volunteer-contact">
                            <div class="volunteer-contact-form">
                                <h2>Become a Volunteer</h2>
                                <form  method="POST" action="{{ route('send.volunteerCv') }}" enctype="multipart/form-data"  class=" contact-validation-active" id="contact-form-main">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                            <input type="email" class="form-control" name="email" id="email"
                                                   placeholder="Email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                   placeholder="Phone">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                            <label for="file">Upload Your CV</label>
                                            <input id="file" type="file" class="form-control" name="pdfCV">
                                            <i class="ti-cloud-up"></i>
                                        </div>

                                        <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group ">
                                            <div class="wpo-payment-select">
                                                <ul>
                                                    <li class="addToggle">
                                                        <input id="add" type="radio" checked="checked" name="is_practice" value="1" style="height: 20px;">
                                                        <span>Könüllü kimi təcrübəliyəm</span>

                                                    </li>
                                                    <li class="removeToggle">
                                                        <input id="remove" type="radio" name="is_practice" value="0"  style="height: 20px;">
                                                        <span>Könüllü kimi təcrübəm yoxdur</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

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
@endsection
