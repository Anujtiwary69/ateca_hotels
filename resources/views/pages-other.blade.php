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
                            @switch(Request::input('page'))
                                @case(1)
                                @php $indexValue = 1 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/wellness.png')}}">
                                @break
                                @case(2)
                                @php $indexValue = 7 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/meetings.png')}}">
                                @break
                                @case(3)
                                @php $indexValue = 13 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/facilities.png')}}">
                                @break
                                @case(4)
                                @php $indexValue = 19 @endphp
                                <img alt="" class="l-display-block"
                                     src="{{asset('/img/area.png')}}">
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
                        @switch(Request::input('page'))
                            @case(1)

                            <h2
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">SERENE SPA</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">10:00 am – 10:00pm</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6">
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
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">IRIS MEETING ROOM</h2>
                            <hr class="l-one-pixel-line-small b-accentColor l-margin-left-none l-margin-top-none l-label-space">
                            <div class="l-s-col-4 l-m-col-8 l-l-col-6">
                                <p
                                    class="t-font-weight-semibold l-margin-subsection-bottom-small l-margin-top-none l-s-col-4 l-m-col-8 l-l-col-6">
                                    Hours of Operation</p>
                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">
                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Capacity:</div>
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Up to 25 people </span>
                                    </div>
                                </div>
{{--                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">--}}
{{--                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Cuisine:</div>--}}
{{--                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Bar & Tea Lounge</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="l-margin-bottom-five-quarters l-s-col-4 l-m-col-6 l-l-col-9 l-float-left">--}}
{{--                                    <div class="l-s-col-1 l-m-col-2 l-l-col-3">Dress Code:</div>--}}
{{--                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Smart Casual</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

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
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">KTV – KARAOKE BAR</h2>
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
                                class="l-label-space t-extend-h1 l-margin-top-none" itemprop="name">GOURMANDISE – DELI CORNER</h2>
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
                                    <div class="l-s-col-3 l-m-col-4 l-l-col-6"><span class="l-display-block">Casual</span>
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
                            @switch(Request::input('page'))
                                @case(1)
                                <div itemprop="description" class="l-restaurant-description"><p>Serene Spa offers an array of relaxing, rejuvenating and indulgent treatments and massages inspired from some of the world’s greatest spa traditions drawn from the East and West. Encompassing a unique approach for wellness, every treatment here is designed to repair and restore tired nerves while nourishing mind, body and soul. Return to balance, escape from the everyday and reinvigorate your senses.<br>
                                        <br>
                                        The highlight here is the traditional Hammam, sauna and steam rooms. Experience deep relaxation in the specially designed marble-slabbed Hammam, as the therapist gives an indulgent full body massage combining tradition and modernity in a private room, leaving the entire body totally refreshed. Give into soothing sensations as you immerse yourself in the exotic ritual. <br>
                                </div>
                                @break
                                @case(2)
                                <div itemprop="description" class="l-restaurant-description"><p>ATECA Hotel Suites offers a compact yet flexible and inspiring meeting room equipped with the latest AV technology and high-speed Internet. Ideal for hosting an intimate boardroom meeting, productive business or training session, workshop, product launch or a small private event. <br>
                                        <br>
                                        Our experienced and well-trained team ensures every event is flawlessly executed. Post meeting you and your colleagues or friends can enjoy a delicious lunch at the Fringale Restaurant and Bar. <br>
                                </div>
                                @break
                                @case(3)
                                <div itemprop="description" class="l-restaurant-description"><p>KTV – Karaoke Bar is a cool venue for you to sing with a wide range of popular songs and show tunes. It is an immensely enjoyable place to be whether you take to the mic or not. <br>
                                        <br>
                                        It also boasts an exclusive VIP singing room for private groups. With a lively and vibrant atmosphere, relaxed vibes, a great mix of people and incredible promotions on drinks KTV – Karaoke Bar is an all-round entertainment venue.<br>
                                </div>
                                @break
                                @case(4)
                                <div itemprop="description" class="l-restaurant-description"><p>Gourmandise - deli corner is a contemporary coffee shop where guests can gather and socialise with refreshing hot and cold beverages, light snacks and sweet treats in a casual and comfortable setting. It is the ideal place for a quick coffee, informal meetings, or relaxation any time of the day.<br>

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
                                                         src="{{asset('img/op-'.$key.'.png')}}">
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
                                                         src="{{asset('img/op-'.$key.'.png')}}">
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
