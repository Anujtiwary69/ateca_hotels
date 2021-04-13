<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @if(env('APP_ENV')=="production")
        @php $extra =  "/public/" @endphp
    @else
        @php $extra =  "" @endphp
        @endif


    <script  src="{{asset($extra.'/js/marriottCommon.js')}}"></script>

    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <title>{{ env('APP_NAME')}} </title>
   <meta name="description" content="ATECA Hotels offers owners, investors, partners, associates and communities a world of opportunity. Through our strategic approach to development, ATECA Hotels is focused on delivering superior return on investment with great guest experiences built around French savoir faire.">

   <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/fav/apple-icon-57x57.png ') }}">
   <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/fav/apple-icon-60x60.png') }}">
   <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/fav/apple-icon-72x72.png') }}">
   <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/fav/apple-icon-76x76.png') }}">
   <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/fav/apple-icon-114x114.png') }}">
   <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/fav/apple-icon-120x120.png') }}">
   <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/fav/apple-icon-144x144.png') }}">
   <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/fav/apple-icon-152x152.png') }}">
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/fav/apple-icon-180x180.png') }}">
   <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/img/fav/android-icon-192x192.png') }}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/fav/favicon-32x32.png') }}">
   <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/fav/favicon-96x96.png') }}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/fav/favicon-16x16.png') }}">
   <link rel="manifest" href="/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="{{ asset('/img/fav/ms-icon-144x144.png') }}">
   <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" media="all" href="{{asset($extra.'/css/foundation.css')}}?rand={{ rand() }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset($extra.'css/brands.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset($extra.'/css/extra.css')}}">

    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/dataLayer.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/adaptiveHtmlHead.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/pageStaticContent.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/univNavHamburgerMenu.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/programLogo.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/quickLinkItem.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/mainNavLink.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/heroImageITO.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/clickToAction.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/searchFormHorizontalHomePage.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/adaptiveHeading.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/paysBookDirect.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/cardText.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/marriottRewardsMemberRates.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/signIn.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/articleContentText.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/marketingTiles.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/viewAllOffer.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/adaptiveDestinationCarousel.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/logosPortfolio.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/linksBlock.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/transactionalFooterLinks.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/articleLinksGroup.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/hdVars.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/messageResource.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/sessionTimeOut.css')}}">
    <link rel="stylesheet" class="component-tag" type="text/css" href="{{asset($extra.'/css/atecahotels.css')}}?rand={{ rand() }}">

    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-carousel.js')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-slider.js')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-accordion.js')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-picturefill.js')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-header.js')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" src="{{asset($extra.'/js/mi-lazy-load-images.js')}}"></script>
    <script src="{{asset($extra.'/js/AppMeasurement_Module_AudienceManagement.min.js')}}" async=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/btt.js')}}" async=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr.js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(1).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(2).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(3).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(4).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(5).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" src="{{asset($extra.'/js/monetate.c.cr(6).js')}}" charset="utf-8" defer=""></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset($extra.'/js/common.js')}}" nonce="a8Lyk5GwYEondoKHpfoimBhl"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset($extra.'/js/util.js')}}" nonce="a8Lyk5GwYEondoKHpfoimBhl"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset($extra.'/js/geocoder.js')}}" nonce="a8Lyk5GwYEondoKHpfoimBhl"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset($extra.'/js/map.js')}}" nonce="a8Lyk5GwYEondoKHpfoimBhl"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset($extra.'/js/onion.js')}}" nonce="a8Lyk5GwYEondoKHpfoimBhl"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


 </head>
