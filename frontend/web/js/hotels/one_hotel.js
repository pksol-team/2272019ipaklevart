function updateDonutChart (el, percent, donut) {
    percent = Math.round(percent);
    if (percent > 100) {
        percent = 100;
    } else if (percent < 0) {
        percent = 0;
    }
    var deg = Math.round(360 * (percent / 100));

    if (percent > 50) {
        tjq(el + ' .pie').css('clip', 'rect(auto, auto, auto, auto)');
        tjq(el + ' .right-side').css('transform', 'rotate(180deg)');
    } else {
        tjq(el + ' .pie').css('clip', 'rect(0, 1em, 1em, 0.5em)');
        tjq(el + ' .right-side').css('transform', 'rotate(0deg)');
    }
    if (donut) {
        tjq(el + ' .right-side').css('border-width', '0.1em');
        tjq(el + ' .left-side').css('border-width', '0.1em');
        tjq(el + ' .shadow').css('border-width', '0.1em');
    } else {
        tjq(el + ' .right-side').css('border-width', '0.5em');
        tjq(el + ' .left-side').css('border-width', '0.5em');
        tjq(el + ' .shadow').css('border-width', '0.5em');
    }
    tjq(el + ' .num').text(percent);
    tjq(el + ' .left-side').css('transform', 'rotate(' + deg + 'deg)');
}







tjq(document).ready(function () {

    var limit = 1;
    var data = {
        "page": "hotel_page",
        "search_id": "9fc70ef6-9d49-4c3b-8c3e-74bc323cba07",
        "params": {
            "check_in": "2020-01-03",
            "check_out": "2020-01-05",
            "marker": "11501.BAhJIgoxMTUwMQY6BkVU--25548f740cfe6d33430a109169398304a84dcb99.$1489",
            "currency": "usd",
            "locale": "en",
            "rooms": [
                {
                    "adults": 2,
                    "children": [
                        7,
                        7
                    ]
                }
            ],
            "locations_ids": [
                _Get.location_id * 1
            ],
            "hotels_ids": [
                _Get.hotels_id * 1
            ],
            "destination": "Yerevan",
            "search_id": "9fc70ef6-9d49-4c3b-8c3e-74bc323cba07",
            "hotel_name": "Aviatrans Hotel",
            "host": "whitelabel.travelpayouts.com",
            "flags": {
                "auid": "CtY4vlwx6Ngs/7YnYKm9Ag==",
                "ab": "main.534",
                "deviceType": "desktop"
            },
            "popularity": "default"
        },
        "selected_hotels_ids": [],
        "filters": {},
        "sort": "popularity",
        "limit": 1,
        "offset": 0
    }
    GetHotels(data, limit)


    tjq(document).ready(function() {
        // calendar panel
        const monthNames = ["January", "February", "March", "April", "May", "June",
          "July", "August", "September", "October", "November", "December"
        ];
        var cal = new Calendar();
        var unavailable_days = [17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
        var price_arr = {3: '$170', 4: '$170', 5: '$170', 6: '$170', 7: '$170', 8: '$170', 9: '$170', 10: '$170', 11: '$170', 12: '$170', 13: '$170', 14: '$170', 15: '$170', 16: '$170', 17: '$170'};
        
        var current_date = new Date();
        var current_year_month = (1900 + current_date.getYear()) + "-" + (current_date.getMonth() + 1);
        cal.generateHTML(current_date.getMonth(), (1900 + current_date.getYear()), unavailable_days, price_arr);
        tjq(".calendar").html(cal.getHTML());

        for (var i = 0; i < 6; i++) {
            var current_year_month_new = (1900 + current_date.getYear()) + "-" + (current_date.getMonth() + 1);
            var Newmonth = current_date.setMonth( current_date.getMonth() + 1 );
            tjq("#select-month").append(new Option(monthNames[current_date.getMonth() - 1] +' '+ (1900 + current_date.getYear()), current_year_month_new));
            tjq("#reviewselector").append(new Option(monthNames[current_date.getMonth() - 1] +' '+ (1900 + current_date.getYear()), current_year_month_new));
        }

        tjq(".selector select").each(function() {
            var obj = tjq(this);
            if (obj.parent().children(".custom-select").length < 1) {
                obj.after("<span class='custom-select'>" + obj.children("option:selected").html() + "</span>");
                
                if (obj.hasClass("white-bg")) {
                    obj.next("span.custom-select").addClass("white-bg");
                }
                if (obj.hasClass("full-width")) {
                    //obj.removeClass("full-width");
                    //obj.css("width", obj.parent().width() + "px");
                    //obj.next("span.custom-select").css("width", obj.parent().width() + "px");
                    obj.next("span.custom-select").addClass("full-width");
                }
            }
        });

        tjq("#select-month").find("[value='" + current_year_month + "']").attr('selected','selected');

        tjq("#select-month").change(function() {
            var selected_year_month = tjq("#select-month option:selected").val();
            var year = parseInt(selected_year_month.split("-")[0], 10);
            var month = parseInt(selected_year_month.split("-")[1], 10);
            cal.generateHTML(month - 1, year, unavailable_days, price_arr);
            tjq(".calendar").html(cal.getHTML());
        });


        tjq(".goto-writereview-pane").click(function(e) {
            e.preventDefault();
            tjq('#hotel-features .tabs a[href="#hotel-write-review"]').tab('show')
        });

        // editable rating
        tjq(".editable-rating.five-stars-container").each(function() {
            var oringnal_value = tjq(this).data("original-stars");
            if (typeof oringnal_value == "undefined") {
                oringnal_value = 0;
            } else {
                //oringnal_value = 10 * parseInt(oringnal_value);
            }
            // tjq(this).slider({
            //     range: "min",
            //     value: oringnal_value,
            //     min: 0,
            //     max: 5,
            //     slide: function( event, ui ) {

            //     }
            // });
        });
    });

    tjq('a[href="#map-tab"]').on('shown.bs.tab', function (e) {
        var center = panorama.getPosition();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
    tjq('a[href="#steet-view-tab"]').on('shown.bs.tab', function (e) {
        fenway = panorama.getPosition();
        panoramaOptions.position = fenway;
        panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'), panoramaOptions);
        map.setStreetView(panorama);
    });
    var map = null;
    var panorama = null;
    var fenway = new google.maps.LatLng(48.855702, 2.292577);
    var mapOptions = {
        center: fenway,
        zoom: 12
    };
    var panoramaOptions = {
        position: fenway,
        pov: {
            heading: 34,
            pitch: 10
        }
    };
    function initialize() {
        tjq("#map-tab").height(tjq("#hotel-main-content").width() * 0.6);
        map = new google.maps.Map(document.getElementById('map-tab'), mapOptions);
        panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'), panoramaOptions);
        map.setStreetView(panorama);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});

function GetHotels(data, limit) {
    data.limit = limit
    tjq.ajax({
        type: "POST",
        'contentType': 'application/json',
        url: "https://whitelabel.travelpayouts.com/api/wl_search/result",  //GetObjectDataByTypeById
        data: JSON.stringify(data),
        success: function (val) {
            if (val) {
                var HotelImages = val.hotels[0].photos_ids;
                tjq('.detailed-logo img').attr('src','https://photo.hotellook.com/image_v2/crop/'+val.hotels[0].photos_ids[0]+'/114/85.auto');
                tjq('article.image-box figure img').attr('src','https://photo.hotellook.com/image_v2/crop/'+val.hotels[0].photos_ids[0]+'/270/160.auto');
                tjq('.r_title').html(val.hotels[0].name);
                tjq('.details span.city-country').html(val.locations[val.hotels[0].location_id]['name'] +', '+val.locations[val.hotels[0].location_id]['country_name']);
                tjq('.d_description_name').html(val.hotels[0].name);
                tjq('.d_description, .details p.description').html(val.hotels[0].description);
                tjq('span.price span').html('$' +val.hotels[0].minprice);
                tjq('.feedback span.review').html(val.hotels[0].reviews_count +' reviews');
                tjq('.feedback div.five-stars-container span').attr('style', 'width: '+val.hotels[0].rating*10+'%;');
                tjq('.features ul li.hotel-country').html('<label>Country:</label>'+ val.locations[val.hotels[0].location_id]['country_name']);
                tjq('.features ul li.hotel-city').html('<label>City:</label>'+ val.locations[val.hotels[0].location_id]['name']);
                tjq('.features ul li.hotel-type').html('<label>Hotel type:</label>'+ val.hotels[0].stars+ ' star');
                tjq('.details h4').html(val.hotels[0].name +"<small><i class='soap-icon-departure'></i> "+val.locations[val.hotels[0].location_id]['name'] +', '+val.locations[val.hotels[0].location_id]['country_name']+"</small>");
                var Amenities = '';
                
                tjq.each(val.hotels[0].amenitiesv2.categories.hotel.values, function(index, val) {
                    Amenities += "<li class='col-md-4 col-sm-6'><div class='icon-box style1'><i class='soap-icon-star-1'></i>"+val.name+"</div></li>";
                });

                tjq.each(val.hotels[0].amenitiesv2.categories.room.values, function(index, val) {
                    Amenities += "<li class='col-md-4 col-sm-6'><div class='icon-box style1'><i class='soap-icon-star-1'></i>"+val.name+"</div></li>";
                });

                tjq('ul.amenities').html(Amenities);


                var slides = '';
                var slidesthumb = '';
                tjq.each(HotelImages, function(index, val) {
                    slides += "<li><img src='https://photo.hotellook.com/image_v2/crop/"+val+"/900/500.auto' alt='' /></li>";
                    slidesthumb += "<li><img src='https://photo.hotellook.com/image_v2/crop/"+val+"/70/70.auto' alt='' /></li>";
                });
                tjq('.photo-gallery ul.slides').html(slides);
                tjq('.image-carousel ul.slides').html(slidesthumb);

                tjq('.image-carousel').each(function() {
                    displayImageCarousel(tjq(this));
                });
                tjq('.photo-gallery').each(function() {
                    displayPhotoGallery(tjq(this));
                });

                var trustYou = val.trustyou[Object.keys(val.trustyou)[0]];

                // var first_box = Math.round( (trustYou.sentiment_score_list.length) / 2 );
                // var second_box = trustYou.sentiment_score_list.length - first_box;

                
                // for (var i = 0; i < first_box; i++) {
                //     var data = trustYou.sentiment_score_list[i];
                //     var score = (data.score).toString();
                //     tjq('<div class="demo" data-width="'+ (data.score) +'" data-background="#4dccf6">'+ data.category_name + ' ('+score.charAt(0)+'.'+score.charAt(1)+')</div>').appendTo(tjq('.chart-two'));
                // }

                // for (var i = first_box; i < trustYou.sentiment_score_list.length; i++) {
                //     var data = trustYou.sentiment_score_list[i];
                //     var score = (data.score).toString();
                //     tjq('<div class="demo" data-width="'+ (data.score) +'" data-background="#4dccf6">'+ data.category_name + ' ('+score.charAt(0)+'.'+score.charAt(1)+')</div>').appendTo(tjq('.chart-three'));
                // }
                
                var first_box = trustYou.sentiment_score_list.length;
                for (var i = 0; i < first_box; i++) {
                    var data = trustYou.sentiment_score_list[i];
                    var score = (data.score).toString();
                    tjq('<div class="demo" data-width="'+ (data.score) +'" data-background="#4dccf6">'+ data.category_name + ' ('+score.charAt(0)+'.'+score.charAt(1)+')</div>').appendTo(tjq('.chart-two'));
                }
                

                tjq('.demo').simpleSkillbar({});

                var pie = trustYou.summary;
                updateDonutChart('#specificChart', pie.score, true);
                var stringScore = (pie.score).toString();
                tjq('.num').html( stringScore.charAt(0)+'.'+stringScore.charAt(1) );
                tjq('.based-1').html('based on '+pie.reviews_count);



            }
        }
    });
}