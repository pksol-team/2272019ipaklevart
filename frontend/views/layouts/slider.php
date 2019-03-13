<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);

$model = new common\models\LoginForm();


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Theme Styles -->
    <link rel="stylesheet" href="/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="/main/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/main/css/animate.min.css">

    <link rel="stylesheet" type="text/css" href="/slider-files/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/slider-files/components/revolution_slider/css/style.css" media="screen" />

    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="/main/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/main/components/flexslider/flexslider.css" media="screen" />

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="/main/css/style.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="/main/css/updates.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="/main/css/updates.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="/main/css/responsive.css">
    <link rel="stylesheet" href="/css/flight.css">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="/main/css/ie.css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Javascript Page Loader -->
    <script type="text/javascript" src="/main/js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
    <script type="text/javascript" src="/main/js/page-loading.js"></script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>































    
    <div id="slideshow">
    <div class="fullwidthbanner-container">
        <div class="revolution-slider rev_slider" style="height: 0; overflow: hidden;">
            <ul>    <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="turnoff-vertical" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-thumb="/slider-files/images/concept/bg3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/slider-files/images/concept/bg3.jpg"  alt="" title="Slider1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-1" 
                        data-x="-481" 
                        data-y="324" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:50px;opacity:0;s:1500;s:1500;" 
                        data-start="500" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;"><img src="/slider-files/images/concept/badaal.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-2" 
                        data-x="203" 
                        data-y="102" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;skX:-85px;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="800" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6;"><img src="/slider-files/images/concept/area.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-3" 
                        data-x="389" 
                        data-y="205" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="1100" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7;"><img src="/slider-files/images/concept/girl1.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-4" 
                        data-x="250" 
                        data-y="342" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="1400" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 8;"><img src="/slider-files/images/concept/11.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-5" 
                        data-x="122" 
                        data-y="420" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="4700" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 9;"><img src="/slider-files/images/concept/arrow11.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-6" 
                        data-x="139" 
                        data-y="428" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:1500;s:1500;" 
                        data-start="5000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 10; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">england</span> From $45 </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-7" 
                        data-x="194" 
                        data-y="191" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="1700" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 11;"><img src="/slider-files/images/concept/22.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-8" 
                        data-x="66" 
                        data-y="233" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="4400" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 12;"><img src="/slider-files/images/concept/arrow11.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-9" 
                        data-x="89" 
                        data-y="240" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:1500;s:1500;" 
                        data-start="5300" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 13; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">Rome</span> From $220 </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-10" 
                        data-x="341" 
                        data-y="8" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="2000" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 14;"><img src="/slider-files/images/concept/33.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-11" 
                        data-x="213" 
                        data-y="90" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="4100" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 15;"><img src="/slider-files/images/concept/arrow11.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-12" 
                        data-x="232" 
                        data-y="97" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:1500;s:1500;" 
                        data-start="5600" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 16; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">Paris</span> From $125 </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-13" 
                        data-x="657" 
                        data-y="8" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="2300" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 17;"><img src="/slider-files/images/concept/44.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-14" 
                        data-x="758" 
                        data-y="87" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:1500;s:1500;" 
                        data-start="3800" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 18;"><img src="/slider-files/images/concept/arrow112.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-15" 
                        data-x="778" 
                        data-y="96" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="5900" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 19; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">new york</span> From $125 </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-16" 
                        data-x="827" 
                        data-y="207" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="2600" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 20;"><img src="/slider-files/images/concept/66.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-17" 
                        data-x="910" 
                        data-y="230" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:300;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:1500;s:1500;" 
                        data-start="3500" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 21;"><img src="/slider-files/images/concept/arrow112.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-18" 
                        data-x="945" 
                        data-y="238" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="6200" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 22; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">egypt</span> From $95 </div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-19" 
                        data-x="817" 
                        data-y="406" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="2900" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 23;"><img src="/slider-files/images/concept/77.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-20" 
                        data-x="921" 
                        data-y="430" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="3200" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 24;"><img src="/slider-files/images/concept/arrow112.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption large_bold_black2_1   tp-resizeme" 
                        id="slide-1-layer-21" 
                        data-x="961" 
                        data-y="438" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="6500" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 25; white-space: nowrap;font-family:Arial;border-color:rgba(255, 214, 88, 1.00);"><span style="color:#fdb714">india</span> From $66 </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-2" data-transition="curtain-3" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-thumb="/slider-files/images/concept/bg4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/slider-files/images/concept/bg4.jpg"  alt="" title="Slider1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-1" 
                        data-x="35" 
                        data-y="401" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:800;s:800;" 
                        data-start="800" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;"><img src="/slider-files/images/concept/grasss.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-2" 
                        data-x="422" 
                        data-y="276" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:top;s:1500;e:easeInOutElastic;" 
                        data-transform_out="y:bottom;s:300;s:300;" 
                        data-start="1400" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6;"><img src="/slider-files/images/concept/suitcase.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-3" 
                        data-x="139" 
                        data-y="359" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:left;s:1500;e:easeInOutBack;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="1700" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7;"><img src="/slider-files/images/concept/hotel.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-4" 
                        data-x="286" 
                        data-y="357" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:left;s:1500;e:easeInOutBack;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="2000" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 8;"><img src="/slider-files/images/concept/fligts.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-5" 
                        data-x="780" 
                        data-y="361" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:top;s:1500;e:easeInOutBack;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="2300" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 9;"><img src="/slider-files/images/concept/cars.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-6" 
                        data-x="937" 
                        data-y="360" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:top;s:1500;e:easeInOutBack;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="2600" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 10;"><img src="/slider-files/images/concept/cruses.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-7" 
                        data-x="905" 
                        data-y="14" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:50px;opacity:0;s:300;s:300;" 
                        data-start="2900" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 11;"><img src="/slider-files/images/concept/cloud1.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-8" 
                        data-x="1125" 
                        data-y="21" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:50px;opacity:0;s:300;s:300;" 
                        data-start="3200" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 12;"><img src="/slider-files/images/concept/cloud11.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-2-layer-9" 
                        data-x="892" 
                        data-y="-70" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="opacity:0;s:300;s:300;" 
                        data-start="3500" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 13;"><img src="/slider-files/images/concept/sun.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption caption-medium-title   tp-resizeme" 
                        id="slide-2-layer-10" 
                        data-x="423" 
                        data-y="172" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="3800" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 14;">Travel Based Theme Ever Created!</div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption caption-small-title   tp-resizeme" 
                        id="slide-2-layer-11" 
                        data-x="508" 
                        data-y="151" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4100" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 15;">Welcome to World’s No. 1</div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption largewhitebg_button1   tp-resizeme" 
                        id="slide-2-layer-12" 
                        data-x="499" 
                        data-y="208" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4400" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 16; white-space: nowrap;font-family:Arial;border-color:rgba(255, 255, 255, 1.00);"><a href="#">BUY NOW</a> </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption largewhitebg_button1   tp-resizeme" 
                        id="slide-2-layer-13" 
                        data-x="627" 
                        data-y="208" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 17; white-space: nowrap;font-family:Arial;border-color:rgba(255, 255, 255, 1.00);"><a href="#">MORE INFO</a> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="cube" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-thumb="/slider-files/images/concept/bg5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/slider-files/images/concept/bg5.jpg"  alt="" title="Slider1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-1" 
                        data-x="926" 
                        data-y="147" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="500" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;"><img src="/slider-files/images/concept/baddel2.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-2" 
                        data-x="39" 
                        data-y="2" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="800" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6;"><img src="/slider-files/images/concept/baloo_3.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-3" 
                        data-x="-91" 
                        data-y="71" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:-50px;opacity:0;s:300;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="1100" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7;"><img src="/slider-files/images/concept/badall2.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-4" 
                        data-x="403" 
                        data-y="140" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:top;s:1500;e:easeInOutElastic;" 
                        data-transform_out="y:50px;opacity:0;s:300;s:300;" 
                        data-start="1400" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 8;"><img src="/slider-files/images/concept/guy.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-5" 
                        data-x="552" 
                        data-y="46" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:top;s:300;s:300;" 
                        data-start="1700" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 9;"><img src="/slider-files/images/concept/doodle.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-6" 
                        data-x="1110" 
                        data-y="451" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="2000" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 10;"><img src="/slider-files/images/concept/ballon2.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption black22   tp-resizeme" 
                        id="slide-3-layer-7" 
                        data-x="306" 
                        data-y="325" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:300;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="2300" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 11; white-space: nowrap; line-height: 1px; font-weight: ;font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">Cars Available </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption black33   tp-resizeme" 
                        id="slide-3-layer-8" 
                        data-x="334" 
                        data-y="354" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="2600" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 12; white-space: nowrap; color: rgba(62, 62, 62, 1.00);font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">78,898 </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-9" 
                        data-x="480" 
                        data-y="327" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:300;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="2900" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 13;"><img src="/slider-files/images/concept/arrow22.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption black22   tp-resizeme" 
                        id="slide-3-layer-10" 
                        data-x="320" 
                        data-y="181" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:left;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="3200" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 14; white-space: nowrap; line-height: 1px; font-weight: ;font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">Flights Available </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption black33   tp-resizeme" 
                        id="slide-3-layer-11" 
                        data-x="374" 
                        data-y="210" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:left;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="3500" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 15; white-space: nowrap; color: rgba(62, 62, 62, 1.00);font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">21,456 </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-12" 
                        data-x="525" 
                        data-y="187" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:left;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:-50px;opacity:0;s:300;s:300;" 
                        data-start="3800" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 16;"><img src="/slider-files/images/concept/arrow22.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption black22   tp-resizeme" 
                        id="slide-3-layer-13" 
                        data-x="888" 
                        data-y="180" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4100" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 17; white-space: nowrap; line-height: 1px; font-weight: ;font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">Hotels Available </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption black33   tp-resizeme" 
                        id="slide-3-layer-14" 
                        data-x="943" 
                        data-y="208" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4400" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 18; white-space: nowrap; color: rgba(62, 62, 62, 1.00);font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">32,158 </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-15" 
                        data-x="1088" 
                        data-y="182" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="4700" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 19;"><img src="/slider-files/images/concept/arrow22.png" alt="" data-no-retina> </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption black22   tp-resizeme" 
                        id="slide-3-layer-16" 
                        data-x="929" 
                        data-y="330" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="5000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 20; white-space: nowrap; line-height: 1px; font-weight: ;font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">Cruises Available </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption black33   tp-resizeme" 
                        id="slide-3-layer-17" 
                        data-x="991" 
                        data-y="355" 
                                    data-width="['auto']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="x:right;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="x:50px;opacity:0;s:300;s:300;" 
                        data-start="5300" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 21; white-space: nowrap; color: rgba(62, 62, 62, 1.00);font-family:Arial;border-color:rgba(0, 0, 0, 1.00);">19,898 </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-3-layer-18" 
                        data-x="1137" 
                        data-y="328" 
                                    data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-transform_idle="o:1;"
             
                        data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:300;" 
                        data-start="5600" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 22;"><img src="/slider-files/images/concept/arrow22.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                </li>
            </ul>
        </div>
    </div>
</div>

































<!-- Custom Styles -->
<link rel="stylesheet" href="/main/css/custom.css">

<!-- Javascript -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="/main/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/main/js/jquery.noconflict.js"></script>
<script type="text/javascript" src="/main/js/modernizr.2.7.1.min.js"></script>
<script type="text/javascript" src="/main/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/main/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="/main/js/jquery-ui.1.10.4.min.js"></script>
<script src="/js/simple-skillbar.js"></script>


<!-- Twitter Bootstrap -->
<script type="text/javascript" src="/main/js/bootstrap.min.js"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="/slider-files/components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/slider-files/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- load BXSlider scripts -->
<script type="text/javascript" src="/main/components/jquery.bxslider/jquery.bxslider.min.js"></script>

<!-- Flex Slider -->
<script type="text/javascript" src="/main/components/flexslider/jquery.flexslider.js"></script>

<!-- parallax -->
<script type="text/javascript" src="/main/js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="/main/js/waypoints.min.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="/main/js/theme-scripts.js"></script>
<script type="text/javascript" src="/main/js/scripts.js"></script>




<script type="text/javascript">
    tjq(document).ready(function() {
        // tjq('.revolution-slider').revolution(
        //     {
        //         dottedOverlay:"none",
        //         delay:8000,
        //         startwidth:1170,
        //         startheight:646,
        //         onHoverStop:"on",
        //         hideThumbs:10,
        //         fullWidth:"on",
        //         forceFullWidth:"on",
        //         navigationType:"none",
        //         shadow:0,
        //         spinner:"spinner4",
        //         hideTimerBar:"on",
        //     });  

        tjq('.revolution-slider').revolution(
        {
            sliderType:"standard",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                mouseScrollReverse:"default",
                onHoverStop:"on",
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style:"default",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    }
                }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1170,
            gridheight:646,
            lazyType:"none",
            shadow:0,
            spinner:"spinner4",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });



        tjq('.main-ticket-box').click(function (e) { 
            e.preventDefault();
            tjq(this).toggleClass('ticket--open ticket--expanded');

        });
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>