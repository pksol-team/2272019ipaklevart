tjq(document).ready(function () {
    
    var limit = 10;
    GetHotels(limit);
    
    tjq('#load_more').click(function () {

        limit += 10;
        GetHotels(limit);

    });

});

function GetHotels(limit) {

    var min_max = tjq('#min-max').val();
    var ratings = tjq('#rating-hidden').val();
    var amenities = tjq('#amenities-hidden').val();
    var sort = tjq('#sort_filter_hidden').val();
    var guest_rating = tjq("#guest-rating-input").val();
    var hotel_amenities = tjq('#hotel_amenities-hidden').val();

    tjq.ajax({
        
        url: '/site/showhotels',
        type: 'POST',
        data: {
            limit: limit,
            min_max: min_max,
            ratings: ratings,
            amenities: amenities,
            sort: sort,
            guest_rating: guest_rating,
            hotel_amenities: hotel_amenities
        },
        
        success: function (res) {
            show_hotels(res);
        }

    });

}



tjq("#price-range").slider({
    range: true,
    min: 0,
    max: 1000,
    values: [0, 1000],
    slide: function( event, ui ) {
        
        tjq(".min-price-label").html( "$" + ui.values[ 0 ]);

        tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
    },

    stop: function( event, ui ) {
      
        tjq("#min-max").val(ui.values[ 0 ]+'-'+ui.values[ 1 ]);
        var limit = 10;
        GetHotels(limit);

    }

});


tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));





tjq("#guest-rating-range").slider({
    range: true,
    min: 0,
    max: 10,
    values: [0, 10],
    slide: function( event, ui ) {
        
        tjq(".min-guest-label").html(ui.values[ 0 ]);

        tjq(".max-guest-label").html(ui.values[ 1 ]);
    },

    stop: function( event, ui ) {
      
        tjq("#guest-rating-input").val(ui.values[ 0 ]+'-'+ui.values[ 1 ]);
        var limit = 10;
        GetHotels(limit);

    }

});


tjq(".min-guest-label").html(tjq("#guest-rating-range").slider( "values", 0 ));
tjq(".max-guest-label").html(tjq("#guest-rating-range").slider( "values", 1 ));




tjq("#rating").slider({
    range: "min",
    value: 0,
    min: 0,
    max: 50,
    slide: function( event, ui ) {

    },
    stop: function( event, ui) {

        var star = Math.round(ui.value/10);

        tjq('#rating-hidden').val(star);

        tjq('#rating .ui-slider-range.ui-widget-header.ui-corner-all.ui-slider-range-min').css('width', star*20+'%');

        var limit = 10;
        GetHotels(limit);

    }
});


tjq('#sort-filter li').click(function() {

    var $this = tjq(this);        
    var val = 'default';

    $this.siblings('li').removeClass('active');

    if ($this.hasClass('active')) {
        val = $this.find('a').attr('data-value');
    }

    tjq('#sort_filter_hidden').val(val);

    var limit = 10;
    GetHotels(limit);

});

tjq('#amenities-filter li').click(function(e) {
    
    var $this = tjq(this);
    var activeAmeneties = $this.parent().find('.active')


    var values = 'default,';

    if (activeAmeneties.length > 0 ) {
        
        var values = '';
        activeAmeneties.each(function(index, el) {
            var $el = tjq(el);
            var list = $el.children('a').attr('data-value');
            values += list+',';
        });
    }

    tjq('#amenities-hidden').val( values.slice(0,-1) );
    var limit = 10;
    GetHotels(limit);

});



tjq('#hotel-amenities-filter li').click(function(e) {
    
    var $this = tjq(this);
    var activeAmeneties = $this.parent().find('.active')

    var values = 'default,';

    if (activeAmeneties.length > 0 ) {
        
        var values = '';
        activeAmeneties.each(function(index, el) {
            var $el = tjq(el);
            var list = $el.children('a').attr('data-value');
            values += list+',';
        });
    }

    tjq('#hotel_amenities-hidden').val( values.slice(0,-1) );
    var limit = 10;
    GetHotels(limit);

});


function show_hotels(res) {

    var res = JSON.parse(res);

    if (res) {

        amenitiesIconsNames = [{
            'restaurant': '<i class="soap-icon-star circle"></i>',
            'parking': '<i class="soap-icon-parking circle"></i>',
            'pets': '<i class="soap-icon-pets circle"></i>',
            'tv': '<i class="soap-icon-television circle"></i>',
            'laundry': '<i class="soap-icon-tub circle"></i>',
            'air conditioning': '<i class="soap-icon-aircon circle"></i>',
            'pool': '<i class="soap-icon-swimming circle"></i>',
            'fitness': '<i class="soap-icon-fitnessfacility circle"></i>',
            'wi-fi in public areas': '<i class="soap-icon-wifi circle"></i>',
            'hairdryer': '<i class="soap-icon-conference circle"></i>',
            'safe': '<i class="soap-icon-securevault circle"></i>',
            'babysitting': '<i class="soap-icon-star circle"></i>',
            'disabled facilities': '<i class="soap-icon-doorman circle"></i>',
            '24h. reception': '<i class="soap-icon-elevator circle"></i>',
            'spa': '<i class="soap-icon-star circle"></i>',
            'smoking room': '<i class="soap-icon-smoking circle"></i>'
        }];
        
        if (res.hotels.length > 0) {
            tjq('#hotels').html('')
            res.hotels.forEach(function (val, i) {
                var amenities = '';
                tjq.each(val.amenities, function(index_amenities, amenities_val) {
                    if (index_amenities < 4) {
                    tjq.each(res.hotels_amenities, function(index_hotels_amenities, hotels_amenities_val) {
                        if (amenities_val == index_hotels_amenities) {
                            tjq.each(amenitiesIconsNames[0], function(index, amenitiesIconsNames_val) {
                                if (index == hotels_amenities_val.slug) {
                                    amenities += amenitiesIconsNames_val;
                                }
                            });
                        }
                    });
                    }else{
                        return false;
                    }
                });


                var HotelImages = val.photos_ids;

                
                
                var hotel_images_list = [];
                tjq.each(HotelImages, function(index, val) {

                    hotel_images_list.push(val);
                    // slides += "<li><img src='https://photo.hotellook.com/image_v2/crop/"+val+"/900/500.auto' alt='' /></li>";
                    // slidesthumb += "<li><img src='https://photo.hotellook.com/image_v2/crop/"+val+"/70/70.auto' alt='' /></li>";
                });


                    var yourString = JSON.stringify(hotel_images_list);
                    var result = '{'+yourString.substring(1, yourString.length-1)+'}';
                    var hidden_images = '<input type="hidden" class="all_images" value=\''+result+'\'>';

                tjq('#hotels').append(
                    `<article class="box">
                    <figure class="col-sm-5 col-md-4">
                    `+hidden_images+`
                        <a href="/site/hotel_images?location_id=` + val.location_id + `&hotels_id=`+val.id+`" class="hover-effect popup-gallery">
                        <img width="270" height="160" alt="" src="https://photo.hotellook.com/image_v2/crop/` + val.photos_ids[0] + `/270/160.auto"></a>
                    </figure>
                    <div class="details col-sm-7 col-md-8">
                        <div>
                            <div>
                                <h4 class="box-title">` + val.name + `
                                    <small><i class="soap-icon-departure yellow-color"></i>` + val.address + `</small>
                                </h4>
                                <div class="amenities">`
                                +amenities+
                                `</div>
                            </div>
                            <div>
                                <div class="five-stars-container">
                                    <span class="five-stars" style="width: ` + val.stars * 20 + `%;"></span>
                                </div>
                                <span class="review">` + val.reviews_count + ` reviews</span>
                            </div>
                        </div>
                        <div>
                            <p>` + val.description + `</p>
                            <div>
                                <span class="price"><small>` + _Get.currency + `</small>` + val.minprice + `</span>
                                <a class="button btn-small full-width text-center" title="" 
                                href="/site/hotel-detailed?location_id=` + val.location_id + `&hotels_id=`+val.id+`">
                                More Info</a>
                            </div>
                        </div>
                    </div>
                </article>`
                )
            })

            if (tjq('#hotels').find('article.box').length == res.filtered_hotels) {
                tjq('#load_more').hide();
            } else {
                tjq('#load_more').show();
            }

        } else {
            tjq('#hotels').html('');
            tjq('#hotels').append('<article class="box"><p> No Hotels! </p></article>');
            tjq('#load_more').hide();
        }
    }
}