@extends('layouts.app')
@section('content')
    @php $indexValue = 0 @endphp
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
                            @switch(Request::input('dine'))
                                @case(1)
                                @php $indexValue = 1 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/dine_main-1.png')}}">
                                @break
                                @case(2)
                                @php $indexValue = 7 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/dine_main-2.png')}}">
                                @break
                                @case(3)
                                @php $indexValue = 13 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/dine_main-3.png')}}">
                                @break
                                @case(4)
                                @php $indexValue = 19 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/dine_main-4.png')}}">
                                @break
                                @default
                                @break
                                @endsection
                            @endswitch
                        </picture>

                    </a></div>
            </div>
            @include('layouts.booking_form')
        </div>
        <section
            class="mi-sub-section sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-medium b-cs1">

            <div class="l-print-fullbleed l-container">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="TextLink9eb6">


                        <div class="tile-text-link b-cs1" data-component-id="TextLink_01_9eb6"
                             data-component-name="textLink" data-component-endpoint="/aries-hotelinfo/v1/textLink.comp">
                            <div class="tile-text-link l-print-hide"><a
                                    class="l-display-inline-block t-font-xs t-font-weight-semibold t-uppercase"
                                    href="{{route('dining.overview')}}"> <span
                                        class="left-back-arrow t-icon-arrow-left t-font-xxs t-font-weight-normal"></span>
                                    Back to Dining </a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section
            class="mi-sub-section sub-section l-print-fullbleed l-container t-bg-white l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs1">


            <div
                class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                <div id="RestaurantOverviewa77b">

                    <div class="tile-restaurant-overview b-cs1" data-component-id="RestaurantOverview_01_a77b"
                         data-component-name="restaurantOverview"
                         data-component-endpoint="">
                        @switch(Request::input('dine'))
                            @case(1)

                            <h2
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">FRINGALE RESTAURANT
                                & BAR</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Breakfast:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">7:00 am – 10:00 am</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Lunch:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">12:30 pm – 3:00 pm</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dinner:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">: 6:30 pm – 11:30 pm</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Cuisine:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">European</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dress Code:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">07:00 PM–11:30 PM</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Saturday:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">Smart Casual</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Phone:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">+00000000</span>
                                    </div>
                                </div>
                            </div>
                            @break



                            @case(2)
                            <h2
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">RENDEZVOUS BAR & TEA
                                LOUNGE</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Midnight:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">10.00am – 12am </span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Cuisine:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Bar & Tea Lounge</span>
                                    </div>
                                </div>

                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dress Code:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Smart Casual</span>
                                    </div>
                                </div>

                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Phone:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">+00000000</span>
                                    </div>
                                </div>
                            </div>
                            @break
                            @case(3)
                            <h2
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">KTV – KARAOKE
                                BAR</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Timings:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">6.00pm to 3.00am</span>
                                    </div>
                                </div>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Karaoke Bar</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6">
                                    </div>
                                </div>

                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dress Code:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Smart Casual</span>
                                    </div>
                                </div>

                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Phone:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">+00000000</span>
                                    </div>
                                </div>
                            </div>
                            @break
                            @case(4)
                            <h2
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">GOURMANDISE – DELI
                                CORNER</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Timings:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">7:00 am – 11:00pm</span>
                                    </div>
                                </div>


                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dress Code:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">Casual</span>
                                    </div>
                                </div>

                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Phone:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span
                                            class="l-display-block">+00000000</span>
                                    </div>
                                </div>
                            </div>
                            @break
                            @default
                            @break
                        @endswitch

                        <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                            @switch(Request::input('dine'))
                                @case(1)
                                <div itemprop="description" class="l-restaurant-description"><p>Start the day with a
                                        hearty
                                        breakfast at the stylish Fringale Restaurant. Here dining is all about sharing
                                        good
                                        food with good conversation. Enjoy a wide variety of a la carte dishes for lunch
                                        and
                                        dinner including an irresistible selection of French specialties as you
                                        socialize
                                        with family and friends. Fringale offers both indoor and al fresco dining spaces
                                        with a lovely terrace where you can savour your favourite shisha flavours along
                                        with
                                        the restaurant’s distinctive dining and beverage menu and watch life happening
                                        around you.<br>
                                        <br>
                                        The restaurant also features a unique and intimate bar space ‘La Cave’ offering
                                        a
                                        premier selection of beverages especially some great wines and snacks. You will
                                        fall
                                        in love with this atmospheric hideaway as you enjoy the creative wine list with
                                        some
                                        terrific music. <br>
                                </div>
                                @break
                                @case(2)
                                <div itemprop="description" class="l-restaurant-description"><p>Rendezvous Bar & Tea
                                        Lounge fuels the imagination all day long from morning coffee to afternoon tea
                                        and evening cocktails and beverages. <br>
                                        <br>
                                        The highlights are the traditional English tea and a la grand Afternoon Tea
                                        featuring Victoria sponge, English tea cake, sweet treats, sandwiches, scones
                                        and champagne. Served amid a warm and homely setting, it is an excellent way to
                                        relax and indulge with family and friends or business associates. <br>
                                </div>
                                @break
                                @case(3)
                                <div itemprop="description" class="l-restaurant-description"><p>KTV – Karaoke Bar is a
                                        cool venue for you to sing with a wide range of popular songs and show tunes. It
                                        is an immensely enjoyable place to be whether you take to the mic or not. <br>
                                        <br>
                                        It also boasts an exclusive VIP singing room for private groups. With a lively
                                        and vibrant atmosphere, relaxed vibes, a great mix of people and incredible
                                        promotions on drinks KTV – Karaoke Bar is an all-round entertainment venue.<br>
                                </div>
                                @break
                                @case(4)
                                <div itemprop="description" class="l-restaurant-description"><p>Gourmandise - deli
                                        corner is a contemporary coffee shop where guests can gather and socialise with
                                        refreshing hot and cold beverages, light snacks and sweet treats in a casual and
                                        comfortable setting. It is the ideal place for a quick coffee, informal
                                        meetings, or relaxation any time of the day.<br>

                                </div>
                                @break
                                @default
                                @break
                            @endswitch

                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section
            class="mi-sub-section sub-section t-bg-standard-30 l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs2" style="background: #fff !important;">

            <div class="l-print-fullbleed l-container" style="background: #fff !important;">
                <div
                    class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
                    <div id="GuestRoom6976" style="background: #fff !important;">

                        <div class="tile-guest-room l-clear b-cs2" data-component-id="GuestRoom_02_6976"
                             data-component-name="guestRoom"
                             data-component-endpoint="/aries-hotelinfo/v1/roomPoolGrid.comp">
                            <div class="mi-slider l-margin-top-double">
                                <div class="l-frame">
                                    <ul class="l-clear l-display-flex" style="width: 1177px;background: #fff !important;" >
                                        @foreach(range($indexValue,$indexValue+2) as $key)
                                        <li class="">

                                                <picture
                                                    class="l-picture-wrapper l-display-block l-max-height mi-lazyLoadImage">

                                                    <img class="l-align-center" alt="ATECA HOTELS"
                                                         itemprop=""
                                                         src="{{asset('img/dp-'.$key.'.png')}}">
                                                </picture>
{{--                                                <div class="t-room-info l-s-col-4 l-margin-top-quarter">--}}
{{--                                                    <div class="l-margin-left l-margin-right" itemprop="" itemscope=""--}}
{{--                                                         itemtype=""><h3--}}
{{--                                                            class="t-font-size-name t-font-weight-semibold l-margin-bottom-half"--}}
{{--                                                            itemprop="">Wonderful Room</h3>   <span--}}
{{--                                                            class="t-font-m l-display-inline-block" itemprop="">Guest room, 1 King, Sofa bed, Partial ocean view, Balcony</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            <div--}}
{{--                                                class="l-margin-left l-margin-right l-margin-bottom l-pos-absolute l-pos-bottom">--}}
{{--                                                <a href="/hotels/hotel-rooms/details/dxbtp-w-dubai-the-palm/king/"--}}
{{--                                                   class="m-button m-button-primary t-font-m l-padding l-padding-top-three-quarters l-padding-bottom-three-quarters l-display-inline-block">--}}
{{--                                                    Room Details </a></div>--}}
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="GuestRoom6976">

                        <div class="tile-guest-room l-clear b-cs2" data-component-id="GuestRoom_02_6976"
                             data-component-name="guestRoom"
                             data-component-endpoint="/aries-hotelinfo/v1/roomPoolGrid.comp">
                            <div class="mi-slider l-margin-top-double">
                                <div class="l-frame" style="    margin-top: -50px !important;">
                                    <ul class="l-clear l-display-flex" style="width: 1177px;background: #fff !important;">
                                        @foreach(range($indexValue+3,$indexValue+5) as $key)
                                            <li class="">

                                                <picture
                                                    class="l-picture-wrapper l-display-block l-max-height mi-lazyLoadImage">

                                                    <img class="l-align-center" alt="ATECA HOTELS"
                                                         itemprop=""
                                                         src="{{asset('img/dp-'.$key.'.png')}}">
                                                </picture>
                                                {{--                                                <div class="t-room-info l-s-col-4 l-margin-top-quarter">--}}
                                                {{--                                                    <div class="l-margin-left l-margin-right" itemprop="" itemscope=""--}}
                                                {{--                                                         itemtype=""><h3--}}
                                                {{--                                                            class="t-font-size-name t-font-weight-semibold l-margin-bottom-half"--}}
                                                {{--                                                            itemprop="">Wonderful Room</h3>   <span--}}
                                                {{--                                                            class="t-font-m l-display-inline-block" itemprop="">Guest room, 1 King, Sofa bed, Partial ocean view, Balcony</span>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}

                                                {{--                                            <div--}}
                                                {{--                                                class="l-margin-left l-margin-right l-margin-bottom l-pos-absolute l-pos-bottom">--}}
                                                {{--                                                <a href="/hotels/hotel-rooms/details/dxbtp-w-dubai-the-palm/king/"--}}
                                                {{--                                                   class="m-button m-button-primary t-font-m l-padding l-padding-top-three-quarters l-padding-bottom-three-quarters l-display-inline-block">--}}
                                                {{--                                                    Room Details </a></div>--}}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
