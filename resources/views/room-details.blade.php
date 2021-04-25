@extends('layouts.app')
@section('content')
    @extends('layouts.app')
@section('content')
    <div class="l-row">
        <div
            class="mi-sub-section bleed-sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-none">

            <div id="SubPageHeroImage1193">


                <div class="tile-subpage-hero-image l-pos-relative " data-component-id="SubPageHeroImage_01_1193"
                     data-component-name="subPageHeroImage"
                     data-component-endpoint=""><a href="#"
                                                   class="js-gallery-viewer mi-popover"
                                                   data-mfp-src="/hotels/photo-tours.mi?marshaCode=dxbtp&amp;pageID=guestroomexamples">
                        <picture class="l-display-block aspect-ratio-5by2 mi-lazyLoadImage ">
                            @switch(Request::input('room'))
                                @case(1)
                                <img alt="Fabulous Suite" class="l-display-block"
                                     src="{{asset('img/room-overview.png')}}">
                                @break
                                @case(2)
                                <img alt="Fabulous Suite" class="l-display-block"
                                     src="{{asset('img/room-2.png')}}">
                                @break
                                @case(3)
                                <img alt="Fabulous Suite" class="l-display-block"
                                     src="{{asset('img/room-3.png')}}">
                                @break
                                @case(4)
                                <img alt="Fabulous Suite" class="l-display-block"
                                     src="{{asset('img/room-4.png')}}">
                                @break
                                @default
                                @break
                            @endswitch
                        </picture>
                        <div class="l-container"><span class="l-photoGallery-icon is-visible-s is-hidden-m"><span
                                    class="t-icon-gallery l-pos-absolute"></span></span>

                        </div>
                    </a></div>
            </div>
            @include('layouts.booking_form')
        </div>

        <section
            class="mi-sub-section sub-section t-bg-white l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-medium b-cs1">

            <div class="l-print-fullbleed l-container">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="TextLink0618">


                        <div class="tile-text-link b-cs1" data-component-id="TextLink_01_0618"
                             data-component-name="textLink" data-component-endpoint="/aries-hotelinfo/v1/textLink.comp">
                            <div class="tile-text-link l-print-hide"><a
                                    class="l-display-inline-block t-font-xs t-font-weight-semibold t-uppercase"
                                    href="{{route('home')}}"> <span
                                        class="left-back-arrow t-icon-arrow-left t-font-xxs t-font-weight-normal"></span>
                                    Back to Home </a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section
            class="mi-sub-section sub-section t-bg-white l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs1">

            <div class="l-print-fullbleed l-container">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="TitleSubtitleTexta368">
                        @switch(Request::input('room'))
                            @case(1)
                            <div class="  tile-overview-subpage b-cs1 l-center-align "
                                 data-component-id="TitleSubtitleText_01_a368" data-component-name="titleSubtitleText"
                                 data-component-endpoint="/aries-hotelinfo/v1/titleSubtitleText.comp"><h2
                                    class="t-extend-h1">STANDARD KING ROOMS</h2>
                                <hr class="m-divider l-one-pixel-line-small b-accentColor">

                                <p class="l-margin-top-seven-quarters">With the Standard King Rooms at ATECA Hotel Suites you have everything you need for a comfortable stay and a good night’s sleep. Relax and unwind in this cozy room featuring a King size bed, plush mattresses topped with crisp linens, comforters, and fluffy pillows, all enhanced by our heart-warming hospitality.</p>
                            </div>
                            @break
                            @case(2)
                            <div class="  tile-overview-subpage b-cs1 l-center-align "
                                 data-component-id="TitleSubtitleText_01_a368" data-component-name="titleSubtitleText"
                                 data-component-endpoint="/aries-hotelinfo/v1/titleSubtitleText.comp"><h2
                                    class="t-extend-h1">STANDARD TWIN ROOMS</h2>
                                <hr class="m-divider l-one-pixel-line-small b-accentColor">

                                <p class="l-margin-top-seven-quarters">Escape the hustle of city life in the Standard Twin Rooms at ATECA Hotel Suites decorated in relaxing and inspiring colours. Perfectly equipped for both business and leisure travellers, these superb rooms blend great style with multifunction and offer everything you need for a great stay. </p>
                            </div>
                            @break
                            @case(3)
                            <div class="  tile-overview-subpage b-cs1 l-center-align "
                                 data-component-id="TitleSubtitleText_01_a368" data-component-name="titleSubtitleText"
                                 data-component-endpoint="/aries-hotelinfo/v1/titleSubtitleText.comp"><h2
                                    class="t-extend-h1">EXECUTIVE SUITES</h2>
                                <hr class="m-divider l-one-pixel-line-small b-accentColor">
{{--                                <h3 class="l-sub-heading l-margin-top-seven-quarters">Affordable luxury in modern and--}}
{{--                                    stylish surroundings</h3>--}}
                                <p class="l-margin-top-seven-quarters">At our Executive Suites enjoy additional space with separate sleeping and living rooms, ideal for guests planning an extended stay. These stylishly furnished spacious suites feature an array of in-room amenities including premium bedding for a comfortable and unforgettable experience.</p>
                            </div>
                            @break
                            @case(4)
                            <div class="  tile-overview-subpage b-cs1 l-center-align "
                                 data-component-id="TitleSubtitleText_01_a368" data-component-name="titleSubtitleText"
                                 data-component-endpoint="/aries-hotelinfo/v1/titleSubtitleText.comp"><h2
                                    class="t-extend-h1">SUPERIOR CONNECTED ROOMS</h2>
                                <hr class="m-divider l-one-pixel-line-small b-accentColor">
{{--                                <h3 class="l-sub-heading l-margin-top-seven-quarters">Affordable luxury in modern and--}}
{{--                                    stylish surroundings</h3>--}}
                                <p class="l-margin-top-seven-quarters">When travelling with family or friends book Superior Connected Rooms and enjoy optimum comfort and space. The category combines two Standard rooms with King-size and twin bed options. Revel in thoughtful details tailored around your needs as you enjoy our plush mattresses, crisp linens, comforters, and fluffy pillows in this sanctuary of sweet dreams. </p>
                            </div>
                            @break
                            @default
                            @break
                        @endswitch


                    </div>

                </div>
            </div>
        </section>
        <div class="" style="background: #fff !important;">
            <section
                class="mi-sub-section sub-section l-print-fullbleed l-container l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs1">


                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="HeadingTextListOfArticles7096">


                        <div class="tile-heading-text-listOfArticles l-clear b-cs1"
                             data-component-id="HeadingTextListOfArticles_01_7096"
                             data-component-name="headingTextListOfArticles"
                             data-component-endpoint="/aries-hotelinfo/v1/headingTextListOfArticles.comp">
                            <div class="l-clear"><h2
                                    class="l-center-align l-margin-bottom-seven-quarters l-margin-top-none">In-Room
                                    Facilities </h2>
                                <div class=" l-margin-bottom-seven-quarters">
                                    <hr class="l-one-pixel-line-small b-accentColor">
                                </div>
                            </div>
                            <div class="l-service-list l-clear l-display-flex l-display-flex-wrap">
                                <div
                                    class="l-service-list-item  l-margin-bottom  l-padding-none l-xl-col-4 l-l-col-6 l-m-col-4 l-s-col-4">
                                    <div
                                        class="l-service-description l-margin-none t-color-standard-90 t-font-weight-normal">

                                        <ul>
                                            <li>Complimentary Wi-Fi</li>

                                            <li>Extra-long beds (2 meters)</li>

                                            <li>Blackout curtains</li>

                                            <li>Balcony in some rooms</li>

                                            <li>Complimentary Coffee / Tea facilities</li>
                                            <li>Seating area in some rooms</li>
                                            <li>Telephone with local, national and international direct dialing</li>
                                            <li>Individually controlled air-conditioning</li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="l-service-list-item  l-margin-bottom  l-padding-none l-xl-col-4 l-l-col-6 l-m-col-4 l-s-col-4">
                                    <div
                                        class="l-service-description l-margin-none t-color-standard-90 t-font-weight-normal">
                                        <ul>
                                            <li>Minibar</li>
                                            <li>In-room safe</li>
                                            <li>Laptop safe box</li>
                                            <li>Bathroom with shower</li>
                                            <li>Coffee and tea facilities</li>
                                            <li>Heating</li>
                                            <li>Interconnecting room(s) available</li>

                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="l-service-list-item  l-margin-bottom  l-padding-none l-xl-col-4 l-l-col-6 l-m-col-4 l-s-col-4">
                                    <div
                                        class="l-service-description l-margin-none t-color-standard-90 t-font-weight-normal">


                                        <ul>
                                            <li>Toiletries</li>

                                            <li> LCD television / plasma screen</li>

                                            <li>Satellite / cable TV</li>

                                            <li>Fan on request</li>
                                            <li>Room service</li>
                                            <li>Non-smoking rooms</li>
                                            <li>Baby cots (available on request)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>
        @include('components.home.guest')

    </div>
@endsection

@endsection
