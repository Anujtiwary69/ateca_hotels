<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}" xml:lang="{{ App::getLocale() }}" class="webkit chrome chrome80 mac mac10 mac10_15 js non-retina orientation_landscape maxw_1920">
<script async="" src="/js/branch-latest.min.js">
</script>
@include('layouts.head')
<body class="t-bg-extralightgrey" data-hide-print="" data-gr-c-s-loaded="true" cz-shortcut-listen="true" style="overflow-y: visible;">
    <div id="monetate_lightbox" style=" height: 0; left: 0; position: absolute; top: 0; width: 100%; z-index: 2147483645; ">
        <div id="monetate_lightbox_mask" style="background-color: rgb(28, 28, 28); height: calc(100% + 5000px); left: 0px; margin: 0px; padding: 0px; position: fixed; top: 0px; width: 100%; opacity: 0; display: none;"></div>
        <div id="monetate_lightbox_content_container" role="dialog" aria-modal="true" style="height: 306px; left: 0px; margin: 0px auto; position: relative; right: 0px; top: 162px; width: 363px; opacity: 0; display: none;">

        </div>
    </div>
    <a name="topOfPage"></a>
    <div id="page-container" class="page-container">
        @include('layouts.header')
        <div class="id-content-wrapper" id="main-body-wrapper">
            <div class="l-row">
               @yield('content')

               @include('layouts.footer')
            </div>


            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#printOutPage').click(function(){
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
               $(window).scroll(function() {

    scroll = $(window).scrollTop();

  if (scroll > 400) {
      $(".m-header").addClass("sticky-header");
    } else {
      $(".m-header").removeClass("sticky-headerr");
    }

	  if (scroll > 620) {
      $(".bookingform_newSection").removeClass('hide');

      $('.tile-hsearch-homepage').css('margin-top','1%')
    } else {
      $(".bookingform_newSection").addClass('hide');
    }
});
        </script>

</body>

</html>
