@extends('layouts.app')
@section('content')
    <div class="l-row" style="background: #fff !important;">
        <div
            class="mi-sub-section bleed-sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-none">

            <div id="SubPageHeroImagebf5b">

                <div class="tile-subpage-hero-image l-pos-relative " data-component-id="SubPageHeroImage_01_bf5b"
                     data-component-name="subPageHeroImage"
                     data-component-endpoint="/aries-hotelinfo/v1/subPageHeroImage.comp"><a href="#"
                                                                                            class="js-gallery-viewer mi-popover"
                                                                                            data-mfp-src="/hotels/photo-tours.mi?marshaCode=dxbtp&amp;pageID=restaurantsandlounges">
                        <picture class="l-display-block aspect-ratio-5by2 mi-lazyLoadImage ">

                            <img alt="" class="l-display-block"
                                 src="{{asset('/img/dining-overview.png')}}">
                        </picture>
                        <div class="l-container"><span class="l-photoGallery-icon is-visible-s is-hidden-m"><span
                                    class="t-icon-gallery l-pos-absolute"></span><span class="m-position-offscreen">View Photos</span></span>

                        </div>
                    </a></div>
            </div>
        @include('layouts.booking_form')
        </div>
        <section
            class="mi-sub-section sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-medium b-cs1">

            <div class="l-print-fullbleed l-container">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="TextLinka6f5">

                        <div class="tile-text-link b-cs1" data-component-id="TextLink_01_a6f5"
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
            class="mi-sub-section sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-default l-padding-tile-vertical-none l-padding-subsection-vertical-semiLarge b-cs1">

            <div class="l-print-fullbleed l-container">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="TitleSubtitleTextc32e">

                        <div class="  tile-overview-subpage b-cs1 l-center-align "
                             data-component-id="TitleSubtitleText_01_c32e" data-component-name="titleSubtitleText"
                             data-component-endpoint="/aries-hotelinfo/v1/titleSubtitleText.comp"><h2
                                class="t-extend-h1">Dining</h2>
                            <hr class="m-divider l-one-pixel-line-small b-accentColor">
                            <h3 class="l-sub-heading l-margin-top-seven-quarters">Ignite your appetite with our delicious flavours</h3>
                            <p class="l-margin-top-seven-quarters">ATECA Hotel Suites provides guests with the best of local and international flavours. Start the day with a hearty breakfast at the stylish Fringale Restaurant followed by awesome lunch and dinner. Here dining is all about sharing good food with good conversation. Rendezvous Bar & Tea Lounge fuels the imagination all day long from morning coffee to afternoon tea and evening cocktails and beverages. KTV – Karaoke Bar is a cool venue for you to sing with a wide range of popular songs and show tunes. Gourmandise - deli corner is the ideal place for a quick coffee, informal meetings, or relaxation. </p></div>
                    </div>

                </div>
            </div>
        </section>
        <section
            class="mi-sub-section sub-section l-print-fullbleed l-container l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs1">

            <div class="t-min-height-m l-display-flex l-display-flex-wrap">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last l-display-flex">
                    <div class="l-display-table-max">
                        <div class="l-vertical-align-center">
                            <div id="TabsDiningMaind4ce">
                                <div class="tile-dining-main l-clear b-cs1  default-view"
                                     data-component-id="TabsDiningMain_01_d4ce" data-component-name="tabsDiningMain"
                                     data-component-endpoint="/aries-hotelinfo/v1/tabsDiningMain.comp">
                                    <div class="l-dining-restaurant l-clear">
                                        <div class="l-row l-clear">
                                            <div class="mi-gallery l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6">
                                                <div
                                                    class="article-content mi-gallery-header l-l-col-12 l-margin-right-none">
                                                    <div
                                                        class="mi-carousel l-tiers-carousel l-l-col-12 l-margin-right-none"
                                                        data-speed="600" data-css-ease="true" data-dots="true">
                                                        <picture
                                                            class="l-img-wrap l-picture-wrapper aspect-ratio-3by2 l-overflow-hidden l-padding-none l-display-block l-pos-rel l-width-max"
                                                            style="" tabindex="-1" role="option"
                                                            aria-describedby="slick-slide60" aria-hidden="true">

                                                            <img class="l-image l-width-max"
                                                                 src="{{asset('img/dining-1.png')}}"
                                                                 alt="Torno Subito"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="l-text-container l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6 fade-wrap fade-in"
                                                data-trigger-hook="0.9">
{{--                                                <p--}}
{{--                                                    class="t-font-xs t-font-weight-semibold t-color-standard-90 l-margin-subsection-bottom-small l-margin-top-none l-margin-bottom-none l-cuisine">--}}
{{--                                                    Italian</p>--}}
                                                <h2 class="t-font-weight-bold l-margin-subsection-bottom-medium">FRINGALE RESTAURANT & BAR</h2>
                                                <p class="t-para-l l-margin-subsection-bottom-medium">Start the day with a hearty breakfast at the stylish Fringale Restaurant. Here dining is all about sharing good food with good conversation</p>
                                                <p class="l-margin-none t-color-standard-90 t-font-s">Open for Breakfast, Lunch and Dinner</p>
                                                <p class="t-color-standard-90 l-attire l-margin-none t-font-s">Dress
                                                    code: Smart Casual</p>
                                                <p class="t-color-standard-90 l-phone l-margin-none t-font-s l-margin-subsection-bottom-medium">
                                                    <span>Phone:</span> <span class="t-force-ltr">0000000000</span>
                                                </p>
                                                <div class="l-padding-subsection-top-large">
                                                    <div class="l-button-wrapper l-display-inline-block"><a
                                                            href="{{route('dining.details')}}?dine=1"
                                                            class="m-button m-button-secondary l-button l-detail l-margin-right-five-quarters">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="l-image-wrapper  l-l-offset-2 l-l-col-8 l-margin-top-five-quarters  l-display-none l-clear l-margin-auto"></div>
                                    </div>
                                    <div class="l-dining-restaurant l-clear">
                                        <div class="l-row l-clear">
                                            <div class="mi-gallery l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6" style="width: 443%;">
                                                <div
                                                    class="article-content mi-gallery-header l-l-col-12 l-margin-right-none">
                                                    <div
                                                        class="mi-carousel l-tiers-carousel l-l-col-12 l-margin-right-none"
                                                        data-speed="600" data-css-ease="true" data-dots="true">
                                                        <picture
                                                            class="l-img-wrap l-picture-wrapper aspect-ratio-3by2 l-overflow-hidden l-padding-none l-display-block l-pos-rel l-width-max"
                                                            style="" tabindex="-1" role="option"
                                                            aria-describedby="slick-slide70" aria-hidden="true">

                                                            <img class="l-image l-width-max"
                                                                 src="{{asset('img/dining-2.png')}}"
                                                                 alt="Akira Back"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="l-text-container l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6 fade-wrap fade-in"
                                                data-trigger-hook="0.9">
{{--                                                <p--}}
{{--                                                    class="t-font-xs t-font-weight-semibold t-color-standard-90 l-margin-subsection-bottom-small l-margin-top-none l-margin-bottom-none l-cuisine">--}}
{{--                                                    Japanese</p>--}}
                                                <h2 class="t-font-weight-bold l-margin-subsection-bottom-medium">RENDEZVOUS BAR & TEA LOUNGE</h2>
                                                <p class="t-para-l l-margin-subsection-bottom-medium">Rendezvous Bar & Tea Lounge fuels the imagination all day long from morning coffee to afternoon tea and evening cocktails and beverages.</p>
                                                <p class="l-margin-none t-color-standard-90 t-font-s">Open from: 10.00am – 12am (midnight)</p>
                                                <p class="t-color-standard-90 l-attire l-margin-none t-font-s">Dress
                                                    code:  Casual</p>
                                                <p class="t-color-standard-90 l-phone l-margin-none t-font-s l-margin-subsection-bottom-medium">
                                                    <span>Phone:</span> <span class="t-force-ltr">+000000000</span>
                                                </p>
                                                <div class="l-padding-subsection-top-large">
                                                    <div class="l-button-wrapper l-display-inline-block"><a
                                                            href="{{route('dining.details')}}?dine=2"
                                                            class="m-button m-button-secondary l-button l-detail l-margin-right-five-quarters">Details</a>
                                                    </div>
{{--                                                    <div class="l-button-wrapper l-display-inline-block"><a--}}
{{--                                                            href="https://www.eat2eat.com/SWBooking/Pages/Reservation.aspx?relId=NAA2ADMANQA=&amp;lang=0&amp;pro=0&amp;src=IPS"--}}
{{--                                                            target="_blank"--}}
{{--                                                            class="m-button m-button-secondary l-button l-reservation">Make--}}
{{--                                                            a Reservation</a></div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <div
                                            class="l-image-wrapper  l-l-offset-2 l-l-col-8 l-margin-top-five-quarters  l-display-none l-clear l-margin-auto"></div>
                                    </div>
                                </div>
                                    <div class="l-dining-restaurant l-clear">
                                        <div class="l-row l-clear">
                                            <div class="mi-gallery l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6">
                                                <div
                                                    class="article-content mi-gallery-header l-l-col-12 l-margin-right-none">
                                                    <div
                                                        class="mi-carousel l-tiers-carousel l-l-col-12 l-margin-right-none"
                                                        data-speed="600" data-css-ease="true" data-dots="true">
                                                        <picture
                                                            class="l-img-wrap l-picture-wrapper aspect-ratio-3by2 l-overflow-hidden l-padding-none l-display-block l-pos-rel l-width-max"
                                                            style="" tabindex="-1" role="option"
                                                            aria-describedby="slick-slide60" aria-hidden="true">

                                                            <img class="l-image l-width-max"
                                                                 src="{{asset('img/dining-3.png')}}"
                                                                 alt="Torno Subito"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="l-text-container l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6 fade-wrap fade-in"
                                                data-trigger-hook="0.9">
                                                {{--                                                <p--}}
                                                {{--                                                    class="t-font-xs t-font-weight-semibold t-color-standard-90 l-margin-subsection-bottom-small l-margin-top-none l-margin-bottom-none l-cuisine">--}}
                                                {{--                                                    Italian</p>--}}
                                                <h2 class="t-font-weight-bold l-margin-subsection-bottom-medium">KTV – Karaoke Bar</h2>
                                                <p class="t-para-l l-margin-subsection-bottom-medium">KTV – Karaoke Bar is a cool venue for you to sing with a wide range of popular songs and show tunes. It is an immensely enjoyable place to be whether you take to the mic or not.</p>
                                                <p class="l-margin-none t-color-standard-90 t-font-s">Open from: 6.00pm to 3.00am</p>
                                                <p class="t-color-standard-90 l-attire l-margin-none t-font-s">Dress
                                                    code:  Casual</p>
                                                <p class="t-color-standard-90 l-phone l-margin-none t-font-s l-margin-subsection-bottom-medium">
                                                    <span>Phone:</span> <span class="t-force-ltr">0000000000</span>
                                                </p>
                                                <div class="l-padding-subsection-top-large">
                                                    <div class="l-button-wrapper l-display-inline-block"><a
                                                            href="{{route('dining.details')}}?dine=3"
                                                            class="m-button m-button-secondary l-button l-detail l-margin-right-five-quarters">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="l-image-wrapper  l-l-offset-2 l-l-col-8 l-margin-top-five-quarters  l-display-none l-clear l-margin-auto"></div>
                                    </div>
                                    <div class="l-dining-restaurant l-clear">
                                        <div class="l-row l-clear">
                                            <div class="mi-gallery l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6" style="width: 443%;">
                                                <div
                                                    class="article-content mi-gallery-header l-l-col-12 l-margin-right-none">
                                                    <div
                                                        class="mi-carousel l-tiers-carousel l-l-col-12 l-margin-right-none"
                                                        data-speed="600" data-css-ease="true" data-dots="true">
                                                        <picture
                                                            class="l-img-wrap l-picture-wrapper aspect-ratio-3by2 l-overflow-hidden l-padding-none l-display-block l-pos-rel l-width-max"
                                                            style="" tabindex="-1" role="option"
                                                            aria-describedby="slick-slide70" aria-hidden="true">

                                                            <img class="l-image l-width-max"
                                                                 src="{{asset('img/dining-4.png')}}"
                                                                 alt="Akira Back"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="l-text-container l-s-col-4 l-m-col-8 l-l-col-6 l-xl-col-6 fade-wrap fade-in"
                                                data-trigger-hook="0.9">
                                                {{--                                                <p--}}
                                                {{--                                                    class="t-font-xs t-font-weight-semibold t-color-standard-90 l-margin-subsection-bottom-small l-margin-top-none l-margin-bottom-none l-cuisine">--}}
                                                {{--                                                    Japanese</p>--}}
                                                <h2 class="t-font-weight-bold l-margin-subsection-bottom-medium">GOURMANDISE – DELI CORNER</h2>
                                                <p class="t-para-l l-margin-subsection-bottom-medium">Gourmandise - deli corner is a contemporary coffee shop where guests can gather and socialise with refreshing hot and cold beverages, light snacks and sweet treats.</p>
                                                <p class="l-margin-none t-color-standard-90 t-font-s">Open from: 7:00 am – 11:00pm</p>
                                                <p class="t-color-standard-90 l-attire l-margin-none t-font-s">Dress
                                                    code:  Casual</p>
                                                <p class="t-color-standard-90 l-phone l-margin-none t-font-s l-margin-subsection-bottom-medium">
                                                    <span>Phone:</span> <span class="t-force-ltr">+000000000</span>
                                                </p>
                                                <div class="l-padding-subsection-top-large">
                                                    <div class="l-button-wrapper l-display-inline-block"><a
                                                            href="{{route('dining.details')}}?dine=4"
                                                            class="m-button m-button-secondary l-button l-detail l-margin-right-five-quarters">Details</a>
                                                    </div>
                                                    {{--                                                    <div class="l-button-wrapper l-display-inline-block"><a--}}
                                                    {{--                                                            href="https://www.eat2eat.com/SWBooking/Pages/Reservation.aspx?relId=NAA2ADMANQA=&amp;lang=0&amp;pro=0&amp;src=IPS"--}}
                                                    {{--                                                            target="_blank"--}}
                                                    {{--                                                            class="m-button m-button-secondary l-button l-reservation">Make--}}
                                                    {{--                                                            a Reservation</a></div>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                            </div>
                                            <div
                                                class="l-image-wrapper  l-l-offset-2 l-l-col-8 l-margin-top-five-quarters  l-display-none l-clear l-margin-auto"></div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<br><br><br><br>
    </div>
@endsection
