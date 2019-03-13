tjq(document).ready(function() {

    var limit = 10;



    var data = {

        "page": "serp",

        "search_id": "e091e930-cd57-43e0-b151-f353858d49cb",

        "params": {

            "check_in": _Get.checkIn,

            "check_out": _Get.checkOut,

            "marker": "11501.BAhJIgoxMTUwMQY6BkVU--25548f740cfe6d33430a109169398304a84dcb99.$1489",

            "currency": _Get.currency,

            "locale": "en",

            "rooms": [{
                "adults": 1,
                "children": []
            }],

            "locations_ids": [_Get.cityId * 1],

            "hotels_ids": [],

            "destination": _Get.destination,

            "host": "whitelabel.travelpayouts.com",

            "flags": {
                "auid": "CtY4vlwx6Ngs/7YnYKm9Ag==",
                "ab": "main.534",
                "deviceType": "mobile"
            },

            "popularity": "default"

        },

        "selected_hotels_ids": [],

        "filters": {

            "prices": {
                "groups": [0, 4000, 8000, 12000, 16000, 20000, 24000, 32000, 40000, 48000, 56000, 64000, 72000, 96000, 120000, 160000, 240000, 400000, 800000, 2147483647]
            },

            "ratings": {
                "groups": [0, 0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10]
            }

        },

        "sort": "popularity",

        "limit": 10,

        "offset": 0

    };

    GetHotels(data, limit)

    tjq('#load_more').click(function() {

        limit += 10;

        GetHotels(data, limit)

    })

});



function GetHotels(data, limit) {

    data.limit = limit

    tjq.ajax({

        type: "POST",

        'contentType': 'application/json',

        url: "https://whitelabel.travelpayouts.com/api/wl_search/result", //GetObjectDataByTypeById

        data: JSON.stringify(data),

        success: function(res) {

            if (res) {

                if (res.hotels.length > 0) {

                    tjq('#hotels').html('')

                    res.hotels.forEach(function(val, i) {

                        tjq('#hotels').append(



                        )

                    })

                }

            }

        }

    });

}

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
        tjq("#min-max").val(ui.values[0] + '-' + ui.values[1]);
        var limit = 10;
        GetHotels(limit);
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
        tjq("#duration-min-max").val(ui.values[0] + '-' + ui.values[1]);
        var limit = 10;
        GetHotels(limit);
    }
});
tjq(".min-duration_stop-label").html("$" + tjq("#duration_stop").slider("values", 0));
tjq(".max-duration_stop-label").html("$" + tjq("#duration_stop").slider("values", 1));



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
        tjq("#airfaressmin-max").val(ui.values[0] + '-' + ui.values[1]);
        var limit = 10;
        GetHotels(limit);
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
        tjq("#departure_timemin-max").val(ui.values[0] + '-' + ui.values[1]);
        var limit = 10;
        GetHotels(limit);
    }
});
tjq(".min-departure_time-label").html("$" + tjq("#departure_time").slider("values", 0));
tjq(".max-departure_time-label").html("$" + tjq("#departure_time").slider("values", 1));



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
        tjq("#travel-rangemin-max").val(ui.values[0] + '-' + ui.values[1]);
        var limit = 10;
        GetHotels(limit);
    }
});
tjq(".min-travel-range-label").html("$" + tjq("#travel-range").slider("values", 0));
tjq(".max-travel-range-label").html("$" + tjq("#travel-range").slider("values", 1));