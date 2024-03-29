
<section class="partners-section section-padding" style="padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    <h2>{{ __('welcome.ourPartners') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="partner-grids partners-slider owl-carousel">
                    @foreach($partners AS $partner)
                        <div class="grid">
                            <img src="{{ asset("storage/" . $partner->photo) }}" alt="{{ $partner->name }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
