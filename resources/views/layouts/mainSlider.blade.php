<div class="mi-sub-section l-pos-relative bleed-sub-section l-margin-tile-vertical-default l-padding-tile-vertical-default l-margin-subsection-bottom-none l-padding-subsection-vertical-none">
    <div id="HeroImageITOafcd">

        {{--  <section class="tile-hero-image-ito" data-component-id="HeroImageITO_01_afcd" data-component-name="heroImageITO" data-component-endpoint="/aries-content/v1/heroImageITO.comp">
            <picture data-param-large="downsize=2880px:*" data-param-desktop="downsize=1200px:*" data-param-tablet="downsize=1200px:*" data-param-mobile="downsize=750px:*">

                <img src="/img/slider/1.jpg" alt="">
            </picture>
            <div class="l-hero-container">
                <div class="l-hero-text l-hero-ito l-m-container-fullbleed t-ito-light t-ito-left">
                    <h1 class="t-ito-text t-uppercase t-extend-h1-em ">  <span class="t-ito-copy">About ATECA Hotels</span> </h1>
                    <div> <a class="m-button t-uppercase t-ito-cta" href="#">Learn more <span class=""></span>  </a> </div>
                </div>
            </div>
        </section>  --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            {{--  <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>  --}}
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/img/slider/1.jpg')}}?rand={{rand()}}" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/img/slider/2.jpg')}}?rand={{rand()}}" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/img/slider/3.jpg')}}?rand={{rand()}}" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/img/slider/4.jpg')}}?rand={{rand()}}" alt="" class="img-fluid">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    {{--
    <div class="l-pos-absolute l-width-max l-pos-top l-pos-">
        <div id="ClickToAction992b">
            <script type="text/mi-context" name="ClickToAction992b" defer="defer">
                { "contents": [ {"types":["ADT_LINK"],"maxNumRecords":"10","navigation":"false","hotelSpecific":"[object Object]","featuredRecords":["e783a0825d414610VgnVCM100000307882a2RCRD"]} ], "textColor": "" }

            </script>

        </div>
    </div> --}}
</div>
