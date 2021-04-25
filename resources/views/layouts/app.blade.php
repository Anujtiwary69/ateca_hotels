<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}" xml:lang="{{ App::getLocale() }}"
      class="webkit chrome chrome80 mac mac10 mac10_15 js non-retina orientation_landscape maxw_1920">
<script async="" src="/js/branch-latest.min.js">
</script>
@include('layouts.head')
<body class="t-bg-extralightgrey" data-hide-print="" data-gr-c-s-loaded="true" cz-shortcut-listen="true"
      style="overflow-y: visible;">
<div id="monetate_lightbox" style=" height: 0; left: 0; position: absolute; top: 0; width: 100%; z-index: 2147483645; ">
    <div id="monetate_lightbox_mask"
         style="background-color: rgb(28, 28, 28); height: calc(100% + 5000px); left: 0px; margin: 0px; padding: 0px; position: fixed; top: 0px; width: 100%; opacity: 0; display: none;"></div>
    <div id="monetate_lightbox_content_container" role="dialog" aria-modal="true"
         style="height: 306px; left: 0px; margin: 0px auto; position: relative; right: 0px; top: 162px; width: 363px; opacity: 0; display: none;">

    </div>
</div>
<a name="topOfPage"></a>
<div id="page-container" class="page-container">
    <style>
        #atAlertBanner {
            background: #1c1c1c;
            align-items: center;
            padding: 0;
            line-height: 18px;
            height: 50px;
            background: #908E8D;
            color: #ffffff;
            padding: 7px 16px 7px 0;
            font-family: proxima-nova, Helvetica, Arial, sans-serif;
            line-height: 18px;
            display: flex;
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-lead-copy {
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 1;
            margin-right: 20px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-pay-direct-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 25%;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        .l-center-align {
            text-align: center;
        }

        @media (min-width: 1024px) {
            #atAlertBanner {
                background: #1c1c1c;
                align-items: center;
                padding: 0;
                line-height: 18px;
                height: 50px;
            }
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        #atAlertBanner {
            background: #1c1c1c;
            align-items: center;
            padding: 0;
            line-height: 18px;
            height: 50px;
            background: #908E8D;
            color: #ffffff;
            padding: 7px 16px 7px 0;
            font-family: proxima-nova, Helvetica, Arial, sans-serif;
            line-height: 18px;
            display: flex;
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-lead-copy {
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 1;
            margin-right: 20px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-pay-direct-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 25%;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        .l-center-align {
            text-align: center;
        }

        @media (min-width: 1024px) {
            #atAlertBanner {
                background: #1c1c1c;
                align-items: center;
                padding: 0;
                line-height: 18px;
                height: 50px;
            }
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        #atAlertBanner {
            background: #1c1c1c;
            align-items: center;
            padding: 0;
            line-height: 18px;
            height: 50px;
            background: #908E8D;
            color: #ffffff;
            padding: 7px 16px 7px 0;
            font-family: proxima-nova, Helvetica, Arial, sans-serif;
            line-height: 18px;
            display: flex;
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-lead-copy {
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 1;
            margin-right: 20px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-pay-direct-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 25%;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        .l-center-align {
            text-align: center;
        }

        @media (min-width: 1024px) {
            #atAlertBanner {
                background: #1c1c1c;
                align-items: center;
                padding: 0;
                line-height: 18px;
                height: 50px;
            }
        }

        div#at-alert-banner-peace-of-mind-desk {
            display: flex !important;
        }

        @media (min-width: 1024px) {
            div#at-alert-banner-peace-of-mind-desk {
                display: flex !important;
            }
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-lead-copy {
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 1;
            margin-right: 20px;
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        div#at-alert-banner-peace-of-mind-desk .at-alert-banner-icon-container {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            color: #fff;
            align-items: center;
        }

        div#at-alert-banner-peace-of-mind-desk {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            color: #fff;
            font-size: 14px;
        }

        .at-alert-banner-pay-direct-container a > span:first-of-type {
            margin-right: 5px;
            width: 25px;
        }

        .at-alert-banner-pay-direct-container span {
            font-size: 14px;
        }

        .t-color-standard-80 {
            color: #ff9662;
        }

        .at-alert-banner-pay-direct-container span.t-font-weight-semibold {
            width: 140px;
            text-align: left;
            color: #fff;
        }

        div#at-alert-banner-peace-of-mind-mob a, div#at-alert-banner-peace-of-mind-mob [class*=t-icon-]:before, div#at-alert-banner-peace-of-mind-desk a, div#at-alert-banner-peace-of-mind-desk [class*=t-icon-]:before {
            color: #fff;
        }

        .t-icon-bestrate:before {
            content: "\e925";
            position: relative;
            top: -1px;
            transform: scale(1.5);
        }

        .t-icon-cancel:before {
            content: "\e88a";
            position: relative;
            top: -6px !important;
            transform: scale(1.5);
        }

        .t-icon-clean:before {
            content: "\e614";
            position: relative;
            top: -6px;
            transform: scale(1.75);
        }

        .t-icon-contactless:before {
            content: "\e639";
            position: relative;
            top: -6px;
            left: 3px;
            transform: scale(1.75);
        }


    </style>
    <div id="atAlertBanner" class="" role="alert" style="">
        <div class="l-container">
            {{--                <div class="t-icon-contactless" id="at-alert-banner-peace-of-mind-mob">--}}
            {{--                    <div class="at-alert-banner-lead-copy" >--}}
            {{--                        <div class="at-alert-banner-lead-copy-header">Contactless Services</div>--}}
            {{--                        <div class="at-alert-banner-lead-copy-cta"><a class="custom_click_track" >Travel with confidence during COVID-19</a>.</div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="l-center-align l-m-display-block" id="at-alert-banner-peace-of-mind-desk">
                <div class="at-alert-banner-lead-copy" style="display: flex;
    justify-content: center;
    align-self: center;"><span class="t-color-standard-80 t-icon-contactless">&nbsp;</span>&nbsp;&nbsp;<span>Travel with confidence</span>
                    &nbsp;<span>during COVID-19:</span></div>
                <div class="at-alert-banner-icon-container" style="display: flex !important;">
                    <div class="at-alert-banner-pay-direct-container at-icon-1"><a class="custom_click_track"><span
                                class="t-color-standard-80 t-icon-bestrate">&nbsp;</span> <span
                                class="t-font-weight-semibold">Best Rate Guaranteed</span></a></div> &nbsp;&nbsp;&nbsp;
                    <div class="at-alert-banner-pay-direct-container at-icon-2" style="width: 200px !important;"><a
                            class="custom_click_track"><span class="t-color-standard-80 t-icon-cancel">&nbsp;</span>
                            <span class="t-font-weight-semibold">Flexible Cancellation</span></a></div>&nbsp;&nbsp;&nbsp;
                    <div class="at-alert-banner-pay-direct-container at-icon-3" style="width: 200px !important;"><a
                            class="custom_click_track"><span class="t-color-standard-80 t-icon-clean">&nbsp;</span>
                            <span class="t-font-weight-semibold">Commitment to Clean</span></a></div>&nbsp;&nbsp;
                    <div class="at-alert-banner-pay-direct-container at-icon-4" style="width: 200px !important;"><a
                            class="custom_click_track"><span
                                class="t-color-standard-80 t-icon-contactless">&nbsp;</span> <span
                                class="t-font-weight-semibold">Contactless Services</span></a></div>
                </div>
            </div>
        </div>
        <button aria-label="Close" class="atAlertBannerCloseTippy"></button>
    </div>
    @if(Request::path()=='/')
        @include('layouts.header')
        @include('layouts.booking_form')
    @else
        @include('layouts.default_header')

    @endif

    <div class="id-content-wrapper" id="main-body-wrapper">
        <div class="l-row">
            @yield('content')

            @include('layouts.footer')
        </div>


    </div>
</div>
<script>
    $(document).ready(function () {
        $('#printOutPage').click(function () {
            $('#heading-new').show();
            printDiv('printableArea');
            $('#heading-new').hide();
        })
    })

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }

    $(window).scroll(function () {

        scroll = $(window).scrollTop();

        if (scroll > 400) {
            $(".m-header").addClass("sticky-header");
        } else {
            $(".m-header").removeClass("sticky-headerr");
        }

        if (scroll > 620) {
            $(".bookingform_newSection").removeClass('hide');

            $('.tile-hsearch-homepage').css('margin-top', '1%')
        } else {
            $(".bookingform_newSection").addClass('hide');
        }
    });

</script>
<script>
    $(document).ready(function () {
        $('.l-nav-item').click(function () {
            id = $(this).attr('id');
            if (id == 'Rooms') {
                $('.l-dropdown-container').show();
                $('#room-submenus').show();
                $('#dining-submenus').hide();
            }  else if (id == 'Dining') {
                $('.l-dropdown-container').show();
                $('#dining-submenus').show();
                $('#room-submenus').hide();
            }
            else {
                $('.l-dropdown-container').hide();
                $('#dining-submenus').hide();
                $('#room-submenus').hide();
            }

        })
    });

</script>
@yield('script')

</body>

</html>
