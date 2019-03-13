<?php
   /* @var $this yii\web\View */   
   //$this->registerJsFile('https://whitelabel.travelpayouts.com/widgets/whitelabel_en.js');   
   $this->registerJsFile('/js/flights/get-flights.js');
?>
<div class="page-title-container">
   <div class="container">
      <div class="page-title pull-left">
         <h2 class="entry-title">Flight Search Results</h2>
      </div>
      <ul class="breadcrumbs pull-right">
         <li><a href="#">HOME</a></li>
         <li class="active">Flight Search Results</li>
      </ul>
   </div>
</div>
<section id="content">
   <div class="container">
      <div id="main">
         <div class="row">
            <div class="col-sm-4 col-md-3">
               <h4 class="search-results-title"><i class="soap-icon-search"></i><b>1,984</b> results found.</h4>
               <div class="toggle-container filters-container">
                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#sort-filter" class="collapsed">Sort</a>
                     </h4>
                     <div id="sort-filter" class="panel-collapse collapse">
                        <input type="hidden" id="sort_filter_hidden" value="default">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li>
                                 <a href="#" data-value="minprice">
                                 by <strong>Price</strong> 
                                 </a>
                              </li>
                              <li>
                                 <a href="#" data-value="popularity">
                                 by <strong>Popularity</strong> 
                                 </a>
                              </li>
                              <li>
                                 <a href="#" data-value="rating">
                                 by <strong>Guest Rating</strong> 
                                 </a>
                              </li>
                              <li>
                                 <a href="#" data-value="stars">
                                 by <strong>Star Rating</strong> 
                                 </a>
                              </li>
                              <li>
                                 <a href="#" data-value="distance_to_center">
                                 by <strong>Distance From City Center</strong> 
                                 </a>
                              </li>
                           </ul>
                           <div class="clearer"></div>
                        </div>
                     </div>
                     
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#flight-stops-filter" class="collapsed">Numbers of stops</a>
                     </h4>
                     <div id="flight-stops-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">1 Stop</a></li>
                              <li><a href="#">2 Stops</a></li>
                              <li class="active"><a href="#">3 Stops</a></li>
                              <li><a href="#">MultiStops</a></li>
                           </ul>
                           <a class="button btn-mini">MORE</a>
                        </div>
                     </div>
                  </div>
  

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
                     </h4>
                     <div id="price-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <input type="hidden" id="min-max" value="default">
                           <div id="price-range"></div>
                           <br/>
                           <span class="min-price-label pull-left"></span>
                           <span class="max-price-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                        <!-- end content -->
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#baggage-filter" class="collapsed">Baggage</a>
                     </h4>
                     <div id="baggage-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">All</a></li>
                              <li><a href="#">Without baggage</a></li>
                              <li class="active"><a href="#">Luggage and carry-on</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#duration-stop" class="collapsed">Duration of stops</a>
                     </h4>
                     <div id="duration-stop" class="panel-collapse collapse">
                        <div class="panel-content">
                           <input type="hidden" id="duration-min-max" value="default">
                           <div id="duration_stop"></div>
                           <br/>
                           <span class="min-duration_stop-label pull-left"></span>
                           <span class="max-duration_stop-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                        <!-- end content -->
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#airfares" class="collapsed">Airfares</a>
                     </h4>
                     <div id="airfares" class="panel-collapse collapse">
                        <div class="panel-content">
                           <input type="hidden" id="airfaressmin-max" value="default">
                           <div id="airfaress"></div>
                           <br/>
                           <span class="min-airfaress-label pull-left"></span>
                           <span class="max-airfaress-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                        <!-- end content -->
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#arrival-time" class="collapsed">Departure/arrival times</a>
                     </h4>
                     <div id="arrival-time" class="panel-collapse collapse">
                        <div class="panel-content">
                          <p>Departure from Karachi KHI</p>
                           <input type="hidden" id="departure_timemin-max" value="default">
                           <div id="departure_time"></div>
                           <br/>
                           <span class="min-departure_time-label pull-left"></span>
                           <span class="max-departure_time-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                        <!-- end content -->
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#travel_time" class="collapsed">Travel time</a>
                     </h4>
                     <div id="travel_time" class="panel-collapse collapse">
                        <div class="panel-content">
                           <input type="hidden" id="travel-rangemin-max" value="default">
                           <div id="travel-range"></div>
                           <br/>
                           <span class="min-travel-range-label pull-left"></span>
                           <span class="max-travel-range-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                        <!-- end content -->
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#connecting-airport" class="collapsed">Connecting airports</a>
                     </h4>
                     <div id="connecting-airport" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">All</a></li>
                              <p>Bahrain</p>
                              <li><a href="#">Bahrain International Airport BAH</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <!-- <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#flight-times-filter" class="collapsed">Flight Times</a>
                     </h4>
                     <div id="flight-times-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <div id="flight-times" class="slider-color-yellow"></div>
                           <br />
                           <span class="start-time-label pull-left"></span>
                           <span class="end-time-label pull-right"></span>
                           <div class="clearer"></div>
                        </div>
                     </div>
                  </div> -->
                  
                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#airlines-filter" class="collapsed">Airlines</a>
                     </h4>
                     <div id="airlines-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">Major Airline<small>($620)</small></a></li>
                              <li><a href="#">United Airlines<small>($982)</small></a></li>
                              <li class="active"><a href="#">delta airlines<small>($1,127)</small></a></li>
                              <li><a href="#">Alitalia<small>($2,322)</small></a></li>
                              <li><a href="#">US airways<small>($3,158)</small></a></li>
                              <li><a href="#">Air France<small>($4,239)</small></a></li>
                              <li><a href="#">Air tahiti nui<small>($5,872)</small></a></li>
                           </ul>
                           <a class="button btn-mini">MORE</a>
                        </div>
                     </div>
                  </div>

                  <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#travel-agencies" class="collapsed">Online travel agencies</a>
                     </h4>
                     <div id="travel-agencies" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">All<small>Only</small></a></li>
                              <li><a href="#">CompassFlights<small>Only</small></a></li>
                              <li class="active"><a href="#">Flydubai<small>Only</small></a></li>
                              <li><a href="#">SmartFares<small>Only</small></a></li>
                           </ul>
                           <a class="button btn-mini">MORE</a>
                        </div>
                     </div>
                  </div>


                  <!-- <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#flight-type-filter" class="collapsed">Flight Type</a>
                     </h4>
                     <div id="flight-type-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">Business</a></li>
                              <li><a href="#">First class</a></li>
                              <li class="active"><a href="#">Economy</a></li>
                              <li><a href="#">Premium Economy</a></li>
                           </ul>
                           <a class="button btn-mini">MORE</a>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#inflight-experience-filter" class="collapsed">Inflight Experience</a>
                     </h4>
                     <div id="inflight-experience-filter" class="panel-collapse collapse">
                        <div class="panel-content">
                           <ul class="check-square filters-option">
                              <li><a href="#">Inflight Dining</a></li>
                              <li><a href="#">Music</a></li>
                              <li class="active"><a href="#">Sky Shopping</a></li>
                              <li><a href="#">Wi-fi</a></li>
                              <li><a href="#">Seats &amp; Cabin</a></li>
                           </ul>
                           <a class="button btn-mini">MORE</a>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="panel style1 arrow-right">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                     </h4>
                     <div id="modify-search-panel" class="panel-collapse collapse">
                        <div class="panel-content">
                           <form method="post">
                              <div class="form-group">
                                 <label>Leaving from</label>
                                 <input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot" />
                              </div>
                              <div class="form-group">
                                 <label>Departure on</label>
                                 <div class="datepicker-wrap">
                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Arriving On</label>
                                 <div class="datepicker-wrap">
                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                 </div>
                              </div>
                              <br />
                              <button class="btn-medium icon-check uppercase full-width">search again</button>
                           </form>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
            <div class="col-sm-8 col-md-9">
               <!-- <div class="sort-by-section clearfix box">
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
                     
                         "search_host": "trevel.loc/site/flight-list-view",
                     
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
                  <h4 class="sort-by-title block-sm">Sort results by:</h4>
                  <ul class="sort-bar clearfix block-sm">
                     <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                     <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                     <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>duration</span></a></li>
                  </ul>
                  <ul class="swap-tiles clearfix block-sm">
                     <li class="swap-list active">
                        <a href="flight-list-view.html"><i class="soap-icon-list"></i></a>
                     </li>
                     <li class="swap-grid">
                        <a href="flight-grid-view.html"><i class="soap-icon-grid"></i></a>
                     </li>
                     <li class="swap-block">
                        <a href="flight-block-view.html"><i class="soap-icon-block"></i></a>
                     </li>
                  </ul>
               </div> -->
               <div class="flight-list listing-style3 flight">
                  <!-- new-styles-flight TPWL-widget -->
                  <div class="new-styles-flight TPWL-widget">
                     <div class="TPWL_widget--xl">
                        <div class="main-ticket-box ticket    ticket--with-labels   ticket--one_label_baggage" role="ticket-container">
                           <div class="ticket-labels-container"><span class="ticket-label ticket-label--cheap">Best price</span></div>
                           <!--if-->
                           <div class="ticket-header">
                              <div class="ticket-header__mobile_back_button" role="ticket-mobile-back"></div>
                              <div class="ticket-header-cities">Amsterdam ... Amsterdam</div>
                              <div class="ticket-header-dates">8 March – 15 March</div>
                              <!--if-->
                           </div>
                           <div class="ticket-scroll-container">
                              <div class="ticket-action">
                                 <div class="ticket-action-buy">
                                    <div class="tariffs">
                                       <div class="tariffs__item tariffs__item--active " role="otherBaggage">
                                          <div class="bags-info">
                                             <div class="bags-info__icons bags-info__icons--baggage">
                                                <i class="bag-icon bag-icon--baggage bag-icon--without-baggage
                                                   bag-icon--without-weight
                                                   " data-weight="x1"></i><!--if--><!--if--><span class="baggage-info">Without baggage</span><!--if-->
                                             </div>
                                             <div class="bags-info__icons bags-info__icons--handbags">
                                                <i class="bag-icon bag-icon--handbags bag-icon--without-handbags
                                                   bag-icon--without-weight
                                                   bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span><!--if-->
                                             </div>
                                             <div class="baggage-tooltip ">
                                                <div class="baggage-tooltip__item"><span class="baggage-info">Without baggage</span></div>
                                                <!--if-->
                                                <div class="baggage-tooltip__item"><span class="baggage-info">Unknown carry-on<sup>*</sup></span></div>
                                                <!--if-->
                                             </div>
                                             <!--BaggageTooltip-->
                                          </div>
                                          <!--Baggage--><!--if-->
                                       </div>
                                       <!--if--><!--if-->
                                    </div>
                                 </div>
                                 <!--if-->
                                 <div class="ticket-action__container">
                                    <div class="ticket-action-button ticket-action-button--">
                                       <div class="ticket-action-button-tooltip"><span class="currency_font currency_font--usd">349</span></div>
                                       <a class="ticket-action-button-deeplink ticket-action-button-deeplink--" role="main-proposal-link" target="_blank" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd">
                                          <span class="ticket-action-button-deeplink-text">
                                             <span class="ticket-action-button-deeplink-text__not-mobile">Book</span> <span class="ticket-action-button-deeplink-text__mobile">Select</span><!--unsafe--><span class="ticket-action-button-deeplink-text__not-mobile"> <br></span><strong class="ticket-action-button-deeplink-text__price--not-mobile"><span class="currency_font currency_font--usd">349</span></strong>
                                          </span>
                                          <!--if-->
                                          <div class="ticket-action-button-deeplink-spinner">
                                             <div class="spinner">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                             </div>
                                          </div>
                                       </a>
                                       <div class="ticket-action-button-price_and_proposal">
                                          <strong class="ticket-action-button-deeplink-text__price--mobile"><span class="currency_font currency_font--usd">349</span></strong>
                                          <a target="_blank" class="main-proposal-link" role="main-proposal-link" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd">
                                             <div class="ticket-action__main_proposal ticket-action__main_proposal--">Mytrip.com</div>
                                          </a>
                                       </div>
                                    </div>
                                    <!--if-->
                                    <ul class="ticket-action-proposals-list ticket-action-proposals-list--collapsed  ticket-action-proposals-list--" role="proposals_list">
                                       <li class="ticket-action-proposals-item">
                                          <!--if--><a class="ticket-action-proposals-item-link " role="additional-proposal-link" target="_blank" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd"><span class="ticket-action-proposals-item-link__gate">Mytrip.com</span><span class="ticket-action-proposals-item-link__price"><span class="currency_font currency_font--usd">349</span></span><span class="ticket-action-proposals-item-link__button"><span class="ticket-action-button-deeplink-text__not-mobile">Book</span> <span class="ticket-action-button-deeplink-text__mobile">Select</span></span></a>
                                          <div class="ticket-action-proposals-item-tooltip"><span class="currency_font currency_font--usd">349</span></div>
                                       </li>
                                       <!--if-->
                                       <li class="ticket-action-proposals-item">
                                          <!--if--><a class="ticket-action-proposals-item-link " role="additional-proposal-link" target="_blank" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/38300328.html?gate_label=Gotogate&amp;gate_id=383&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd"><span class="ticket-action-proposals-item-link__gate">Gotogate</span><span class="ticket-action-proposals-item-link__price"><span class="currency_font currency_font--usd">381</span></span><span class="ticket-action-proposals-item-link__button"><span class="ticket-action-button-deeplink-text__not-mobile">Book</span> <span class="ticket-action-button-deeplink-text__mobile">Select</span></span></a>
                                          <div class="ticket-action-proposals-item-tooltip"><span class="currency_font currency_font--usd">381</span></div>
                                       </li>
                                       <!--if-->
                                    </ul>
                                    <!--if--><!--if-->
                                 </div>
                                 <!--Proposals--><!--if-->
                                 <div class="ticket-action-sharing">
                                    <div class="ticket-action-sharing__text">Copy link</div>
                                    <div class="ticket-action-sharing-input-wrapper"><input type="text" class="ticket-action-sharing__input" role="copy-link-input" readonly="readonly"></div>
                                 </div>
                              </div>
                              <div class="ticket-details" role="ticket-details">
                                 <div class="ticket-action-airline-container"><a class="ticket-action-airline" role="main-proposal-link" target="_blank" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd"><img class="ticket-action-airline__logo ticket-action-airline__logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/LX@2x.png"><img class="ticket-action-airline__logo ticket-action-airline__logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/LX@2x.png"></a></div>
                                 <!--if-->
                                 <div class="flight flight--depart">
                                    <div class="flight-header"><span class="flight-header__direction">SEGMENT 1 · </span><span class="flight-header__date">8 March 2019</span><span class="flight-header__mobile_time"><span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">00m</span></span></div>
                                    <div class="flight-brief">
                                       <div class="custom_checkbox custom_checkbox--touch_clean kraynov-filter-checkbox">
                                          <input type="checkbox" role="kraynov-hash" data-is-kraynov-checkbox="true" id="kraynov_LX_737_2019-03-08+LX_16_2019-03-08" value="LX_737_2019-03-08+LX_16_2019-03-08"><label class="label-block name g-text-overflow" data-is-kraynov-checkbox="true" for="kraynov_LX_737_2019-03-08+LX_16_2019-03-08"></label>
                                          <div class="kraynov-filter-tooltip">Only show tickets that match these departure criteria</div>
                                       </div>
                                       <!--if-->
                                       <div class="flight-brief-departure">
                                          <time class="flight-brief-time">07:00<span class="flight-brief-time__meridiem"></span></time>
                                          <div class="flight-brief-date"><span class="flight-brief-date__day">8</span>Mar</div>
                                          <div class="flight-brief-city" title="Amsterdam"><span class="flight-brief-city__name">Amsterdam</span><span class="flight-brief-city__iata">AMS</span></div>
                                       </div>
                                       <section class="flight-brief-layovers">
                                          <header class="flight-brief-layovers__flight_time"><span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">00m</span></header>
                                          <main class="flight-brief-layovers__list">
                                             <div class="flight-brief-layovers__list-wrapper">
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>AMS</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport Amsterdam</div>
                                                   </div>
                                                </div>
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>ZRH</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport Zurich Airport, Zurich</div>
                                                      <div class="flight-brief-layover-tooltip__duration flight-brief-layover-tooltip__durationundefined">
                                                         Layover<!--if--><!--if--> — <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span><!--unsafe-->
                                                      </div>
                                                      <!--if-->
                                                   </div>
                                                </div>
                                                <!--if--><!--for-->
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>JFK</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport New York</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </main>
                                          <!--if-->
                                       </section>
                                       <div class="flight-brief-arrival">
                                          <div class="flight-brief-date">
                                             <span class="flight-brief-date__day">8</span><!--if-->Mar
                                          </div>
                                          <time class="flight-brief-time">
                                             13:00<span class="flight-brief-time__meridiem"></span><!--if-->
                                          </time>
                                          <div class="flight-brief-city" title="New York"><span class="flight-brief-city__name">New York</span><span class="flight-brief-city__iata">JFK</span></div>
                                       </div>
                                    </div>
                                    <div class="bags-info">
                                       <div class="bags-info__icons bags-info__icons--baggage">
                                          <i class="bag-icon bag-icon--baggage bag-icon--without-baggage
                                             bag-icon--without-weight
                                             " data-weight="x1"></i><!--if--><!--if--><span class="baggage-info">Without baggage</span><!--if-->
                                       </div>
                                       <div class="bags-info__icons bags-info__icons--handbags">
                                          <i class="bag-icon bag-icon--handbags bag-icon--without-handbags
                                             bag-icon--without-weight
                                             bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span><!--if-->
                                       </div>
                                       <!--BaggageTooltip-->
                                    </div>
                                    <!--Baggage-->
                                    <div class="flight-details">
                                       <!--if-->
                                       <section class="flight-details-leg">
                                          <div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/LX@2x.png"></div>
                                          <div class="flight-details-leg-time">
                                             07:00 − 08:25<!--if--><time class="flight-details-leg__duration"><span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span></time>
                                          </div>
                                          <div class="flight-details-leg__direction">AMS Amsterdam Airport Schiphol<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>ZRH Zurich Airport</div>
                                          <div class="flight-details-leg__flight_details">
                                             LX-737 · Swiss&nbsp;International Air Lines · Airbus&nbsp;A320-100/200<!--if-->
                                             <div class="flight-details-leg-ameneties">
                                                <!--if--><!--if--><!--if-->
                                                <div class="flight-details-leg-ameneties-tooltip">
                                                   <!--if--><!--if--><!--if-->
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <section class="flight-details-leg--mobile">
                                          <div class="leg-brief">
                                             <div class="leg-brief__flight">Flight: LX-737</div>
                                             <div class="leg-brief__carrier">Swiss&nbsp;International Air Lines</div>
                                             <div class="leg-brief__time">
                                                Flight duration: <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span><!--unsafe-->
                                             </div>
                                          </div>
                                          <div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/LX@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/LX@2x.png"></div>
                                          <div class="leg-details">
                                             <div class="leg-details-depart">
                                                <div class="leg-details__time">
                                                   <div class="leg-details__time-clock">07:00</div>
                                                   <div class="leg-details__time-date">8 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Amsterdam</div>
                                                   AMS Amsterdam Airport Schiphol
                                                </div>
                                             </div>
                                             <div class="leg-details-return">
                                                <div class="leg-details__time">
                                                   <!--if-->
                                                   <div class="leg-details__time-clock">
                                                      08:25<!--if-->
                                                   </div>
                                                   <div class="leg-details__time-date ">8 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Zurich</div>
                                                   ZRH Zurich Airport
                                                </div>
                                             </div>
                                          </div>
                                          <div class="flight-details-leg-ameneties">
                                             <!--if--><!--if--><!--if-->
                                             <div class="flight-details-leg-ameneties-tooltip">
                                                <!--if--><!--if--><!--if-->
                                             </div>
                                          </div>
                                       </section>
                                       <div class="flight-details-layover">
                                          <div class="flight-details-layover__place">Stop at Zurich ZRH</div>
                                          <time class="flight-details-layover__time"><span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span></time>
                                       </div>
                                       <!--if--><!--if-->
                                       <section class="flight-details-leg">
                                          <div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/LX@2x.png"></div>
                                          <div class="flight-details-leg-time">
                                             09:50 − 13:00<!--if--><time class="flight-details-leg__duration"><span class="formatted_time">9h</span> &nbsp;<span class="formatted_time">10m</span></time>
                                          </div>
                                          <div class="flight-details-leg__direction">ZRH Zurich Airport<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>JFK John F. Kennedy International Airport</div>
                                          <div class="flight-details-leg__flight_details">
                                             LX-16 · Swiss&nbsp;International Air Lines · Airbus&nbsp;A330-300<!--if-->
                                             <div class="flight-details-leg-ameneties">
                                                <!--if--><!--if--><!--if-->
                                                <div class="flight-details-leg-ameneties-tooltip">
                                                   <!--if--><!--if--><!--if-->
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <section class="flight-details-leg--mobile">
                                          <div class="leg-brief">
                                             <div class="leg-brief__flight">Flight: LX-16</div>
                                             <div class="leg-brief__carrier">Swiss&nbsp;International Air Lines</div>
                                             <div class="leg-brief__time">
                                                Flight duration: <span class="formatted_time">9h</span> &nbsp;<span class="formatted_time">10m</span><!--unsafe-->
                                             </div>
                                          </div>
                                          <div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/LX@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/LX@2x.png"></div>
                                          <div class="leg-details">
                                             <div class="leg-details-depart">
                                                <div class="leg-details__time">
                                                   <div class="leg-details__time-clock">09:50</div>
                                                   <div class="leg-details__time-date">8 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Zurich</div>
                                                   ZRH Zurich Airport
                                                </div>
                                             </div>
                                             <div class="leg-details-return">
                                                <div class="leg-details__time">
                                                   <!--if-->
                                                   <div class="leg-details__time-clock">
                                                      13:00<!--if-->
                                                   </div>
                                                   <div class="leg-details__time-date ">8 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>New York</div>
                                                   JFK John F. Kennedy International Airport
                                                </div>
                                             </div>
                                          </div>
                                          <div class="flight-details-leg-ameneties">
                                             <!--if--><!--if--><!--if-->
                                             <div class="flight-details-leg-ameneties-tooltip">
                                                <!--if--><!--if--><!--if-->
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                 </div>
                                 <div class="flight flight--return">
                                    <div class="flight-header"><span class="flight-header__direction">SEGMENT 2 · </span><span class="flight-header__date">15 March 2019</span><span class="flight-header__mobile_time"><span class="formatted_time">21h</span> &nbsp;<span class="formatted_time">15m</span></span></div>
                                    <div class="flight-brief">
                                       <div class="custom_checkbox custom_checkbox--touch_clean kraynov-filter-checkbox">
                                          <input type="checkbox" role="kraynov-hash" data-is-kraynov-checkbox="true" id="kraynov_AC_703_2019-03-15+AC_824_2019-03-15" value="AC_703_2019-03-15+AC_824_2019-03-15"><label class="label-block name g-text-overflow" data-is-kraynov-checkbox="true" for="kraynov_AC_703_2019-03-15+AC_824_2019-03-15"></label>
                                          <div class="kraynov-filter-tooltip">Only show tickets that match these arrival criteria</div>
                                       </div>
                                       <!--if-->
                                       <div class="flight-brief-departure">
                                          <time class="flight-brief-time">07:25<span class="flight-brief-time__meridiem"></span></time>
                                          <div class="flight-brief-date"><span class="flight-brief-date__day">15</span>Mar</div>
                                          <div class="flight-brief-city" title="New York"><span class="flight-brief-city__name">New York</span><span class="flight-brief-city__iata">LGA</span></div>
                                       </div>
                                       <section class="flight-brief-layovers">
                                          <header class="flight-brief-layovers__flight_time"><span class="formatted_time">21h</span> &nbsp;<span class="formatted_time">15m</span></header>
                                          <main class="flight-brief-layovers__list">
                                             <div class="flight-brief-layovers__list-wrapper">
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>LGA</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport New York</div>
                                                   </div>
                                                </div>
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>YYZ</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport Pearson International Airport, Toronto</div>
                                                      <div class="flight-brief-layover-tooltip__duration flight-brief-layover-tooltip__duration--day">
                                                         Daytime layover<!--if--><!--if--> — <span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">04m</span><!--unsafe-->
                                                      </div>
                                                      <!--if-->
                                                   </div>
                                                </div>
                                                <!--if--><!--for-->
                                                <div class="flight-brief-layover">
                                                   <div class="flight-brief-layover__iata"><span>AMS</span></div>
                                                   <div class="flight-brief-layover-tooltip">
                                                      <div class="flight-brief-layover-tooltip__airport_name">Airport Amsterdam</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </main>
                                          <!--if-->
                                       </section>
                                       <div class="flight-brief-arrival">
                                          <div class="flight-brief-date">
                                             <span class="flight-brief-date__day">16</span><span class="flight-brief-date__next_day">+1</span><!--if-->Mar
                                          </div>
                                          <time class="flight-brief-time">
                                             09:40<span class="flight-brief-time__meridiem"></span><span class="flight-brief-date__next_day flight-brief-date__next_day--mobile">+1</span><!--if-->
                                          </time>
                                          <div class="flight-brief-city" title="Amsterdam"><span class="flight-brief-city__name">Amsterdam</span><span class="flight-brief-city__iata">AMS</span></div>
                                       </div>
                                    </div>
                                    <div class="bags-info">
                                       <div class="bags-info__icons bags-info__icons--baggage">
                                          <i class="bag-icon bag-icon--baggage bag-icon--without-baggage
                                             bag-icon--without-weight
                                             " data-weight="x1"></i><!--if--><!--if--><span class="baggage-info">Without baggage</span><!--if-->
                                       </div>
                                       <div class="bags-info__icons bags-info__icons--handbags">
                                          <i class="bag-icon bag-icon--handbags bag-icon--without-handbags
                                             bag-icon--without-weight
                                             bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span><!--if-->
                                       </div>
                                       <!--BaggageTooltip-->
                                    </div>
                                    <!--Baggage-->
                                    <div class="flight-details">
                                       <!--if-->
                                       <section class="flight-details-leg">
                                          <div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div>
                                          <div class="flight-details-leg-time">
                                             07:25 − 09:01<!--if--><time class="flight-details-leg__duration"><span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">36m</span></time>
                                          </div>
                                          <div class="flight-details-leg__direction">LGA LaGuardia Airport<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>YYZ Pearson International Airport</div>
                                          <div class="flight-details-leg__flight_details">
                                             AC-703 · Air Canada · Airbus&nbsp;A320-100/200<!--if-->
                                             <div class="flight-details-leg-ameneties">
                                                <!--if--><!--if--><span class="flight-details-leg-ameneties__night_flight"></span><!--if-->
                                                <div class="flight-details-leg-ameneties-tooltip">
                                                   <div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div>
                                                   <!--if--><!--if--><!--if-->
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <section class="flight-details-leg--mobile">
                                          <div class="leg-brief">
                                             <div class="leg-brief__flight">Flight: AC-703</div>
                                             <div class="leg-brief__carrier">Air Canada</div>
                                             <div class="leg-brief__time">
                                                Flight duration: <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">36m</span><!--unsafe-->
                                             </div>
                                          </div>
                                          <div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/AC@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div>
                                          <div class="leg-details">
                                             <div class="leg-details-depart">
                                                <div class="leg-details__time">
                                                   <div class="leg-details__time-clock">07:25</div>
                                                   <div class="leg-details__time-date">15 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>New York</div>
                                                   LGA LaGuardia Airport
                                                </div>
                                             </div>
                                             <div class="leg-details-return">
                                                <div class="leg-details__time">
                                                   <!--if-->
                                                   <div class="leg-details__time-clock">
                                                      09:01<!--if-->
                                                   </div>
                                                   <div class="leg-details__time-date ">15 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Toronto</div>
                                                   YYZ Pearson International Airport
                                                </div>
                                             </div>
                                          </div>
                                          <div class="flight-details-leg-ameneties">
                                             <!--if--><!--if--><span class="flight-details-leg-ameneties__night_flight"></span><!--if-->
                                             <div class="flight-details-leg-ameneties-tooltip">
                                                <div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div>
                                                <!--if--><!--if--><!--if-->
                                             </div>
                                          </div>
                                       </section>
                                       <div class="flight-details-layover">
                                          <div class="flight-details-layover__place">Stop at Toronto YYZ</div>
                                          <time class="flight-details-layover__time"><span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">04m</span></time>
                                       </div>
                                       <!--if--><!--if-->
                                       <section class="flight-details-leg">
                                          <div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div>
                                          <div class="flight-details-leg-time">
                                             21:05 − 09:40
                                             <span class="flight-details-leg-time__warning">
                                                Arrival on 16 Mar, Sa<!--unsafe-->
                                             </span>
                                             <!--if--><time class="flight-details-leg__duration"><span class="formatted_time">7h</span> &nbsp;<span class="formatted_time">35m</span></time>
                                          </div>
                                          <div class="flight-details-leg__direction">YYZ Pearson International Airport<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>AMS Amsterdam Airport Schiphol</div>
                                          <div class="flight-details-leg__flight_details">
                                             AC-824 · Air Canada · Airbus&nbsp;A330-300<!--if-->
                                             <div class="flight-details-leg-ameneties">
                                                <!--if--><!--if--><span class="flight-details-leg-ameneties__night_flight"></span><!--if-->
                                                <div class="flight-details-leg-ameneties-tooltip">
                                                   <div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div>
                                                   <!--if--><!--if--><!--if-->
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <section class="flight-details-leg--mobile">
                                          <div class="leg-brief">
                                             <div class="leg-brief__flight">Flight: AC-824</div>
                                             <div class="leg-brief__carrier">Air Canada</div>
                                             <div class="leg-brief__time">
                                                Flight duration: <span class="formatted_time">7h</span> &nbsp;<span class="formatted_time">35m</span><!--unsafe-->
                                             </div>
                                          </div>
                                          <div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/AC@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div>
                                          <div class="leg-details">
                                             <div class="leg-details-depart">
                                                <div class="leg-details__time">
                                                   <div class="leg-details__time-clock">21:05</div>
                                                   <div class="leg-details__time-date">15 Mar, Fri</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Toronto</div>
                                                   YYZ Pearson International Airport
                                                </div>
                                             </div>
                                             <div class="leg-details-return">
                                                <div class="leg-details__time">
                                                   <span class="leg-details__time__warning">
                                                      Arrival on 16 Mar, Sa<!--unsafe-->
                                                   </span>
                                                   <!--if-->
                                                   <div class="leg-details__time-clock">
                                                      09:40<span class="flight-brief-date__next_day flight-brief-date__next_day--mobile">+1</span><!--if-->
                                                   </div>
                                                   <div class="leg-details__time-date leg-details__time-date--next_day">16 Mar, Sat</div>
                                                </div>
                                                <div class="leg-details__airport">
                                                   <div>Amsterdam</div>
                                                   AMS Amsterdam Airport Schiphol
                                                </div>
                                             </div>
                                          </div>
                                          <div class="flight-details-leg-ameneties">
                                             <!--if--><!--if--><span class="flight-details-leg-ameneties__night_flight"></span><!--if-->
                                             <div class="flight-details-leg-ameneties-tooltip">
                                                <div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div>
                                                <!--if--><!--if--><!--if-->
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                 </div>
                                 <!--for-->
                                 <div class="flight-baggage-terms">
                                    <sup>*</sup>
                                    <p class="flight-baggage-terms__info">Baggage allowances may vary according to route, cabin class or fare family – for clarification, please contact the airline</p>
                                 </div>
                                 <div class="ticket-details-toggler"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- new-styles-flight TPWL-widget end -->
                  <!-- <article class="box">
                     <figure class="col-xs-3 col-sm-2">
                        <span><img alt="" src="http://placehold.it/270x160"></span>
                     </figure>
                     <div class="details col-xs-9 col-sm-10">
                        <div class="details-wrapper">
                           <div class="first-row">
                              <div>
                                 <h4 class="box-title">Indianapolis to Paris<small>Oneway flight</small></h4>
                                 <a class="button btn-mini stop">1 STOP</a>
                                 <div class="amenities">
                                    <i class="soap-icon-wifi circle"></i>
                                    <i class="soap-icon-entertainment circle"></i>
                                    <i class="soap-icon-fork circle"></i>
                                    <i class="soap-icon-suitcase circle"></i>
                                 </div>
                              </div>
                              <div>
                                 <span class="price"><small>AVG/PERSON</small>$320</span>
                              </div>
                           </div>
                           <div class="second-row">
                              <div class="time">
                                 <div class="take-off col-sm-4">
                                    <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                    <div>
                                       <span class="skin-color">Take off</span><br />Wed Nov 13, 2013 7:50 Am
                                    </div>
                                 </div>
                                 <div class="landing col-sm-4">
                                    <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                    <div>
                                       <span class="skin-color">landing</span><br />Wed Nov 13, 2013 9:20 am
                                    </div>
                                 </div>
                                 <div class="total-time col-sm-4">
                                    <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                                    <div>
                                       <span class="skin-color">total time</span><br />13 Hour, 40 minutes
                                    </div>
                                 </div>
                              </div>
                              <div class="action">
                                 <a href="flight-detailed.html" class="button btn-small full-width">SELECT NOW</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article> -->
               </div>
               <a class="button uppercase full-width btn-large">load more listings</a>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   var _Get =<?=json_encode(Yii::$app->request->get(), true)?>   
</script>