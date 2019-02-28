/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

jQuery(document).ready(function($) {
    function hotelHeader() {

        if ($('body').has('.mewtwo-hotels-container header.mewtwo-hotels-header + form').length > 0) {
            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-city').prepend('<div class="form-group-custom"><h4 class="title">Where</h4><label>Your Destination</label></div>');
            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates .mewtwo-hotels-dates-checkin').prepend('<div class="form-group-custom"><h4 class="title">When</h4><label>CHECK IN</label></div>');
            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates .mewtwo-hotels-dates-checkout').prepend('<div class="form-group-custom"><h4>&nbsp;</h4><label>CHECK OUT</label></div>');
            
            // $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates').after("<div class='form-group-custom'><h4 class='title'>Who</h4><div class='row'><div class='col-xs-4'><label>Rooms</label><div class='selector'><select class='full-width month-select-hotel select_room'><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option><option value='5'>05</option><option value='6'>06</option><option value='7'>07</option><option value='8'>08</option><option value='9'>09</option><option value='10'>10</option></select><span class='custom-select full-width'>01</span></div></div><div class='col-xs-4'><label>Adults</label><div class='selector'><select class='full-width select-adults'><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option></select><span class='custom-select full-width'>01</span></div></div><div class='col-xs-4'><label>Kids</label><div class='selector'><select class='full-width select-kids'><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option><option value='5'>05</option><option value='6'>06</option><option value='7'>07</option><option value='8'>08</option><option value='9'>09</option><option value='10'>10</option></select><span class='custom-select full-width'>01</span></div></div></div></div");
            


            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates').after("<div class='form-group-custom'><h4 class='title'>Who</h4><div class='row'><div class='col-xs-6' style='width: 48%; padding-left: 12px !important; float: left !important;'><label>Adults</label><div class='selector'><select class='full-width select-adults'><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option></select><span class='custom-select full-width'>01</span></div></div><div class='col-xs-6' style='width: 48%; float: right !important; padding-right: 12px !important;'><label>Kids</label><div class='selector'><select class='full-width select-kids'><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option></select><span class='custom-select full-width'>01</span></div></div></div></div>");

            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-city input').attr('placeholder', 'enter a destination or hotel name');
            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates .mewtwo-hotels-dates-checkin input[type=text]').removeAttr('placeholder');
            $('.mewtwo-widget section.mewtwo-hotels form .mewtwo-hotels-dates .mewtwo-hotels-dates-checkout input[type=text]').removeAttr('placeholder');

            $("<div class='two-slextion'></div>").insertBefore(".mewtwo-widget .mewtwo-flights-origin");
            $('.mewtwo-widget .mewtwo-flights-origin, .mewtwo-widget .mewtwo-flights-destination').appendTo('.two-slextion');

            $('.mewtwo-widget .mewtwo-flights-origin').prepend('<div class="form-group-custom"><h4 class="title">Where</h4><label>LEAVING FROM</label></div>');
        
            $('.mewtwo-widget .mewtwo-flights-destination').prepend('<div class="form-group-custom"><label>GOING TO</label></div>');

            $('.mewtwo-widget .mewtwo-flights .mewtwo-flights-dates.mewtwo-flights-dates--new .mewtwo-flights-dates-depart').prepend('<div class="form-group-custom"><h4 class="title">When</h4><label>DEPARTING ON</label></div>');
            $('.mewtwo-widget .mewtwo-flights .mewtwo-flights-dates.mewtwo-flights-dates--new .mewtwo-flights-dates-return.mewtwo-flights-dates-return--filled').prepend('<div class="form-group-custom"><label>ARRIVING ON</label></div>');
            $('<div class="passengers-selection"><h4 class="title">Who</h4><div class="form-group row"><div class="col-xs-6"><label>Adults</label><div class="selector"><select class="full-width"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option></select><span class="custom-select full-width">01</span></div></div><div class="col-xs-6"><label>Kids</label><div class="selector"><select class="full-width"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option></select><span class="custom-select full-width">01</span></div></div><div class="col-xs-6 infants-marg"><label>Infants</label><div class="selector"><select class="full-width"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option></select><span class="custom-select full-width">01</span></div></div></div></div>').insertAfter('.mewtwo-widget .mewtwo-flights .mewtwo-flights-dates.mewtwo-flights-dates--new');

            clearInterval(aVar);
        }

    }
    jQuery('section#content .search-box ul.search-tabs li').click(function(e) {

        setTimeout(function() {
            jQuery('section.mewtwo-flights form .two-slextion .mewtwo-flights-origin input[name="origin_name"]').attr('placeholder', 'City, distirct or specific airpot');
            
            jQuery('section.mewtwo-flights.mewtwo-tabs-container .mewtwo-flights-destination input[type="text"]').attr('placeholder', 'City, distirct or specific airpot');
        }, 500);
    });

    var aVar = setInterval(hotelHeader, 500);
});


tjq(document).ready(function($) {
    
    tjq(document).on('change', '.select_room', function(e) {
        var $this = tjq(this);
        tjq('[id*="hotels-rooms"]').val($this.val());
    });

    tjq(document).on('change', '.select-adults', function(e) { 
        var $this = tjq(this);
        tjq('[name="adults"]').val($this.val());
    });

    tjq(document).on('change', '.select-kids', function(e) { 
        var $this = tjq(this);
        tjq('[name="children"]').val($this.val());
    });
    
   
});