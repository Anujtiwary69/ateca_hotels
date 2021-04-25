<div id="stickySummary" class="sticky-sub-section">
    <div
        class="mi-sub-section bleed-sub-section l-margin-subsection-bottom-none l-margin-tile-vertical-default l-padding-subsection-vertical-none">
        <div id="HwsSiteMapc666">

            <div class="tile-hws-site-maps l-print-hide" data-component-id="HwsSiteMap_01_c666"
                 data-component-name="hwsSiteMap"
                 data-component-endpoint="/aries-hotelinfo/v1/hwsSiteMap.comp">
                <nav class="mi-scroll-nav m-scroll-nav l-width-max">
                    <button class="m-button l-display-block l-width-max l-button-drawer js-drawer-toggle"
                            type="button" aria-expanded="false"><span>Hotel Menu</span> <span
                            class="t-icon-arrow-down t-font-xs"></span></button>
                    <div class="l-drawer-container js-drawer-container l-width-max" aria-hidden="false">
                        <div class="l-navbar-container l-width-max js-navbar-container">
                            @php $array_menu =  array('Overview'=>'#','Rooms'=>'#','Dining'=>'#','Wellness & Spa'=>"pages-other?page=1",'Meetings'=>"/pages-other?page=2",'Photos'=>'#','Local Area'=>'#','Offers'=>'#','Contact Us'=>'#') @endphp
                            <ul class="l-navbar-content js-navbar-content" role="menubar">
                                @php $i = 0 @endphp
                                @foreach(array_keys($array_menu) as $key)

                                    @php $i++ @endphp
                                    <li role="none"
                                        class="l-nav-item @if($key=="Overview")  is-active @endif js-nav-item has-dropdown is-visible"  id="{{$key}}">
                                        <a class="l-nav-link t-item-outline-offset js-nav-link-toggle l-display-flex"
                                           role="menuitem" aria-haspopup="false" aria-expanded="false"
                                           id="dropdown-menu-button-{{$i}}" href="{{$array_menu[$key]}}" tabindex="-1"> <span
                                                class="l-flex-grow">{{$key}}</span> </a>

                                @endforeach
                            </ul>
                            <button type="button"
                                    class="m-button l-button-drawer l-button-close js-drawer-toggle"
                                    aria-label="Close" aria-expanded="false"><span
                                    class="t-icon-plus"></span></button>
                        </div>
                        <button type="button"
                                class="l-overflow-scroll-button l-scroll-forward js-scroll-forward is-hidden"
                                aria-label="Right Arrow" tabindex="-1"><span
                                class="t-icon-arrow-right"></span></button>
                        <button type="button"
                                class="l-overflow-scroll-button l-scroll-back js-scroll-back is-hidden"
                                aria-label="Left Arrow" tabindex="-1"><span
                                class="t-icon-arrow-left"></span></button>
                        <div class="l-sub-drawer-container js-sub-drawer-container">
                            <div class="l-sub-drawer-header"><span class="t-drawer-header"> <button
                                        class="m-button js-drawer-back-btn l-drawer-back-btn t-cursor-pointer"> <span
                                            class="t-icon-arrow-left t-font-xs t-font-weight-bold"></span> <span
                                            class="t-font-ml t-font-weight-bold l-margin-left-half">Back</span> </button> </span>
                                <button type="button"
                                        class="m-button l-button-drawer l-button-close js-drawer-toggle"
                                        aria-label="Close" aria-expanded="false"><span
                                        class="t-icon-plus"></span></button>
                            </div>
                            <div class="l-sub-drawer-body l-padding-five-quarters">
                                <h2 class="js-sub-drawer-title l-sub-drawer-title t-font-l t-font-weight-bold t-extend-h3">
                                    Overview </h2>
                                <div class="js-sub-drawer-content"></div>
                            </div>
                        </div>
                    </div>
                    <div class="l-dropdown-container js-dropdown-container">
                        <div class="l-dropdown-container js-dropdown-container">
                            <div class="l-dropdown-content js-dropdown-content ">
                                <ul class="l-dropdown-menu" aria-labelledby="dropdown-menu-button-2"
                                    role="menu" id="room-submenus">
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('room.overview')}}">Rooms
                                            Overview</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="#">&nbsp;</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="#">&nbsp;</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="#">&nbsp;</a></li>

                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('room-details')}}?room=1">Standard King Rooms</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('room-details')}}?room=2">Standard Twin
                                            Rooms</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('room-details')}}?room=3">Executive Suites</a>
                                    </li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('room-details')}}?room=4">Superior Connected Rooms</a></li>

                                </ul>
                                <ul class="l-dropdown-menu" aria-labelledby="dropdown-menu-button-2"
                                    role="menu" id="dining-submenus">
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('dining.overview')}}">Dining Overview</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('dining.details')}}?dine=1">&nbsp;Fringale Restaurant & Bar</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('dining.details')}}?dine=2">&nbsp;Rendezvous Bar & Tea Lounge</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('dining.details')}}?dine=3">KTV – Karaoke Bar</a></li>
                                    <li role="none" class="l-dropdown-menu-item"><a
                                            class="l-nav-link js-sub-nav-link" tabindex="-1" role="menuitem"
                                            href="{{route('dining.details')}}?dine=4">Gourmandise – Deli Corner</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="l-scroll-nav-mask js-scroll-nav-mask"></div>
                    <div class="l-drawer-mask js-drawer-mask"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
