<?php
	/* @var $this yii\web\View */
//$this->registerJsFile('https://whitelabel.travelpayouts.com/widgets/whitelabel_en.js');   

$this->registerJsFile('/js/flights/get-flights.js', ['depends' => 'yii\web\JqueryAsset']);

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
                                            <a href="#" data-value="price">
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
                                    <br />
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
                                    <br />
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
                                    <br />
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
                                    <br />
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
                                    <br />
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
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
					<div id="flights">
						
					</div>
					<a class="button uppercase full-width btn-large" id="load_more">load more listings</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var _Get = <?= json_encode(Yii::$app->request->get(), true) ?>
</script> 