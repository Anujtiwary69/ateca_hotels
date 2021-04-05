<section class="mi-sub-section sub-section t-bg-standard-20 l-margin-subsection-bottom-large l-margin-tile-vertical-default l-padding-tile-vertical-default l-padding-subsection-vertical-none mb-4">
    <div class="l-print-fullbleed l-container">
       <div class=" l-s-col-4 l-m-col-8 l-s-col-last l-m-col-last l-l-col-12 l-xl-col-12 l-l-col-last l-xl-col-last">
          <div id="SearchFormHorizontal_v13589">
                       <div class="tile-hsearch-homepage m-homepage-hsearch l-hsearch-2 l-hsearch-takeover l-hsearch-cntnr l-hsearch-bottom    animate-search-form" >
                <div class="clearfix homepage-search-form l-form-container l-clear" style="height: auto;">
                   <a name="search-content"></a>
                   <form action="/coming-soon" id="find-a-hotel-homePage-form" novalidate="novalidate" method="get" autocomplete="off" class="l-em-reset mi-special-rates-drawer has-flexdate validate-search-form  js-location-nearme mi-placeholder ">
                      <input type="hidden" name="roomTypeCode" value="">  <input type="hidden" value="Guests/room" class="single-search-guest-count-label">  <input type="hidden" name="recordsPerPage" value="20">  <input type="hidden" name="autoSuggestItemType" value="" class="autosuggest-item-type js-autosuggest-item-type">
                      <div class="is-hidden l-takeover-head l-datepicker-open">
                         <h2>Where do you want to go?</h2>
                         <button type="button" aria-label="Close" class="mfp-close js-form-close l-hsearch-close"></button>
                      </div>
                      <div class="l-form-group m-field-wrap l-hsearch-labels clearfix">

                         <div class="m-field-control l-margin-bottom-three-quarters l-datepicker-open l-xl-col-4 l-pos-relative js-clearinput l-hsearch-loc l-clear clearfix js-location js-auto-complete">
                            <label class="field-title ">  @lang('home.Destination') </label>
                            <div class="l-display-flex">    <span class="animate-placeholder-text " style="display: flex; opacity: 1;">Try "Uz"</span>  <input id="KG07LJVC_search-location" autocomplete="off" type="text" name="destinationAddress.destination" value="" placeholder="" aria-label="City, airport, attraction or address" maxlength="100" class="js-geoloc-target single-search single-search-destination js-recent-search js-search-location js-moreoptions-expander js-clear-input l-no-ie-clear l-h-field js-hform-fields  js-auto-complete-input-v2" >  <span class="l-icon-inline t-icon t-icon-navigation-close js-clear-trigger" title="Clear"></span> </div>
                            <div class="autocomplete-scroller-wrapper custom-wrapper" style="display: none;">
                               <ul class="autocomplete-list" style="z-index: 999; top: 0px; left: 0px; display: none;"></ul>
                            </div>
                            <div aria-live="assertive" class="is-hidden-label"></div>
                         </div>
                         <div class="l-find-container js-find-container l-xl-col-4 l-pos-rel ">
                            <span class="icon t-icon l-float-left t-icon-search t-color-standard-110 l-pos-absolute"></span>  <span class="animate-placeholder-text " style="display: flex; opacity: 1;">Try "JFK"</span>
                            <div class="l-h-field">      </div>
                         </div>

                         <div class="date-picker-overlay"></div>
                         <div class="m-field-control m-date-picker l-date-picker l-margin-bottom-three-quarters l-pos-relative l-xs-col-4 l-xl-col-4   " data-trigger="false" data-is-non-dated-search="false" data-associate-flow="">
                            <span class="field-title ">  Dates </span> <span class="nights-count">1 @lang('home.NIGHT')</span>
                            <div class="js-datepick-container l-datepick-container l-pos-rel is-flex-hidden t-singlefield " data-check-in-label="Check-in" data-check-out-label="Check-out" data-country-code="US" data-takeover-label="@lang('home.Dates')">
                               <div class="js-toggle-picker l-toggle-picker js-moreoptions-expander-click l-display-block l-h-field l-padding-left-half t-no-decor t-blk">
                                  <label for="KG07LJVC_hotel-fromToDate" class="is-hidden">From To Date</label> <input data-invalidmsg="Invalid date(s). Check your entry and try again." size="15" name="fromToDate" type="text" id="KG07LJVC_hotel-fromToDate" maxlength="20" data-min="04/03/2020" data-max="03/20/2021" value="" data-value="" class="js-date-from-to is-hidden" autocomplete="off"> <input type="hidden" name="fromToDate_submit" value="04/05/2020" class="fromToDate_submit"> <input type="hidden" name="fromDate" data-value="" value="04/04/2020" class="js-submit-from">  <input type="hidden" name="toDate" value="04/05/2020" class="js-submit-to"> <input type="hidden" name="toDateDefaultFormat" value="04/05/2020" class="js-to-calc"> <input type="hidden" name="fromDateDefaultFormat" value="04/04/2020" class="js-from-calc"> <input type="hidden" name="flexibleDateSearch" value="false" class="flex-date-search-input">
                                  <fieldset>
                                     <legend> <label for="KG07LJVC_flexible-date-search" class="is-hidden">Flexible Date Search</label> </legend>
                                     <input type="checkbox" name="flexibleDateSearch" value="false" id="KG07LJVC_flexible-date-search" class="js-flex-check is-hidden">
                                  </fieldset>
                                  <div class="ccheckin-container date-picker-container" aria-live="polite"> <span class="prev-checkin t-icon-arrow-new-left focus-elem" tabindex="-1" style="visibility: visible;"></span> <input class="ccheckin l-h-field-input l-no-outline " size="15" type="text" placeholder="@lang('home.Check-in')" value="" id="KG07LJVC_hotel-fromDate" maxlength="17" autocomplete="off" data-show-k-group-date="false" data-k-group-date="03/19/2022" data-min-value="04/03/2020" data-max-value="03/20/2021" data-target="stayDates"> <span class="next-checkin t-icon-arrow-right focus-elem" tabindex="-1" style="visibility: visible;"></span> </div>
                                  <label for="KG07LJVC_hotel-fromDate" class="l-date is-hidden-label">Check-in</label> <span class="l-date l-date-format is-hidden-label">MM/dd/yy</span> <span class="l-date-part"></span>
                                  <div class="l-flex l-flex-display js-flex-display focus-elem" data-label="Flexible in">Flexible in April 2020 - 1 Night Stay</div>
                                  <div class="ccheckout-container date-picker-container" aria-live="polite"> <span class="prev-checkout t-icon-arrow-new-left focus-elem disable-button" tabindex="-1" style="visibility: visible;"></span> <input class="ccheckout js-flex-out l-h-field-input l-no-outline " size="15" type="text" placeholder="Check-out" value="" id="KG07LJVC_hotel-toDate" maxlength="17" autocomplete="off" data-max-value="03/20/2021"> <span class="next-checkout t-icon-arrow-right focus-elem" tabindex="-1" style="visibility: visible;"></span> </div>
                                  <label for="KG07LJVC_hotel-toDate" class="l-date is-hidden-label">Check-out</label> <span class="l-date is-hidden-label">MM/dd/yy</span> <span class="l-toggle-active"></span>
                               </div>
                               <div class="js-date-pick-container" data-options="{&quot;flexdates&quot;:&quot;Flexible Dates&quot;, &quot;specificdates&quot;:&quot;Specific Dates&quot;, &quot;flexibleInMonthTitleInitial&quot;:&quot;Month of&quot;, &quot;flexibleSelected&quot;:&quot;false&quot;, &quot;flexibleNight&quot;:&quot;1&quot;, &quot;monthFullList&quot;:&quot;January,February,March,April,May,June,July,August,September,October,November,December&quot;, &quot;monthShortList&quot;:&quot;Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec&quot;, &quot;weekdayFullList&quot;:&quot;Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday&quot;, &quot;weekdayShortList&quot;:&quot;Sun,Mon,Tue,Wed,Thu,Fri,Sat&quot;, &quot;nightLabel&quot;:&quot;Night&quot;, &quot;nightsLabel&quot;:&quot;Nights&quot;, &quot;doneLabel&quot;:&quot;Done&quot;, &quot;stayLabel&quot;:&quot;Stay&quot;, &quot;clearText&quot;:&quot;Clear Dates&quot;, &quot;resetText&quot;:&quot;Reset Fields&quot;, &quot;isDestPage&quot;:&quot;&quot;, &quot;showRedEye&quot;:&quot;&quot;, &quot;redEyeValue&quot;:&quot;&quot;, &quot;showKGroupDate&quot;: &quot;false&quot;, &quot;kGroupDate&quot;: &quot;03/19/2022&quot;, &quot;nextMonthLabel&quot;: &quot;Next Month&quot;, &quot;prevMonthLabel&quot;: &quot;Previous Month&quot;, &quot;ofLabel&quot;: &quot;of&quot;, &quot;nightsLowerLabel&quot;: &quot;&quot;, &quot;nightLowerLabel&quot;: &quot;&quot;, &quot;yearLabel&quot;: &quot;Year&quot; }">
                                  <div class="new-container tabbing">
                                     <div class="tab"> <span class="tab1 tabs selected focus-elem" role="button" data-tab-value="Specific Dates" aria-label="selected Specific Dates" data-container="tab-container1">Specific Dates</span> <span class="tab2 tabs focus-elem " role="button" data-tab-value="Flexible Dates" data-container="tab-container2">Flexible Dates</span> </div>
                                     <div class="tab-container tab-container1">
                                        <div class="t-datepicker t-datepicker1585980774844">
                                           <div class="t-check-in">
                                              <div class="t-dates t-date-check-in">➜<label for="check-in" class="t-date-info-title"><i class="is-screenreader-only" aria-hidden="true">check-in</i></label><span class="t-day-check-in"> 04</span><span class="t-month-check-in"> Apr </span><span class="t-year-check-in"> 2020</span></div>
                                              <input id="check-in" type="hidden" class="t-input-check-in" value="2020-04-04" name="t-start">
                                           </div>
                                           <div class="t-check-out">
                                              <div class="t-dates t-date-check-out">➜<label for="check-out" class="t-date-info-title"><i class="is-screenreader-only" aria-hidden="true">check-out</i></label><span class="t-day-check-out"> 05</span><span class="t-month-check-out"> Apr </span><span class="t-year-check-out"> 2020</span></div>
                                              <input id="check-out" type="hidden" class="t-input-check-out" value="2020-04-05" name="t-end">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="tab-container tab-container2">
                                        <div class="scroll-wrapper m-flex-frame-wrapper scrollbar-outer" style="position: relative;">
                                           <div class="m-flex-frame-wrapper scrollbar-outer scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                              <div class="m-flex-frame">
                                                 <div class="l-s2-stepper" aria-live="polite">
                                                    <span class="t-font-bold l-em-reset l-padding-top how-many-nights-label">How many nights?</span>  <a href="/" class="js-flex-stepper l-minus js-minus t-icon-minus focus-elem" aria-label="Remove Nights"><span class="date-labelledby is-screenreader-only">Remove Nights</span></a>
                                                    <div id="KG07LJVC_length-of-stay-input" class="js-stepper-input l-no-ie-clear" maxlength="1">1</div>
                                                    <span class="js-stepper-val l-s2-stepper-val">1</span> <a href="/" class="js-flex-stepper l-plus js-plus t-icon-plus focus-elem" aria-label="Add Nights"><span class="date-labelledby is-screenreader-only">Add Nights</span></a>
                                                    <div class="is-hidden">How many nights?</div>
                                                    <label for="KG07LJVC_length-of-stay" class="is-hidden-label">lengthOfStay</label>
                                                    <select name="lengthOfStay" id="KG07LJVC_length-of-stay" class="js-flex-input is-hidden">
                                                       <option value="1">1</option>
                                                       <option value="2">2</option>
                                                       <option value="3">3</option>
                                                       <option value="4">4</option>
                                                       <option value="5">5</option>
                                                       <option value="6">6</option>
                                                       <option value="7">7</option>
                                                       <option value="8">8</option>
                                                       <option value="9">9</option>
                                                    </select>
                                                 </div>
                                                 <div class="l-flex-months">
                                                    <div class="l-flex-months-holder js-flex-months-holder"><a href="/" data-month="3" data-year="2020" title="selected Month of April 2020" data-month-value="Month of April 2020" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem is-selected" aria-selected="true">April</a><a href="/" data-month="4" data-year="2020" title="Month of May" data-month-value="Month of May" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">May</a><a href="/" data-month="5" data-year="2020" title="Month of June" data-month-value="Month of June" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">June</a><a href="/" data-month="6" data-year="2020" title="Month of July" data-month-value="Month of July" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">July</a><a href="/" data-month="7" data-year="2020" title="Month of August" data-month-value="Month of August" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">August</a><a href="/" data-month="8" data-year="2020" title="Month of September" data-month-value="Month of September" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">September</a><a href="/" data-month="9" data-year="2020" title="Month of October" data-month-value="Month of October" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">October</a><a href="/" data-month="10" data-year="2020" title="Month of November" data-month-value="Month of November" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">November</a><a href="/" data-month="11" data-year="2020" title="Month of December" data-month-value="Month of December" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">December</a><a href="/" data-month="0" data-year="2021" title="Month of January 2021" data-month-value="Month of January 2021" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">January</a><a href="/" data-month="1" data-year="2021" title="Month of February" data-month-value="Month of February" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">February</a><a href="/" data-month="2" data-year="2021" title="Month of March" data-month-value="Month of March" class="js-flex-month l-s2-option t-blk t-no-decor focus-elem">March</a></div>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="scroll-element scroll-x">
                                              <div class="scroll-element_outer">
                                                 <div class="scroll-element_size"></div>
                                                 <div class="scroll-element_track"></div>
                                                 <div class="scroll-bar"></div>
                                              </div>
                                           </div>
                                           <div class="scroll-element scroll-y">
                                              <div class="scroll-element_outer">
                                                 <div class="scroll-element_size"></div>
                                                 <div class="scroll-element_track"></div>
                                                 <div class="scroll-bar"></div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="flexible-button-container">
                                           <div class="flex-reset-button focus-elem">Reset Fields</div>
                                           <div class="flex-done-button m-button m-button-primary focus-elem">Done</div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="l-done-container"> <button class="js-done-date l-done-date m-button m-button-primary"> Done <span class="mobile-night-container" style="display: inline;"> (<span class="nights-count nights-count-mobile">1 NIGHT</span>)</span> </button> </div>
                               </div>
                            </div>
                         </div>
                         <div class="t-more-search-options l-xs-col-4 l-xl-col-12 is-hidden l-datepicker-open">
                            <div class="m-field-control l-rooms-guests js-rooms-guests js-hform-fields l-em-reset l-s-col-4 l-xl-col-4  l-margin-bottom-three-quarters  ">
                               <span class="field-title">Rooms &amp; Guests</span>
                               <a href="/" aria-controls="rooms-guests-panel" aria-label="Rooms &amp; Guests" class="l-display-block l-rooms-guests-trigger-box js-rooms-guests-trigger l-h-field analytics-click l-pos-rel" data-options="{&quot;room&quot;:&quot;Room&quot;, &quot;rooms&quot;:&quot;Rooms&quot;, &quot;adult&quot;:&quot;Adult&quot;, &quot;adults&quot;:&quot;Adults&quot;,&quot;child&quot;:&quot;Child&quot;, &quot;children&quot;:&quot;Children&quot;, &quot;perroom&quot;:&quot;/Room&quot;, &quot;perroomMobile&quot;:&quot;/Rm&quot;,&quot;perroomfull&quot;:&quot;Per Room&quot;,&quot;age&quot;:&quot;Age&quot;, &quot;lessthan&quot;:&quot;less than 1&quot;, &quot;defaultAge&quot;:&quot;Age&quot;, &quot;forfirstroom&quot;:&quot;(for first room only)&quot;, &quot;maxAgeLimit&quot;:&quot;Max age 17&quot;}" data-target="roomsAndGuests">
                                  <p class="l-display-text">  <span class="js-number-of-rooms">1</span><span class="js-rooms-text"> Room</span><span class="js-adlt">: </span><span class="js-number-of-adults js-adlt">1</span><span class="js-adults-text js-adlt"> Adult</span><span class="js-chld is-hidden">, </span><span class="js-adults-perroom js-adlt"><span>/Room</span></span> <span class="js-chld js-number-of-children is-hidden">0</span><span class="js-chld js-children-text is-hidden"> Children<span>/Room</span></span> </p>
                                  <!-- <span class="l-close-icon icon m-dropdown-trigger"></span> --> <span class="l-float-right t-icon t-icon-arrow-down l-middle-valign t-font-xs m-icon-trigger"></span>
                               </a>
                               <div data-takeover-label="Rooms &amp; Guests" class="l-rooms-guests-panel js-rooms-guests-panel  l-pos-rel is-hidden" aria-expanded="false">
                                  <div class="rooms-guest-wrapper">
                                     <div class=" clearfix">
                                        <div class="l-rooms js-rooms">
                                           <div class="labelContainer field-title">Rooms</div>
                                           <div class="clearfix l-s2-stepper">
                                              <label for="KG07LJVC_roomCountBox" class="is-hidden-label">Room Count</label> <input type="text" id="KG07LJVC_roomCountBox" name="roomCountBox" class="l-s2-stepper-input js-rooms-num t-color-standard-10" value="1Room">  <a href="/" class="l-minus js-minus t-icon-minus analytics-click is-inactive" aria-label="Remove Rooms"></a> <a href="/" class="l-plus js-plus t-icon-plus analytics-click" aria-label="Add Rooms"></a> <label for="KG07LJVC_roomCount" class="is-hidden-label">Room Count</label>
                                              <select name="roomCount" id="KG07LJVC_roomCount" class="is-hidden roomCount js-room-count">
                                                 <option value="1" selected="selected">1 Room</option>
                                                 <option value="2">2 Rooms</option>
                                                 <option value="3">3 Rooms</option>
                                                 <option value="4">4-9 Rooms</option>
                                                 <option value="10">10-25 Rooms</option>
                                                 <option value="26">26+ Rooms</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="js-all-guests">
                                           <div class="l-adults js-adults js-guests">
                                              <div class="labelContainer field-title">Adults<span class="l-guests-error-msg"> (Maximum: 8 total guests/room)</span></div>
                                              <div class="clearfix l-s2-stepper">
                                                 <label for="KG07LJVC_guestCountBox" class="is-hidden-label">Guest Count</label> <input type="text" id="KG07LJVC_guestCountBox" name="guestCountBox" class="l-s2-stepper-input js-adults-num " value="1 Adult Per Room" data-min="1" data-max="8"> <a href="/" class="l-minus js-minus t-icon-minus analytics-click is-inactive" aria-label="Remove Adults Per Room"></a> <a href="/" class="l-plus js-plus t-icon-plus analytics-click" aria-label="Add Adults Per Room"></a> <label for="KG07LJVC_guestCount" class="is-hidden-label">Guest Count</label>
                                                 <select name="numAdultsPerRoom" id="KG07LJVC_guestCount" class="is-hidden guestCount">
                                                    <option value="1" selected="selected">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                 </select>
                                              </div>
                                           </div>
                                           <div class="l-children js-children js-guests">
                                              <div class="labelContainer field-title">Children<span class="l-guests-error-msg"> (Maximum: 8 total guests/room)</span></div>
                                              <div class="clearfix l-s2-stepper">
                                                 <label for="KG07LJVC_childrenCountBox" class="is-hidden-label">Children Count</label> <input type="text" id="KG07LJVC_childrenCountBox" name="childrenCountBox" class="l-s2-stepper-input js-children-num " value="0 Children Per Room" data-min="0" data-max="7"> <a href="/" class="l-minus js-minus t-icon-minus is-inactive" aria-label="Remove Children Per Room"></a> <a href="/" class="l-plus js-plus t-icon-plus" aria-label="Add Children Per Room"></a> <label for="KG07LJVC_childrenCount" class="is-hidden-label">Children Count</label>
                                                 <select name="childrenCount" id="KG07LJVC_childrenCount" class="childrenCount is-hidden">
                                                    <option value="0" selected="selected">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                 </select>
                                              </div>
                                           </div>
                                           <p class="l-age-based js-age-based is-hidden">(Age-based rates may be available)</p>
                                           <input type="hidden" name="childrenAges" class="js-children-ages" value="">
                                           <div id="KG07LJVC_l-ages-append" class="js-ages-append l-padding-bottom"></div>
                                           <div id="KG07LJVC_l-age-template" class="js-age-template is-hidden ">
                                              <div class="l-child-info field-title"><span class="l-childnum-title">Child 1 : Age </span><span class="l-first-room-text"> (Required)</span></div>
                                              <div class="clearfix l-s2-stepper">
                                                 <label for="KG07LJVC_childAgesBox" class="is-hidden-label">Children Count</label> <input type="text" id="KG07LJVC_childAgesBox" class="l-s2-stepper-input js-ages-num " value="Age" data-default="Age" data-lessthan="less than 1" data-min="1" data-max="17"> <a href="/" class="l-minus js-minus t-icon-minus is-inactive analytics-click" aria-label="Down Age"></a> <a href="/" class="l-plus js-plus t-icon-plus analytics-click" aria-label="Up Age"></a> <label for="KG07LJVC_childrenAgesNum" class="is-hidden-label">Children Count</label>

                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="l-margin-top-none l-rooms-guests-footer clearfix l-clear t-bg-standard-20 t-border-standard-120">
                                     <div class="rooms-guests-done js-done l-float-left is-hidden"><a class="m-button m-button-secondary" href="/">Done</a></div>
                                     <div class="rooms-guests-clear js-reset l-margin-top"><a href="/" class="t-control-link t-line-height-l">Reset Fields</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="m-field-control l-special-rates l-em-reset l-s-col-4 l-xl-col-4 js-hform-fields l-margin-bottom-three-quarters">
                               <span class="field-title">Special Rates</span> <a href="/" class="js-toggle t-blk js-special-rates-header l-h-toggle l-h-field analytics-click" aria-label="Special Rates"><span data-defaultheader="None" data-value="None" class="l-h-toggle-text">None</span> <span class="l-float-right t-icon t-icon-arrow-down l-middle-valign t-font-xs m-icon-trigger"></span> </a>
                               <div data-takeover-label="Special Rates" class="l-h-toggle-cont special-rates-section js-toggle-container is-hidden" style="">
                                  <div class="">
                                     <ul>
                                        <li class="l-h-toggle-opt is-checked">
                                           <a href="/" class="js-h-toggle l-s2-option t-no-decor">
                                              <fieldset>
                                                 <input type="radio" name="clusterCode" value="none" id="KG07LJVC_none" class="search-clusterCode-none radio" checked="checked">
                                                 <legend> <label for="KG07LJVC_none" class="cluster-code-label">None</label> <span class="t-icon t-icon-check is-hidden"></span> </legend>
                                              </fieldset>
                                           </a>
                                        </li>
                                        <li class="l-h-toggle-opt">
                                           <a href="/" class="js-h-toggle l-s2-option t-no-decor">
                                              <fieldset>
                                                 <input type="radio" name="clusterCode" value="corp" id="KG07LJVC_corp" class="search-clusterCode-corp radio" aria-label="Corporate / Promo / SET#">
                                                 <legend> <label for="KG07LJVC_corp" class="cluster-code-label">Corporate / Promo / SET#</label> <span class="t-icon t-icon-check is-hidden"></span> </legend>
                                              </fieldset>
                                           </a>
                                        </li>
                                        <li class="l-h-toggle-opt">
                                           <a href="/" class="js-h-toggle l-s2-option t-no-decor">
                                              <fieldset>
                                                 <input type="radio" name="clusterCode" value="aaa" id="KG07LJVC_aaa" class="search-clusterCode-aaa radio" aria-label="AAA / CAA">
                                                 <legend> <label for="KG07LJVC_aaa" class="cluster-code-label">AAA / CAA</label> <span class="t-icon t-icon-check is-hidden"></span> </legend>
                                              </fieldset>
                                           </a>
                                        </li>
                                        <li class="l-h-toggle-opt">
                                           <a href="/" class="js-h-toggle l-s2-option t-no-decor">
                                              <fieldset>
                                                 <input type="radio" name="clusterCode" value="S9R" id="KG07LJVC_S9R" class="search-clusterCode-S9R radio" aria-label="Senior Discount">
                                                 <legend> <label for="KG07LJVC_S9R" class="cluster-code-label">Senior Discount</label> <span class="t-icon t-icon-check is-hidden"></span> </legend>
                                              </fieldset>
                                           </a>
                                        </li>
                                        <li class="l-h-toggle-opt">
                                           <a href="/" class="js-h-toggle l-s2-option t-no-decor">
                                              <fieldset>
                                                 <input type="radio" name="clusterCode" value="gov" id="KG07LJVC_gov" class="search-clusterCode-gov radio" aria-label="Government &amp; Military">
                                                 <legend> <label for="KG07LJVC_gov" class="cluster-code-label">Government &amp; Military</label> <span class="t-icon t-icon-check is-hidden"></span> </legend>
                                              </fieldset>
                                           </a>
                                        </li>
                                     </ul>
                                     <div class="code-container">
                                        <div class="special-rate-code corp-code is-hidden">
                                           <p>Enter Code</p>
                                           <label for="KG07LJVC_corporateCode" class="is-hidden-label">corporateCode</label> <input type="text" data-special-rate-type="corp" name="corporateCode" id="KG07LJVC_corporateCode" class="search-corp short radio-secondary-input" value="" maxlength="9">
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="m-field-control l-s-col-4 l-s-last-col l-xl-col-4 l-xl-last-col l-use-rewards-points usePoints has-inline-labels js-hform-fields use-rewards-custom">
                               <div class="l-userewards-checkbox " id="rewards-use-search">
                                  <fieldset class="t-border-none l-margin-none l-padding-none">
                                     <legend class="is-hidden" aria-hidden="true">useRewardsPoints</legend>
                                     <input type="checkbox" name="useRewardsPoints" id="KG07LJVC_useRewardsPoints" value="true" class="l-h-toggle-checkbox js-h-toggle-checkbox js-userewards-checkbox search-useRewardsPoint checkbox js-horizontal-form-checkbox"> <label for="KG07LJVC_useRewardsPoints" class="l-userewards-checkmark js-use-rewards">sadd</label>
                                  </fieldset>
                               </div>
                            </div>
                            <div class="m-field-control l-xs-col-4 l-mml-col-9-split l-mml-last-col-split l-xl-col-4 l-xl-last-col l-hsearch-find l-find-bottom js-hform-fields"><a href="/coming-soon"> <button title="" data-analytics="{&#39;location&#39;:&#39;searchForm&#39;}" class="analytics-click js-is-roomkey-enabled m-button m-button-primary" type="submit"> @lang('home.Find Hotels') </button> </a></div>
                            <div class="explorer-link-desktop-only">     </div>
                         </div>
                         <div class="l-xs-col-4 l-xl-col-4 l-xl-last-col l-hsearch-find l-find-top js-hform-fields l-hsearch-find-homepage"><a href="/coming-soon"> <button title="" data-analytics="{&#39;location&#39;:&#39;searchForm&#39;}" class="analytics-click js-is-roomkey-enabled m-button m-button-primary" type="submit"> @lang('home.Find Hotels') </button> </a></div>
                      </div>
                   </form>
                </div>
                <div class="explorer-link-device-only">     </div>

             </div>
          </div>
       </div>
    </div>
 </section>
