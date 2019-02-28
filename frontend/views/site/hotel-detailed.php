<?php
/* @var $this yii\web\View */
//$this->registerJsFile('https://whitelabel.travelpayouts.com/widgets/whitelabel_en.js');
$this->registerJsFile('//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false');
$this->registerJsFile('/main/components/flexslider/jquery.flexslider-min.js');
$this->registerJsFile('/main/js/calendar.js');
$this->registerJsFile('/js/hotels/one_hotel.js');

?>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/simple-donut.css" type="text/css">

<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">Hotel Detailed</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li class="active">Hotel Detailed</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div class="row">
            <div id="main" class="col-md-9">
                <div class="tab-container style1" id="hotel-main-content">
                    <ul class="tabs">
                        <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                        <li><a data-toggle="tab" href="#map-tab">map</a></li>
                        <li><a data-toggle="tab" href="#steet-view-tab">street view</a></li>
                        <!-- <li><a data-toggle="tab" href="#calendar-tab">calendar</a></li> -->
                        <li class="pull-right"><a class="button btn-small yellow-bg white-color" href="#">TRAVEL GUIDE</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="photos-tab" class="tab-pane fade in active">
                            <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                <ul class="slides">
                                </ul>
                            </div>
                            <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                <ul class="slides">
                                </ul>
                            </div>
                        </div>
                        <div id="map-tab" class="tab-pane fade">

                        </div>
                        <div id="steet-view-tab" class="tab-pane fade" style="height: 500px;">

                        </div>
                        <div id="calendar-tab" class="tab-pane fade">
                            <label>SELECT MONTH</label>
                            <div class="col-sm-6 col-md-4 no-float no-padding">
                                <div class="selector">
                                    <select class="full-width" id="select-month">
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="calendar"></div>
                                    <div class="calendar-legend">
                                        <label class="available">available</label>
                                        <label class="unavailable">unavailable</label>
                                        <label class="past">past</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="description">
                                        The calendar is updated every five minutes and is only an approximation of availability.
                                        <br /><br />
                                        Some hosts set custom pricing for certain days on their calendar, like weekends or holidays. The rates listed are per day and do not include any cleaning fee or rates for extra people the host may have for this listing. Please refer to the listing's Description tab for more details.
                                        <br /><br />
                                        We suggest that you contact the host to confirm availability and rates before submitting a reservation request.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="hotel-features" class="tab-container">
                    <ul class="tabs">
                        <li class="active"><a href="#hotel-description" data-toggle="tab">Property Details</a></li>
                        
                        <li><a href="#guest-rating" data-toggle="tab">Guest Rating</a></li>
                        
                        <li><a href="#hotel-things-todo" data-toggle="tab">More Rooms</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="hotel-description">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                <div class="col-sm-11 col-lg-11 features table-cell">
                                    <ul>
                                        <li class="hotel-type"><label>hotel type:</label>4 star</li>
                                        <!-- <li class="hotel-extra-poeple"><label>Extra people:</label>No Charge</li> -->
                                        <!-- <li class="hotel-min-stay"><label>Minimum Stay:</label>2 nights</li> -->
                                        <!-- <li class="hotel-deposit"><label>Security Deposit:</label>$279</li> -->
                                        <li class="hotel-country"><label>Country:</label>France</li>
                                        <li class="hotel-city"><label>City:</label>Paris</li>
                                        <!-- <li class="hotel-neighborhood"><label>Neighborhood:</label>République</li> -->
                                        <li class="hotel-cancellation"><label>Cancellation:</label>strict</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="long-description">
                                <h2>About <span class="d_description_name"></span></h2>
                                <p class="d_description"></p>
                            </div>

                            <div class="long-description">
                                <h2>Amenities</h2>
                                <ul class="amenities clearfix style1">
                                </ul>
                                <br />
                            </div>



                        </div>
                        
                        <div class="tab-pane fade" id="guest-rating">
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 chart-one"> 
                                &nbsp;
                                <div id="specificChart" class="donut-size">
                                    <div class="pie-wrapper">
                                        
                                        <span class="label">
                                            <label class="rating_type">Average rating </label>
                                            <span class="num">0</span>
                                            <label class="based based-1">based on 3739 </label>
                                            <label class="based"> reviews</label>
                                        </span>

                                        <div class="pie">
                                            <div class="left-side half-circle"></div>
                                            <div class="right-side half-circle"></div>
                                        </div>
                                        <div class="shadow"></div>
                                    </div>
                                </div>
    
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-8 chart-two">&nbsp;</div>

                            <!--<div class="col-lg-4 col-md-4 col-sm-4 chart-two">&nbsp;</div>-->

                            <!--<div class="col-lg-4 col-md-4 col-sm-4 chart-three">&nbsp;</div>-->

                        </div>

                        <div class="tab-pane fade" id="hotel-reviews">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                <div class="rating table-cell col-sm-4">
                                    <span class="score">3.9/5.0</span>
                                    <div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div>
                                    <a href="#" class="goto-writereview-pane button green btn-small full-width">WRITE A REVIEW</a>
                                </div>
                                <div class="table-cell col-sm-8">
                                    <div class="detailed-rating">
                                        <ul class="clearfix">
                                            <li class="col-md-6"><div class="each-rating"><label>service</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>Value</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>Sleep Quality</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>Cleanliness</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>location</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>rooms</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>swimming pool</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            <li class="col-md-6"><div class="each-rating"><label>fitness facility</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="guest-reviews">
                                <h2>Guest Reviews</h2>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">Jessica Brown</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">We had great experience while our stay and Hilton Hotels!</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container"><div class="five-stars" style="width: 80%;"></div></div>
                                                <span class="score">4.0/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">David Jhon</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">I love the speediness of their services.</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container"><div class="five-stars" style="width: 64%;"></div></div>
                                                <span class="score">3.2/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">Kyle Martin</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">When you look outside from the windows its breath taking.</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container"><div class="five-stars" style="width: 76%;"></div></div>
                                                <span class="score">3.8/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="button full-width btn-large">LOAD MORE REVIEWS</a>
                        </div>

                        <div class="tab-pane fade" id="hotel-things-todo">
                            <h2>Things to Do</h2>
                            <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                            <div class="activities image-box style2 innerstyle">
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container"><div style="width: 60%;" class="five-stars"></div></div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Central Park Walking Tour</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container"><div style="width: 60%;" class="five-stars"></div></div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Museum of Modern Art</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container"><div style="width: 60%;" class="five-stars"></div></div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Crazy Horse Cabaret Show</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotel-write-review">
                            <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                <article class="image-box box hotel listing-style1 photo table-cell col-sm-4">
                                    <figure>
                                        <a class="hover-effect" title="" href="#"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Hilton Hotel and Resorts
                                            <small><i class="soap-icon-departure"></i> Paris, france</small>
                                        </h4>
                                        <div class="feedback">
                                            <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 100%;"></span></div>
                                            <span class="review">270 reviews</span>
                                        </div>
                                    </div>
                                </article>
                                <div class="table-cell col-sm-8">
                                    <div class="overall-rating">
                                        <h4>Your overall Rating of this property</h4>
                                        <div class="star-rating clearfix">
                                            <div class="five-stars-container"><div class="five-stars" style="width: 80%;"></div></div>
                                            <span class="status">VERY GOOD</span>
                                        </div>
                                        <div class="detailed-rating">
                                            <ul class="clearfix">
                                                <li class="col-md-6"><div class="each-rating"><label>service</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Value</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Sleep Quality</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Cleanliness</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>location</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>rooms</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>swimming pool</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>fitness facility</label><div class="five-stars-container editable-rating" data-original-stars="4"></div></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="review-form">
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">Title of your review</h4>
                                    <input type="text" name="review-title" class="input-text full-width" value="" placeholder="enter a review title" />
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Your review</h4>
                                    <textarea class="input-text full-width" placeholder="enter your review (minimum 200 characters)" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">What sort of Trip was this?</h4>
                                    <ul class="sort-trip clearfix">
                                        <li><a href="#"><i class="soap-icon-businessbag circle"></i></a><span>Business</span></li>
                                        <li><a href="#"><i class="soap-icon-couples circle"></i></a><span>Couples</span></li>
                                        <li><a href="#"><i class="soap-icon-family circle"></i></a><span>Family</span></li>
                                        <li><a href="#"><i class="soap-icon-friends circle"></i></a><span>Friends</span></li>
                                        <li><a href="#"><i class="soap-icon-user circle"></i></a><span>Solo</span></li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">When did you travel?</h4>
                                    <div class="selector">
                                        <select class="full-width" id="reviewselector">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Add a tip to help travelers choose a good room</h4>
                                    <textarea class="input-text full-width" rows="3" placeholder="write something here"></textarea>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">Do you have photos to share? <small>(Optional)</small> </h4>
                                    <div class="fileinput full-width">
                                        <input type="file" class="input-text" data-placeholder="select image/s" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Share with friends <small>(Optional)</small></h4>
                                    <p>Share your review with your friends on different social media networks.</p>
                                    <ul class="social-icons icon-circle clearfix">
                                        <li class="twitter"><a title="Twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                        <li class="facebook"><a title="Facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                        <li class="googleplus"><a title="GooglePlus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                        <li class="pinterest"><a title="Pinterest" href="#" data-toggle="tooltip"><i class="soap-icon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding no-margin">
                                    <button type="submit" class="btn-large full-width">SUBMIT REVIEW</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <div class="sidebar col-md-3">
                <article class="detailed-logo">
                    <figure>
                        <img width="114" height="85" src="http://placehold.it/114x85" alt="">
                    </figure>
                    <div class="details">
                        <h2 class="box-title">
                            <span class="r_title"></span>
                            <small>
                                <i class="soap-icon-departure yellow-color"></i><span class="city-country fourty-space">Bastille, Paris france</span></small></h2>
                        <span class="price clearfix">
                                    <small class="pull-left">USD</small>
                                    <span class="pull-right">$620</span>
                                </span>
                        <div class="feedback clearfix">
                            <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                            <span class="review pull-right">270 reviews</span>
                        </div>
                        <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                        <a class="button yellow full-width uppercase btn-small">book now</a>
                    </div>
                </article>
                <div class="travelo-box contact-box">
                    <h4>Need Our Cheap Tickets Help?</h4>
                    <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                    <address class="contact-details">
                        <a class="contact-email" href="#">support@ourcheaptickets.com</a>
                    </address>
                </div>
                <!-- <div class="travelo-box">
                    <h4>Similar Listings</h4>
                    <div class="image-box style14">
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Plaza Tour Eiffel</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$170</span>avg/night
                                </label>
                            </div>
                        </article>
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Sultan Gardens</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$620</span>avg/night
                                </label>
                            </div>
                        </article>
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Park Central</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$322</span>avg/night
                                </label>
                            </div>
                        </article>
                    </div>
                </div> -->
                <div class="travelo-box book-with-us-box">
                    <h4>Why Book with us?</h4>
                    <ul>
                        <li>
                            <i class="soap-icon-hotel-1 circle"></i>
                            <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                        <li>
                            <i class="soap-icon-savings circle"></i>
                            <h5 class="title"><a href="#">Low Rates &amp; Savings</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                        <li>
                            <i class="soap-icon-support circle"></i>
                            <h5 class="title"><a href="#">Excellent Support</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    var _Get =<?=json_encode(Yii::$app->request->get(), true)?>
</script>