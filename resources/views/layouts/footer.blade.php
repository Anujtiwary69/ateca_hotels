<center>
    <section class="page-section booking_form main-container-1" id="" >
        <div class="container">
            <h4 class="">Book Now</h4>
            <div class="row pt-5 pb-5  pl-5 ml-5">


                <div class="col-sm-4 col-lg-4 col-md-4">
                    <label class="search-title">DESTINATIONS</label>
                    <input type="text" class="form-control" autocomplete="off" style=" color: #313538 !important;
               font-size: 16px !important;" placeholder="WHERE TO?" name="where_to">
                    <ul class="list-group" id="list-hotels" style="display:none;">
                        <li class="list-group-item" style="color:black;">Leva Mazaya Centre Dubai</li>
                    </ul>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <label class="search-title">DATES</label>
                    <label class="search-title float-right night_count" id="night_count"> 1 NIGHT</label>
                    <input class="form-control" type="text" name="dates" style=" color: #313538 !important;
               font-size: 16px !important;" autocomplete="off" placeholder="< 13, Apr 2021> | < 14, Apr 2021 >" onkeydown="return false">
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4" style="display: flex;


    align-items: center;">

                    <label class="search-title">&nbsp;</label>
                    <div class="l-xs-col-4 l-xl-col-4 l-xl-last-col l-hsearch-find l-find-top js-hform-fields"> <span class="is-visible-s is-hidden-m"> <button title="View Rates" data-analytics="{'location':'searchForm'}" class="analytics-click js-is-roomkey-enabled m-button m-button-primary" type="submit"> <span class="l-pos-relative t-icon-calendar l-icon-calendar-inline l-margin-right-half"></span>View Rates </button> </span> <span class="is-hidden-s is-visible-m"><button title="" data-analytics="{'location':'searchForm'}" class="analytics-click js-is-roomkey-enabled m-button m-button-primary " type="submit" style="background: #de0094;    margin-top: 24px;" > Book Now </button></span> </div>
                </div>
            </div>
        </div>

    </section>
</center>

<section
    class="mi-sub-section sub-section t-bg-white l-margin-subsection-bottom-none l-margin-tile-vertical-none l-padding-tile-vertical-none l-padding-subsection-vertical-large b-cs1">

    <div class="l-print-fullbleed l-container">
        <div
            class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
            <div id="HwsSiteMap7db1">

                <nav class="tile-hws-site-map-footer l-print-hide b-cs1" aria-labelledby="hws-site-map-footer"
                     data-component-id="HwsSiteMap_02_7db1" data-component-name="hwsSiteMap"
                     data-component-endpoint="/aries-hotelinfo/v1/hwsSiteMap.comp">
                    <div class="t-nav-heading" id="hws-site-map-footer"><a
                            class="l-margin-top-none t-font-mll t-line-height-xxl l-left-align"
                            href="/"> {{env("APP_NAME")}} </a></div>

                    @php $array_menu =  array('Overview','Rooms','Dining','Fitness & Spa','Meetings','Photos','Local Area','Offers','Contact Us') @endphp
                    <ul class="l-row" style="display: flex !important;">
                        @foreach($array_menu as $key)
                            <li><a class="l-margin-top-none l-left-align"
                                   href="#">{{$key}} </a></li>
                        @endforeach

                    </ul>
                    <div
                        class="pr-1 mr-1 pl-3 mi-drawer-mobile l-l-col-6 l-s-col-6 l-offers-layout l-l-padding-left-three-quarters js-event-applied contact-us-footer">

                        <ul class="m-socialLinks mb-0" style="margin-top: -10px;">
                            <li class="l-display-inline-block pl-1">
                                <a href="https://www.facebook.com//"
                                   class="t-icon-social-facebook t-alt-link t-icon" style="top:-7px !important;">
                                    {{--  <span>Facebook</span>  --}}
                                </a>
                            </li>
                            <li class="l-display-inline-block pl-0">
                                <a href="https://www.instagram.com//"
                                   class="t-icon-social-instagram t-alt-link t-icon" style="top:-7px !important;">
                                    {{--  <span>Instagram</span>  --}}
                                </a>
                            </li>
                            <li class="l-display-inline-block pl-0">
                                <a href="https://twitter.com/"
                                   class="t-icon-social-twitter t-alt-link t-icon" style="top:-7px !important;">
                                    {{--  <span>Twitter</span>  --}}
                                </a>
                            </li>

                            <li class="l-display-inline-block pl-0 mb-0">
                                <a href="https://www.youtube.com/channel/"
                                   class="t-icon-social-youtube t-alt-link t-icon" style="top:-7px !important;">
                                    {{--  <span>YouTube</span>  --}}
                                </a>
                            </li>

                            <li class="l-display-inline-block pl-0 mb-0">
                                <a href="https://t.me/Atecamarketing">
                                    <i class="fa fa-telegram t-alt-link t-icon"></i>
                                </a>
                            </li>
                        </ul>
                        @if(App::getLocale()=='en')
                            <div class="">
                                <p style="color:#000 !important;line-height: 1.5;" class="mb-1"><b>
                                        <ion-icon name="location-outline"></ion-icon>&nbsp; Tashkent:
                                    </b>Yunusobod C-6, House 111, Apartment 2</p>



                            </div>
                        @else
                            <div class="">
                                <p style="color:#000 !important;line-height: 1.5;" class="mb-1"><b>
                                        <ion-icon name="location-outline"></ion-icon>&nbsp; Ташкент:
                                    </b>Юнусабад Ц-6, дом 111, #2
                                    Ташкент, Узбекистан</p>

                                <p style="color:#000 !important;line-height: 1.5;" class="mb-1"><b>
                                        <ion-icon name="location-outline"></ion-icon>&nbsp; Квинсленд:
                                    </b>P.O. Box 1301,
                                    Noosa Heads Queensland,
                                    4567 Australia</p>
                                <p style="color:#000 !important;line-height: 1.5;" class="mb-1"><b>
                                        <ion-icon name="location-outline" class="text-white md hydrated" style="color:#fff"
                                                  role="img" aria-label="location outline"></ion-icon>&nbsp;  Лос-Анжелес
                                        :
                                    </b>18580 Ventura Boulevard Tarzana California 91356</p>


                            </div>

                        @endif
                    </div>
                </nav>
            </div>

            <div id="BackToTopLink0d64">
                <a href23424="#" id="backToTop"
                   class="tile-back-to-top t-cursor-pointer l-padding-none t-font-xl l-display-inline-block"
                   aria-label="back to top" data-component-id="BackToTopLink_01_0d64"
                   data-component-name="backToTopLink"
                   data-component-endpoint="/aries-hotelinfo/v1/backToTopLink.comp"><span class="l-display-none">back to top</span><span
                        class="t-icon back-top-arrow t-icon-arrow-up l-icon-back-to-top"
                        aria-label="back to top"></span> </a></div>

            <div id="recentlyViewedPropertyac9c">


            </div>

        </div>
    </div>
    <div class="l-print-fullbleed l-container" style="float: right !important;">
            @if(App::getLocale()=='en')
            <span class="pull-right mb-2">© {{date('Y')}}, {{env("APP_NAME")}}. All Rights Reserved<br></span>
            @else

            <span class="pull-right mb-2">© {{date('Y')}}, ATECA Hotels. Все права защищены<br></span>
            @endif
            <br>
        </div>
</section>
{{--<section--}}
{{--    class=" mt-4 mb-4 mi-sub-section sub-section t-box-shadow t-bg-standard-20 l-margin-subsection-bottom-none l-margin-tile-vertical-default l-padding-tile-vertical-default l-padding-subsection-vertical-none">--}}
{{--    <div class="l-print-fullbleed l-container">--}}
{{--        <link rel="stylesheet"--}}
{{--            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--        <div class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">--}}
{{--            <div id="LinksBlock222d">--}}

{{--                <section class="pt-4  pb-2 tile-links-block l-clear">--}}
{{--                    <div--}}
{{--                        class="pr-1 mr-1 pl-3 mi-drawer-mobile l-l-col-3 l-s-col-3 l-offers-layout l-l-padding-left-three-quarters js-event-applied">--}}

{{--                        <h3 class=" mb-1 l-l-padding-top-none l-margin-bottom-five-quarters is-drawer-control toggle-data  l-margin-top-none l-left-align t-font-weight-bold"--}}
{{--                            role="button"> <span class="t-drawer-icon t-icon-arrow-down l-float-right l-l-display-none"--}}
{{--                                data-accordion-open="" data-accordion-close="" aria-label=""></span> <a href="/about"--}}
{{--                                class="text-dark"><span>Lorem Ipsum--}}

{{--                                </span> </a> </h3>--}}
{{--                        <ul class="m-socialLinks mb-0">--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="ATECA Hotels Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('About The Chairman')) }}"Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Member Benefits " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Our Management Services')) }}">Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Earn Points " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Our Performance Advantage')) }}">Lorem Ipsum--}}

{{--                                </a> </li>--}}
{{--                            <li class="mb-0 l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Redeem Points " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Architecture & Technical Services')) }}">Lorem Ipsum--}}

{{--                                </a> </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="pr-1 mr-1 pl-3 mi-drawer-mobile l-l-col-3 l-s-col-3 l-offers-layout l-l-padding-left-three-quarters js-event-applied">--}}
{{--                        <h3 class=" mb-1 l-l-padding-top-none l-margin-bottom-five-quarters is-drawer-control toggle-data l-margin-top-quarter l-s-padding-top l-margin-top-none l-left-align t-font-weight-bold"--}}
{{--                            role="button"> <span class="t-drawer-icon t-icon-arrow-down l-float-right l-l-display-none"--}}
{{--                                data-accordion-open="" data-accordion-close="" aria-label=""></span> <a href="/brands"--}}
{{--                                class="text-dark"><span>Lorem Ipsum</span> </a> </h3>--}}
{{--                        <ul class="m-socialLinks mb-0">--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Meetings &amp; Events Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('ATECA Grand Hotel')) }}">Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Business Meetings " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('ATECA Suites Hotel')) }}">Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Weddings " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('ATECA Residence Hotel')) }}">Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Weddings " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('ATECA Inn')) }}">Lorem Ipsum--}}
{{--                                </a> </li>--}}

{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Weddings " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('ATECA f24-7')) }}"> Lorem Ipsum--}}
{{--                                </a> </li>--}}




{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="pr-1 mr-1 pl-3 mi-drawer-mobile l-l-col-3 l-s-col-3 l-offers-layout l-l-padding-left-three-quarters js-event-applied">--}}
{{--                        <h3 class=" mb-1 l-l-padding-top-none l-margin-bottom-five-quarters is-drawer-control toggle-data l-margin-top-quarter l-s-padding-top l-margin-top-none l-left-align t-font-weight-bold"--}}
{{--                            role="button"> <span class="t-drawer-icon t-icon-arrow-down l-float-right l-l-display-none"--}}
{{--                                data-accordion-open="" data-accordion-close="" aria-label=""></span> <a href="/press"--}}
{{--                                class="text-dark"><span>Lorem Ipsum</span> </a> </h3>--}}
{{--                        <ul class="m-socialLinks mb-0">--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Meetings &amp; Events Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Meetings & Events')) }}">Lorem Ipsum </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Meetings &amp; Events Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Facilities')) }}">Lorem Ipsum--}}
{{--                                </a> </li>--}}


{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Meetings &amp; Events Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Dining')) }}">Lorem Ipsum</a>--}}
{{--                            </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Meetings &amp; Events Overview " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Offers')) }}">Lorem Ipsum </a>--}}
{{--                            </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Business Meetings " class="t-font-m t-alt-link"--}}
{{--                                    href="{{ str_replace(' ','-',strtolower('Sustainability')) }}">Lorem Ipsum--}}
{{--                                </a> </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Weddings " class="t-font-m t-alt-link"--}}
{{--                                    href="/{{ str_replace(' ','-',strtolower('Careers')) }}">Lorem Ipsum </a>--}}
{{--                            </li>--}}
{{--                            <li class="l-padding-none l-margin-bottom-three-quarters t-line-height-xl "> <a--}}
{{--                                    title="Weddings " class="t-font-m t-alt-link"--}}
{{--                                    href="/{{ str_replace(' ','-',strtolower('Press')) }}">Lorem Ipsum--}}
{{--                                </a> </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                   --}}
{{--                </section>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="l-print-fullbleed l-container">--}}
{{--        @if(App::getLocale()=='en')--}}
{{--        <span class="pull-right mb-2">© {{date('Y')}}, {{env("APP_NAME")}}. All Rights Reserved<br></span>--}}
{{--        @else--}}

{{--        <span class="pull-right mb-2">© {{date('Y')}}, ATECA Hotels. Все права защищены<br></span>--}}
{{--        @endif--}}
{{--        <br>--}}
{{--    </div>--}}
{{--</section>--}}

<script>
    $(document).ready(function () {
        $('.list-group').hide();
        $('#menu').click(function () {
            $('.list-group').show();
        });

        $('ion-icon').click(function () {
            $('.list-group').hide();
        })
    })
</script>
