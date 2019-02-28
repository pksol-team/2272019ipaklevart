tjq(document).ready(function () {
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
            "rooms": [{"adults": 1, "children": []}],
            "locations_ids": [_Get.cityId * 1],
            "hotels_ids": [],
            "destination": _Get.destination,
            "host": "whitelabel.travelpayouts.com",
            "flags": {"auid": "CtY4vlwx6Ngs/7YnYKm9Ag==", "ab": "main.534", "deviceType": "mobile"},
            "popularity": "default"
        },
        "selected_hotels_ids": [],
        "filters": {
            "prices": {"groups": [0, 4000, 8000, 12000, 16000, 20000, 24000, 32000, 40000, 48000, 56000, 64000, 72000, 96000, 120000, 160000, 240000, 400000, 800000, 2147483647]},
            "ratings": {"groups": [0, 0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10]}
        },
        "sort": "popularity",
        "limit": 10,
        "offset": 0
    };
    GetHotels(data, limit)
    tjq('#load_more').click(function () {
        limit += 10;
        GetHotels(data, limit)
    })
});

function GetHotels(data, limit) {
    data.limit = limit
    tjq.ajax({
        type: "POST",
        'contentType': 'application/json',
        url: "https://whitelabel.travelpayouts.com/api/wl_search/result",  //GetObjectDataByTypeById
        data: JSON.stringify(data),
        success: function (res) {
            if (res) {
                if (res.hotels.length > 0) {
                    tjq('#hotels').html('')
                    res.hotels.forEach(function (val, i) {
                        tjq('#hotels').append(

                        )
                    })
                }
            }
        }
    });
}