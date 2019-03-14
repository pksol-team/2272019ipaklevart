tjq(document).ready(function() {
	var limit = 10;
	GetFlights(limit);

	tjq("#load_more").click(function() {
		limit += 10;
		GetFlights(limit);
	});
});

function GetFlights(limit) {

    var sort = tjq('#sort_filter_hidden').val();	


	tjq.ajax({
		url: "/site/showflights",
		type: "POST",
		data: {
			limit: limit
			sort: sort
		},

		success: function(res) {
			show_flights(res);
		}
	});
}

tjq("#sort-filter li").click(function() {
	var $this = tjq(this);
	var val = "default";

	$this.siblings("li").removeClass("active");

	if ($this.hasClass("active")) {
		val = $this.find("a").attr("data-value");
	}

	tjq("#sort_filter_hidden").val(val);

	var limit = 10;

	GetFlights(limit);
});

tjq("#price-range").slider({
	range: true,
	min: 0,
	max: 1000,
	values: [0, 1000],
	slide: function(event, ui) {
		tjq(".min-price-label").html("$" + ui.values[0]);
		tjq(".max-price-label").html("$" + ui.values[1]);
	},
	stop: function(event, ui) {
		tjq("#min-max").val(ui.values[0] + "-" + ui.values[1]);
		var limit = 10;
		GetFlights(limit);
	}
});

tjq(".min-price-label").html("$" + tjq("#price-range").slider("values", 0));
tjq(".max-price-label").html("$" + tjq("#price-range").slider("values", 1));

tjq("#duration_stop").slider({
	range: true,
	min: 0,
	max: 1000,
	values: [0, 1000],
	slide: function(event, ui) {
		tjq(".min-duration_stop-label").html("$" + ui.values[0]);
		tjq(".max-duration_stop-label").html("$" + ui.values[1]);
	},
	stop: function(event, ui) {
		tjq("#duration-min-max").val(ui.values[0] + "-" + ui.values[1]);
		var limit = 10;
		GetFlights(limit);
	}
});
tjq(".min-duration_stop-label").html(
	"$" + tjq("#duration_stop").slider("values", 0)
);
tjq(".max-duration_stop-label").html(
	"$" + tjq("#duration_stop").slider("values", 1)
);

tjq("#airfaress").slider({
	range: true,
	min: 0,
	max: 1000,
	values: [0, 1000],
	slide: function(event, ui) {
		tjq(".min-airfaress-label").html("$" + ui.values[0]);
		tjq(".max-airfaress-label").html("$" + ui.values[1]);
	},
	stop: function(event, ui) {
		tjq("#airfaressmin-max").val(ui.values[0] + "-" + ui.values[1]);
		var limit = 10;
		GetFlights(limit);
	}
});
tjq(".min-airfaress-label").html("$" + tjq("#airfaress").slider("values", 0));
tjq(".max-airfaress-label").html("$" + tjq("#airfaress").slider("values", 1));

tjq("#departure_time").slider({
	range: true,
	min: 0,
	max: 1000,
	values: [0, 1000],
	slide: function(event, ui) {
		tjq(".min-departure_time-label").html("$" + ui.values[0]);
		tjq(".max-departure_time-label").html("$" + ui.values[1]);
	},
	stop: function(event, ui) {
		tjq("#departure_timemin-max").val(ui.values[0] + "-" + ui.values[1]);
		var limit = 10;
		GetFlights(limit);
	}
});
tjq(".min-departure_time-label").html(
	"$" + tjq("#departure_time").slider("values", 0)
);
tjq(".max-departure_time-label").html(
	"$" + tjq("#departure_time").slider("values", 1)
);

tjq("#travel-range").slider({
	range: true,
	min: 0,
	max: 1000,
	values: [0, 1000],
	slide: function(event, ui) {
		tjq(".min-travel-range-label").html("$" + ui.values[0]);
		tjq(".max-travel-range-label").html("$" + ui.values[1]);
	},
	stop: function(event, ui) {
		tjq("#travel-rangemin-max").val(ui.values[0] + "-" + ui.values[1]);
		var limit = 10;
		GetFlights(limit);
	}
});
tjq(".min-travel-range-label").html(
	"$" + tjq("#travel-range").slider("values", 0)
);
tjq(".max-travel-range-label").html(
	"$" + tjq("#travel-range").slider("values", 1)
);



function show_flights(res) {

	var res = JSON.parse(res);

	if (res) {

		if (res.length > 0) {
			
			tjq("#flights").html("");

			$.each(res, function(index, val) {

				var date = new Date(null);
				date.setSeconds(val.segment[0].flight[0].duration);
				var result = date.toISOString().substr(14, 5);
				var split_date = result.split(':');
				var final_duration = split_date[0] + 'h</span> &nbsp; <span class="formatted_time">' + split_date[1] + 'm</span></span>';

				var date2 = new Date(null);
				date2.setSeconds(val.segment[1].flight[0].duration);
				var result2 = date2.toISOString().substr(14, 5);
				var split_date2 = result2.split(":");
				var final_duration2 = split_date2[0] + 'h</span> &nbsp; <span class="formatted_time">' + split_date2[1] + "m</span></span>";

				var myObject = val.terms;
				var keyNames = Object.keys(myObject);

				var price_ = myObject[keyNames[0]].price;

				var aircraft;

				if (val.segment[0].flight[0].aircraft != undefined) {
					aircraft = val.segment[0].flight[0].aircraft;
				} else {
					aircraft = '';
				}

				var aircraft2;
				if (val.segment[1].flight[0].aircraft != undefined) {
					aircraft2 = val.segment[1].flight[0].aircraft;
				} else {
					aircraft2 = '';
				}
				
				var html = '';

				html += '<div class="flight-list listing-style3 flight"> \
							<div class="new-styles-flight TPWL-widget"> \
								<div class="TPWL_widget--xl"> \
									<div class="main-ticket-box ticket ticket--with-labels ticket--one_label_baggage" role="ticket-container"> \
										<div class="ticket-scroll-container"> \
											<div class="ticket-action"> \
												<div class="ticket-action-buy"> \
													<div class="tariffs"> \
														<div class="tariffs__item tariffs__item--active " role="otherBaggage"> \
															<div class="bags-info"> \
																<div class="bags-info__icons bags-info__icons--baggage"> <i class="bag-icon bag-icon--baggage bag-icon--without-baggage bag-icon--without-weight " data-weight="x1"></i> <span class="baggage-info">Without baggage</span> </div> \
																<div class="bags-info__icons bags-info__icons--handbags"> <i class="bag-icon bag-icon--handbags bag-icon--without-handbags bag-icon--without-weight bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span> </div> \
																<div class="baggage-tooltip "> \
																	<div class="baggage-tooltip__item"><span class="baggage-info">Without baggage</span></div> \
																	<div class="baggage-tooltip__item"><span class="baggage-info">Unknown carry-on<sup>*</sup></span></div> \
																</div> \
															</div> \
														</div> \
													</div> \
												</div> \
												<div class="ticket-action__container"> \
													<div class="ticket-action-button ticket-action-button--"> \
														<div class="ticket-action-button-tooltip"><span class="currency_font currency_font--usd">' + price_ + '</span></div> \
														<a class="ticket-action-button-deeplink ticket-action-button-deeplink--" role="main-proposal-link" target="_blank" href="https://whitelabel.travelpayouts.com/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd"> \
															<span class="ticket-action-button-deeplink-text"> <span class="ticket-action-button-deeplink-text__not-mobile">Book</span> <span class="ticket-action-button-deeplink-text__mobile">Select</span> <span class="ticket-action-button-deeplink-text__not-mobile"> <br></span><strong class="ticket-action-button-deeplink-text__price--not-mobile"><span class="currency_font currency_font--usd">'+ price_ + '</span></strong> </span>  \
															<div class="ticket-action-button-deeplink-spinner"> \
																<div class="spinner"> \
																	<div></div> \
																	<div></div> \
																	<div></div> \
																</div> \
															</div> \
														</a> \
													</div> \
												</div> \
											</div> \
											<div class="ticket-details" role="ticket-details"> \
												<div class="ticket-action-airline-container"><a class="ticket-action-airline" role="main-proposal-link" target="_blank" href="/searches/f93a6f89-6ece-4934-b7d3-700b0f5ca537/clicks/1100120.html?gate_label=Mytrip.com&amp;gate_id=11&amp;fallback=https%3A%2F%2Fwhitelabel.travelpayouts.com%2Fflights%2FAMS0803NYC15031&amp;gate_currency=usd"><img class="ticket-action-airline__logo ticket-action-airline__logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/' +
											val.segment[0].flight[0]
												.operated_by
											+ '@2x.png"><img class="ticket-action-airline__logo ticket-action-airline__logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/' +
											val.segment[0].flight[0]
												.operated_by
											+ '@2x.png"></a></div> \
												<div class="flight flight--depart"> \
													<div class="flight-header"><span class="flight-header__direction">DEPART · </span><span class="flight-header__date">'+Date.parse(val.segment[0].flight[0].departure_date).toString("dd MMM yyyy")+'</span><span class="flight-header__mobile_time"><span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">00m</span></span></div> \
													<div class="flight-brief"> \
														<div class="custom_checkbox custom_checkbox--touch_clean kraynov-filter-checkbox"> \
															<input type="checkbox" role="kraynov-hash" data-is-kraynov-checkbox="true" id="kraynov_LX_737_2019-03-08+LX_16_2019-03-08" value="LX_737_2019-03-08+LX_16_2019-03-08"><label class="label-block name g-text-overflow" data-is-kraynov-checkbox="true" for="kraynov_LX_737_2019-03-08+LX_16_2019-03-08"></label>  \
															<div class="kraynov-filter-tooltip">Only show tickets that match these departure criteria</div> \
														</div> \
														<div class="flight-brief-departure"> \
															<time class="flight-brief-time">' +
											val.segment[0].flight[0].departure_time +
											'<span class="flight-brief-time__meridiem"></span></time>  \
															<div class="flight-brief-date"><span class="flight-brief-date__day">'+Date.parse(val.segment[0].flight[0].departure_date).toString("dd")+'</span>'+Date.parse(val.segment[0].flight[0].departure_date).toString("MMM")+'</div> \
															<div class="flight-brief-city" title="Amsterdam"><span class="flight-brief-city__name">Amsterdam</span><span class="flight-brief-city__iata">AMS</span></div> \
														</div> \
														<section class="flight-brief-layovers"> \
															<header class="flight-brief-layovers__flight_time"><span class="formatted_time"> '+
											final_duration
											+ '  \
															</header> \
															<main class="flight-brief-layovers__list"> \
																<div class="flight-brief-layovers__list-wrapper"> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover__iata"><span>AMS</span></div> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Amsterdam</div> \
																		</div> \
																	</div> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Zurich Airport, Zurich</div> \
																			<div class="flight-brief-layover-tooltip__duration flight-brief-layover-tooltip__durationundefined"> Layover — <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span> </div> \
																		</div> \
																	</div> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover__iata"><span>ATH</span></div> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Athens</div> \
																		</div> \
																	</div> \
																</div> \
															</main> \
														</section> \
														<div class="flight-brief-arrival"> \
															<div class="flight-brief-date"> <span class="flight-brief-date__day">'+Date.parse(val.segment[0].flight[0].arrival_date).toString("dd")+'</span> '+Date.parse(val.segment[0].flight[0].arrival_date).toString("MMM")+' </div> \
															<time class="flight-brief-time"> ' +
											val.segment[0].flight[0].arrival_time +
											' <span class="flight-brief-time__meridiem"></span> </time>  \
															<div class="flight-brief-city" title="Athens"><span class="flight-brief-city__name">Athens</span><span class="flight-brief-city__iata">ATH</span></div> \
														</div> \
													</div> \
													<div class="bags-info"> \
														<div class="bags-info__icons bags-info__icons--baggage"> <i class="bag-icon bag-icon--baggage bag-icon--without-baggage bag-icon--without-weight " data-weight="x1"></i> <span class="baggage-info">Without baggage</span> </div> \
														<div class="bags-info__icons bags-info__icons--handbags"> <i class="bag-icon bag-icon--handbags bag-icon--without-handbags bag-icon--without-weight bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span> </div> \
													</div> \
													<div class="flight-details"> \
														<section class="flight-details-leg"> \
															<div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/' + val.segment[0].flight[0].operated_by + '@2x.png"></div> \
															<div class="flight-details-leg-time"> '+
															val.segment[0].flight[0]
																.departure_time
															+' − ' + val.segment[0].flight[0].arrival_time+' <time class="flight-details-leg__duration">'+final_duration+'</time> </div> \
															<div class="flight-details-leg__direction">AMS Amsterdam Airport Schiphol<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>ATH Eleftherios Venizelos International Airport</div> \
															<div class="flight-details-leg__flight_details">'
																
																+ val.segment[0].flight[0].operated_by + '-' +
																+ val.segment[0].flight[0].number+ '.' +
																+ aircraft + 
																'<div class="flight-details-leg-ameneties"> \
																	<div class="flight-details-leg-ameneties-tooltip"> </div> \
																</div> \
															</div> \
														</section> \
														<section class="flight-details-leg--mobile"> \
															<div class="leg-brief"> \
																<div class="leg-brief__flight">Flight: LX-737</div> \
																<div class="leg-brief__carrier">Swiss&nbsp;International Air Lines</div> \
																<div class="leg-brief__time"> Flight duration: <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">25m</span> </div> \
															</div> \
															<div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/' + val.segment[0].flight[0].operated_by + '@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/' + val.segment[0].flight[0].operated_by + '@2x.png"></div> \
															<div class="leg-details"> \
																<div class="leg-details-depart"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock">07:00</div> \
																		<div class="leg-details__time-date">8 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Amsterdam</div> \
																		AMS Amsterdam Airport Schiphol  \
																	</div> \
																</div> \
																<div class="leg-details-return"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock"> 08:25 </div> \
																		<div class="leg-details__time-date ">8 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Zurich</div> \
																		ATH Eleftherios Venizelos International Airport  \
																	</div> \
																</div> \
															</div> \
															<div class="flight-details-leg-ameneties"> \
																<div class="flight-details-leg-ameneties-tooltip"> </div> \
															</div> \
														</section> \
														<section class="flight-details-leg--mobile"> \
															<div class="leg-brief"> \
																<div class="leg-brief__flight">Flight: LX-16</div> \
																<div class="leg-brief__carrier">Swiss&nbsp;International Air Lines</div> \
																<div class="leg-brief__time"> Flight duration: <span class="formatted_time">9h</span> &nbsp;<span class="formatted_time">10m</span> </div> \
															</div> \
															<div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/' + val.segment[0].flight[0].operated_by + '@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/' + val.segment[0].flight[0].operated_by + '@2x.png"></div> \
															<div class="leg-details"> \
																<div class="leg-details-depart"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock">09:50</div> \
																		<div class="leg-details__time-date">8 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Zurich</div> \
																		ATH Eleftherios Venizelos International Airport  \
																	</div> \
																</div> \
																<div class="leg-details-return"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock"> 13:00 </div> \
																		<div class="leg-details__time-date ">8 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Athens</div> \
																		ATH John F. Kennedy International Airport  \
																	</div> \
																</div> \
															</div> \
															<div class="flight-details-leg-ameneties"> \
																<div class="flight-details-leg-ameneties-tooltip"> </div> \
															</div> \
														</section> \
													</div> \
												</div> \
												<div class="flight flight--return"> \
													<div class="flight-header"><span class="flight-header__direction">RETURN · </span><span class="flight-header__date">'+Date.parse(val.segment[1].flight[0].departure_date).toString("dd MMM yyyy")+'</span><span class="flight-header__mobile_time"><span class="formatted_time">'+
											final_duration2
											+
											'</div> \
													<div class="flight-brief"> \
														<div class="custom_checkbox custom_checkbox--touch_clean kraynov-filter-checkbox"> \
															<input type="checkbox" role="kraynov-hash" data-is-kraynov-checkbox="true" id="kraynov_AC_703_2019-03-15+AC_824_2019-03-15" value="AC_703_2019-03-15+AC_824_2019-03-15"><label class="label-block name g-text-overflow" data-is-kraynov-checkbox="true" for="kraynov_AC_703_2019-03-15+AC_824_2019-03-15"></label>  \
															<div class="kraynov-filter-tooltip">Only show tickets that match these arrival criteria</div> \
														</div> \
														<div class="flight-brief-departure"> \
															<time class="flight-brief-time">'+val.segment[1].flight[0].departure_time+'<span class="flight-brief-time__meridiem"></span></time>  \
															<div class="flight-brief-date"><span class="flight-brief-date__day">'+Date.parse(val.segment[1].flight[0].departure_date).toString("dd")+'</span>'+Date.parse(val.segment[1].flight[0].departure_date).toString("MMM")+'</div> \
															<div class="flight-brief-city" title="Athens"><span class="flight-brief-city__name">Athens</span><span class="flight-brief-city__iata">AMS</span></div> \
														</div> \
														<section class="flight-brief-layovers"> \
															<header class="flight-brief-layovers__flight_time"><span class="formatted_time">'+
											final_duration2
											+
											' </header> \
															<main class="flight-brief-layovers__list"> \
																<div class="flight-brief-layovers__list-wrapper"> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover__iata"><span>ATH</span></div> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Athens</div> \
																		</div> \
																	</div> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Pearson International Airport, Toronto</div> \
																			<div class="flight-brief-layover-tooltip__duration flight-brief-layover-tooltip__duration--day"> Daytime layover — <span class="formatted_time">12h</span> &nbsp;<span class="formatted_time">04m</span> </div> \
																		</div> \
																	</div> \
																	<div class="flight-brief-layover"> \
																		<div class="flight-brief-layover__iata"><span>AMS</span></div> \
																		<div class="flight-brief-layover-tooltip"> \
																			<div class="flight-brief-layover-tooltip__airport_name">Airport Amsterdam</div> \
																		</div> \
																	</div> \
																</div> \
															</main> \
														</section> \
														<div class="flight-brief-arrival"> \
															<div class="flight-brief-date"> <span class="flight-brief-date__day">'+Date.parse(val.segment[1].flight[0].arrival_date).toString("dd")+'</span><span class="flight-brief-date__next_day"></span> '+Date.parse(val.segment[1].flight[0].arrival_date).toString("MMM")+' </div> \
															<time class="flight-brief-time"> '+val.segment[1].flight[0].arrival_time+'<span class="flight-brief-time__meridiem"></span><span class="flight-brief-date__next_day flight-brief-date__next_day--mobile"></span> </time>  \
															<div class="flight-brief-city" title="Amsterdam"><span class="flight-brief-city__name">Amsterdam</span><span class="flight-brief-city__iata">AMS</span></div> \
														</div> \
													</div> \
													<div class="bags-info"> \
														<div class="bags-info__icons bags-info__icons--baggage"> <i class="bag-icon bag-icon--baggage bag-icon--without-baggage bag-icon--without-weight " data-weight="x1"></i> <span class="baggage-info">Without baggage</span> </div> \
														<div class="bags-info__icons bags-info__icons--handbags"> <i class="bag-icon bag-icon--handbags bag-icon--without-handbags bag-icon--without-weight bag-icon--unknown-handbags" data-weight="UNKNOWN"></i><span class="baggage-info">Unknown carry-on<sup>*</sup></span> </div> \
													</div> \
													<div class="flight-details"> \
														<section class="flight-details-leg"> \
															<div class="flight-details-leg__airline"><img src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/'+
															val.segment[1].flight[0].operated_by
															+'@2x.png"></div> \
															<div class="flight-details-leg-time"> '+val.segment[1].flight[0].departure_time+' − '+val.segment[1].flight[0].arrival_time+' <time class="flight-details-leg__duration">'+final_duration2+'</time> </div> \
															<div class="flight-details-leg__direction">ATH Eleftherios Venizelos International Airport<span class="flight-details-leg__direction__right_arrow">→</span><span class="flight-details-leg__direction__left_arrow">←</span>AMS Amsterdam Airport Schiphol</div> \
															<div class="flight-details-leg__flight_details"> \ '
																
																	
																+ val.segment[1].flight[0].operated_by + '-' +
																+ val.segment[1].flight[0].number+ '.' +
																+ aircraft + 
																
																' <div class="flight-details-leg-ameneties"> \
																	<span class="flight-details-leg-ameneties__night_flight"></span>  \
																	<div class="flight-details-leg-ameneties-tooltip"> \
																		<div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div> \
																	</div> \
																</div> \
															</div> \
														</section> \
														<section class="flight-details-leg--mobile"> \
															<div class="leg-brief"> \
																<div class="leg-brief__flight">Flight: AC-703</div> \
																<div class="leg-brief__carrier">Air Canada</div> \
																<div class="leg-brief__time"> Flight duration: <span class="formatted_time">1h</span> &nbsp;<span class="formatted_time">36m</span> </div> \
															</div> \
															<div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/AC@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div> \
															<div class="leg-details"> \
																<div class="leg-details-depart"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock">'+val.segment[1].flight[0].departure_time+'</div> \
																		<div class="leg-details__time-date">15 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Athens</div> \
																		ATH Eleftherios Venizelos International Airport  \
																	</div> \
																</div> \
																<div class="leg-details-return"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock"> '+val.segment[1].flight[0].arrival_time+' </div> \
																		<div class="leg-details__time-date ">15 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Toronto</div> \
																		AMS Amsterdam Airport Schiphol  \
																	</div> \
																</div> \
															</div> \
															<div class="flight-details-leg-ameneties"> \
																<span class="flight-details-leg-ameneties__night_flight"></span>  \
																<div class="flight-details-leg-ameneties-tooltip"> \
																	<div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div> \
																</div> \
															</div> \
														</section> \
														<section class="flight-details-leg--mobile"> \
															<div class="leg-brief"> \
																<div class="leg-brief__flight">Flight: AC-824</div> \
																<div class="leg-brief__carrier">Air Canada</div> \
																<div class="leg-brief__time"> Flight duration: <span class="formatted_time">7h</span> &nbsp;<span class="formatted_time">35m</span> </div> \
															</div> \
															<div class="leg-logo"><img class="leg-logo--not_mobile" src="https://whitelabel.travelpayouts.com/images/airline/120/35/gravity=west/AC@2x.png"><img class="leg-logo--mobile" src="https://whitelabel.travelpayouts.com/images/airline/al_square/40/40/AC@2x.png"></div> \
															<div class="leg-details"> \
																<div class="leg-details-depart"> \
																	<div class="leg-details__time"> \
																		<div class="leg-details__time-clock">21:05</div> \
																		<div class="leg-details__time-date">15 Mar, Fri</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Toronto</div> \
																		AMS Amsterdam Airport Schiphol  \
																	</div> \
																</div> \
																<div class="leg-details-return"> \
																	<div class="leg-details__time"> \
																		<span class="leg-details__time__warning"> Arrival on 16 Mar, Sa </span>  \
																		<div class="leg-details__time-clock"> '+val.segment[1].flight[0].arrival_time+'<span class="flight-brief-date__next_day flight-brief-date__next_day--mobile"></span> </div> \
																		<div class="leg-details__time-date leg-details__time-date--next_day">16 Mar, Sat</div> \
																	</div> \
																	<div class="leg-details__airport"> \
																		<div>Amsterdam</div> \
																		AMS Amsterdam Airport Schiphol  \
																	</div> \
																</div> \
															</div> \
															<div class="flight-details-leg-ameneties"> \
																<span class="flight-details-leg-ameneties__night_flight"></span>  \
																<div class="flight-details-leg-ameneties-tooltip"> \
																	<div class="flight-details-leg-ameneties-tooltip__night_flight">Overnight flight</div> \
																</div> \
															</div> \
														</section> \
													</div> \
												</div> \
												<div class="flight-baggage-terms"> \
													<sup>*</sup>  \
													<p class="flight-baggage-terms__info">Baggage allowances may vary according to route, cabin class or fare family – for clarification, please contact the airline</p> \
												</div> \
												<div class="ticket-details-toggler"></div> \
											</div> \
										</div> \
									</div> \
								</div> \
							</div> \
						</div>';

				
				tjq("#flights").append(html);
			});

		} else {
			tjq('#flight').html('');
			tjq('#flight').append('<article class="box"><p> No Records! </p></article>');
			tjq('#load_more').hide();
		}

	}


}