<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

//$this->registerCssFile('')
?>

<!-- slider code here -->

<div id="slideshow">
    
    <iframe id="slider-Iframe" src="https://ourcheaptickets.com/site/slider" frameborder="0" style="width: 100%;"  onload="resizeIframe(this)"></iframe>

</div>

<!-- Slider code end -->

<section id="content">
    <div class="search-box-wrapper">
        <div class="search-box container">
            <ul class="search-tabs clearfix">
                <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                <li><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                <li><a href="#flight-and-hotel-tab" data-toggle="tab">FLIGHT &amp; HOTELS</a></li>
                <li><a href="#cars-tab" data-toggle="tab">CARS</a></li>
                <li><a href="#cruises-tab" data-toggle="tab">CRUISES</a></li>
                <li><a href="#flight-status-tab" data-toggle="tab">FLIGHT STATUS</a></li>
                <li><a href="#online-checkin-tab" data-toggle="tab">ONLINE CHECK IN</a></li>
            </ul>
            <div class="visible-mobile">
                <ul id="mobile-search-tabs" class="search-tabs clearfix">
                    <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                    <li><a href="#flights-tab">FLIGHTS</a></li>
                    <li><a href="#flight-and-hotel-tab">FLIGHT &amp; HOTELS</a></li>
                    <li><a href="#cars-tab">CARS</a></li>
                    <li><a href="#cruises-tab">CRUISES</a></li>
                    <li><a href="#flight-status-tab">FLIGHT STATUS</a></li>
                    <li><a href="#online-checkin-tab">ONLINE CHECK IN</a></li>
                </ul>
            </div>

            <div class="search-tab-content">
                <div class="tab-pane fade active in" id="hotels-tab">
                    <!-- <script charset="utf-8" src="//www.travelpayouts.com/widgets/c3d1fe8d4ad9ac43e628ea07e0614ab1.js?v=1581" async></script> -->
                    <script charset="utf-8" type="text/javascript">
                        window.TP_FORM_SETTINGS = window.TP_FORM_SETTINGS || {};
                        window.TP_FORM_SETTINGS["b6d30bbc462457d1bcc37a5aa8ec4975"] = {
                            "handle": "b6d30bbc462457d1bcc37a5aa8ec4975",
                            "widget_name": "Search form #2",
                            "border_radius": "2",
                            "additional_marker": null,
                            "width": null,
                            "show_logo": true,
                            "show_hotels": true,
                            "form_type": "hotel",
                            "locale": "en",
                            "currency": "usd",
                            "sizes": "default",
                            "search_target": "",
                            "active_tab": "avia",
                            "search_host": "jetradar.com",
                            "hotels_host": "<?=Yii::$app->params['domain']?>site/hotel-list-view",
                            "hotel": "",
                            "hotel_alt": "Hotellook helps you find the best accomodation prices online.",
                            "avia_alt": "",
                            "retargeting": true,
                            "trip_class": "economy",
                            "depart_date": null,
                            "return_date": null,
                            "check_in_date": null,
                            "check_out_date": null,
                            "no_track": false,
                            "powered_by": false,
                            "id": 169079,
                            "marker": 205089,
                            "origin": {
                                "name": ""
                            },
                            "destination": {
                                "name": ""
                            },
                            "color_scheme": {
                                "name": "white_blue",
                                "icons": "icons_blue",
                                "background": "#ffffff",
                                "color": "#000000",
                                "border_color": "#c1c1c1",
                                "button": "#1b9ed9",
                                "button_text_color": "#ffffff",
                                "input_border": "#ffffff"
                            },
                            "hotels_type": "hotellook_host",
                            "best_offer": {
                                "locale": "en",
                                "currency": "usd",
                                "marker": 205089,
                                "search_host": "jetradar.com",
                                "offers_switch": false,
                                "api_url": "//minprices-jetradar.aviasales.ru/minimal_prices/offers.json",
                                "routes": []
                            },
                            "hotel_logo_host": null,
                            "search_logo_host": "jetradar.com",
                            "hotel_marker_format": null,
                            "hotelscombined_marker": null,
                            "responsive": true,
                            "height": 194
                        };
                    </script>
                    <script charset="utf-8" src="//www.travelpayouts.com/widgets/b6d30bbc462457d1bcc37a5aa8ec4975.js?v=1606" async></script>

                </div>
                <div class="tab-pane fade" id="flights-tab">
                    <script charset="utf-8" type="text/javascript">
                        window.TP_FORM_SETTINGS = window.TP_FORM_SETTINGS || {};
                        window.TP_FORM_SETTINGS["f3472ad320b2850d66b1defb00573f3f"] = {
                            "handle": "f3472ad320b2850d66b1defb00573f3f",
                            "widget_name": "Search form #3",
                            "border_radius": "2",
                            "additional_marker": null,
                            "width": null,
                            "show_logo": true,
                            "show_hotels": true,
                            "form_type": "avia",
                            "locale": "en",
                            "currency": "usd",
                            "sizes": "default",
                            "search_target": "_self",
                            "active_tab": "avia",
                            "search_host": "<?=Yii::$app->params['domain']?>site/flight-list-view",
                            "hotels_host": "search.hotellook.com",
                            "hotel": "",
                            "hotel_alt": "Search hotels with Hotellook and book hotels online",
                            "avia_alt": "",
                            "retargeting": true,
                            "trip_class": "economy",
                            "depart_date": null,
                            "return_date": null,
                            "check_in_date": null,
                            "check_out_date": null,
                            "no_track": false,
                            "powered_by": true,
                            "id": 169102,
                            "marker": 205089,
                            "origin": {
                                "name": ""
                            },
                            "destination": {
                                "name": ""
                            },
                            "color_scheme": {
                                "name": "white_blue",
                                "icons": "icons_blue",
                                "background": "#ffffff",
                                "color": "#000000",
                                "border_color": "#c1c1c1",
                                "button": "#1b9ed9",
                                "button_text_color": "#ffffff",
                                "input_border": "#ffffff"
                            },
                            "hotels_type": "hotellook_host",
                            "best_offer": {
                                "locale": "en",
                                "currency": "usd",
                                "marker": 205089,
                                "search_host": "jetradar.com",
                                "offers_switch": false,
                                "api_url": "//minprices-jetradar.aviasales.ru/minimal_prices/offers.json",
                                "routes": []
                            },
                            "hotel_logo_host": null,
                            "search_logo_host": "jetradar.com",
                            "hotel_marker_format": null,
                            "hotelscombined_marker": null,
                            "responsive": true,
                            "height": 194
                        };
                    </script>
                    <script charset="utf-8" src="//www.travelpayouts.com/widgets/f3472ad320b2850d66b1defb00573f3f.js?v=1606" async></script>

                </div>

                <div class="tab-pane fade" id="flight-and-hotel-tab">
                    <form action="flight-list-view.html" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="title">Where</h4>
                                <div class="form-group">
                                    <label>Leaving From</label>
                                    <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                </div>
                                <div class="form-group">
                                    <label>Going To</label>
                                    <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">When</h4>
                                <label>Departing On</label>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <div class="datepicker-wrap">
                                            <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">anytime</option>
                                                <option value="2">morning</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Arriving On</label>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <div class="datepicker-wrap">
                                            <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">anytime</option>
                                                <option value="2">morning</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">Who</h4>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <label>Adults</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <label>Kids</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Promo Code</label>
                                        <input type="text" class="input-text full-width" placeholder="type here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <label>Rooms</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 pull-right">
                                        <label>&nbsp;</label>
                                        <button class="full-width icon-check">SERACH NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="cars-tab">
                    <form action="car-list-view.html" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="title">Where</h4>
                                <div class="form-group">
                                    <label>Pick Up</label>
                                    <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                </div>
                                <div class="form-group">
                                    <label>Drop Off</label>
                                    <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">When</h4>
                                <div class="form-group">
                                    <label>Pick-Up Date / Time</label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Drop-Off Date / Time</label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">Who</h4>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <label>Adults</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <label>Kids</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Promo Code</label>
                                        <input type="text" class="input-text full-width" placeholder="type here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label>Car Type</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="">select a car type</option>
                                                <option value="economy">Economy</option>
                                                <option value="compact">Compact</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>&nbsp;</label>
                                        <button class="full-width icon-check">SERACH NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="cruises-tab">
                    <form action="cruise-list-view.html" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="title">Where</h4>
                                <div class="form-group">
                                    <label>Your Destination</label>
                                    <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">When</h4>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label>Departure Date</label>
                                        <div class="datepicker-wrap">
                                            <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Cruise Length</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="">select length</option>
                                                <option value="1">1-2 Nights</option>
                                                <option value="2">3-4 Nights</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="title">Who</h4>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label>Cruise Line</label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="">select cruise line</option>
                                                <option>Azamara Club Cruises</option>
                                                <option>Carnival Cruise Lines</option>
                                                <option>Celebrity Cruises</option>
                                                <option>Costa Cruise Lines</option>
                                                <option>Cruise &amp; Maritime Voyages</option>
                                                <option>Crystal Cruises</option>
                                                <option>Cunard Line Ltd.</option>
                                                <option>Disney Cruise Line</option>
                                                <option>Holland America Line</option>
                                                <option>Hurtigruten Cruise Line</option>
                                                <option>MSC Cruises</option>
                                                <option>Norwegian Cruise Line</option>
                                                <option>Oceania Cruises</option>
                                                <option>Orion Expedition Cruises</option>
                                                <option>P&amp;O Cruises</option>
                                                <option>Paul Gauguin Cruises</option>
                                                <option>Peter Deilmann Cruises</option>
                                                <option>Princess Cruises</option>
                                                <option>Regent Seven Seas Cruises</option>
                                                <option>Royal Caribbean International</option>
                                                <option>Seabourn Cruise Line</option>
                                                <option>Silversea Cruises</option>
                                                <option>Star Clippers</option>
                                                <option>Swan Hellenic Cruises</option>
                                                <option>Thomson Cruises</option>
                                                <option>Viking River Cruises</option>
                                                <option>Windstar Cruises</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="flight-status-tab">
                    <form action="flight-list-view.html" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="title">Where</h4>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label>Leaving From</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Going To</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-2">
                                <h4 class="title">When</h4>
                                <div class="form-group">
                                    <label>Departure Date</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-2">
                                <h4 class="title">Who</h4>
                                <div class="form-group">
                                    <label>Flight Number</label>
                                    <input type="text" class="input-text full-width" placeholder="enter flight number" />
                                </div>
                            </div>
                            <div class="form-group col-md-2 fixheight">
                                <label class="hidden-xs">&nbsp;</label>
                                <button class="icon-check full-width">SEARCH NOW</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="online-checkin-tab">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="title">Where</h4>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label>Leaving From</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Going To</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-2">
                                <h4 class="title">When</h4>
                                <div class="form-group">
                                    <label>Departure Date</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-2">
                                <h4 class="title">Who</h4>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                </div>
                            </div>
                            <div class="form-group col-md-2 fixheight">
                                <label class="hidden-xs">&nbsp;</label>
                                <button class="icon-check full-width">SEARCH NOW</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Popuplar Destinations -->
    <div class="destinations section">
        <div class="container">
            <h2>Popular Destinations</h2>
            <div class="row image-box style1 add-clearfix">
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                            <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="/main/images/destinations01.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$490</span>
                            <h4 class="box-title"><a href="hotel-detailed.html">Atlantis - The Palm<small>Paris</small></a></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                            <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="/main/images/destinations02.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$170</span>
                            <h4 class="box-title"><a href="hotel-detailed.html">Hilton Hotel<small>LONDON</small></a></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.6">
                            <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="/main/images/destinations03.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$130</span>
                            <h4 class="box-title"><a href="hotel-detailed.html">MGM Grand<small>LAS VEGAS</small></a></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.9">
                            <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="/main/images/destinations04.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title"><a href="hotel-detailed.html">Crown Casino<small>ASUTRALIA</small></a></h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- Honeymoon -->
    <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="col-sm-6 content-section description pull-right">
                <h1 class="title">Popular Destinations for Honeymoon</h1>
                <p>Nunc cursus libero purusac congue arcu cursus utsed vitae pulvinar massa idporta neque purusac Etiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
                <div class="row places image-box style9">
                    <div class="col-xs-4">
                        <article class="box">
                            <figure>
                                <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1">
                                    <img src="/main/images/places01.jpg" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Paris<small>(990 PLACES)</small></h4>
                                <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-4">
                        <article class="box">
                            <figure>
                                <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.4"><img src="/main/images/places02.jpg" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Greece<small>(990 PLACES)</small></h4>
                                <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-4">
                        <article class="box">
                            <figure>
                                <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.8"><img src="/main/images/places03.jpg" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Australia<small>(990 PLACES)</small></h4>
                                <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 image-container no-margin">
                <img src="/main/images/couple.png" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
            </div>
        </div>
    </div>

    <!-- Did you Know? section -->
    <div class="offers section">
        <div class="container">
            <h1 class="text-center">Did you know?</h1>
            <p class="col-xs-9 center-block no-float text-center">Mauris ullamcorper nibh quis leo ultrices in hendrerit velit tristiqueut augue in nulla lacinia bibendum liberoras rutrum ac purus ut tristique.
                Nullam placerat lacinia dolor quis pretium. Phasellus vitae lacinia quam, at pellentesque lorem. Sed euismod turpis quis mattis fringilla.</p>
            <div class="row image-box style2">
                <div class="col-md-6">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                            <a href="#" title=""><img src="/main/images/offers01.jpg" alt="" width="270" height="192" /></a>
                        </figure>
                        <div class="details">
                            <h4>Hire Cars</h4>
                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                            <a href="#" title="" class="button">SEE ALL</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                            <a href="#" title=""><img src="/main/images/offers02.jpg" alt="" width="270" height="192" /></a>
                        </figure>
                        <div class="details">
                            <h4>Cruise Deals</h4>
                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                            <a href="#" title="" class="button">SEE ALL</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                            <a href="#" title=""><img src="/main/images/offers03.jpg" alt="" width="270" height="192" /></a>
                        </figure>
                        <div class="details">
                            <h4>Things To Do</h4>
                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                            <a href="#" title="" class="button">SEE ALL</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="box">
                        <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                            <a href="#" title=""><img src="/main/images/offers04.jpg" alt="" width="270" height="192" /></a>
                        </figure>
                        <div class="details">
                            <h4>Fly in Comfort</h4>
                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                            <a href="#" title="" class="button">SEE ALL</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Features section -->
    <div class="features section global-map-area parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row image-box style7">
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="middle-block">
                            <img src="/main/images/1.jpg" alt="" class="middle-item" />
                            <span class="opacity-wrapper"></span>
                        </figure>
                        <div class="details">
                            <h4><a href="#">Best Price Guarantee</a></h4>
                            <p>
                                Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="middle-block">
                            <img src="/main/images/2.jpg" alt="" class="middle-item" />
                            <span class="opacity-wrapper"></span>
                        </figure>
                        <div class="details">
                            <h4><a href="#">Travel Insurance</a></h4>
                            <p>
                                Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="middle-block">
                            <img src="/main/images/3.jpg" alt="" class="middle-item" />
                            <span class="opacity-wrapper"></span>
                        </figure>
                        <div class="details">
                            <h4><a href="#">Why Chose Us</a></h4>
                            <p>
                                Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-sms-6 col-sm-6 col-md-3">
                    <article class="box">
                        <figure class="middle-block">
                            <img src="/main/images/4.jpg" alt="" class="middle-item" />
                            <span class="opacity-wrapper"></span>
                        </figure>
                        <div class="details">
                            <h4><a href="#">Need Help?</a></h4>
                            <p>
                                Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
