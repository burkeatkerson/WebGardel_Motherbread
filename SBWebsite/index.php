<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>asdf</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style type="text/css">
            body {
                margin:50px 0;
            }

            .footer {
                margin-top:20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <?php if( $site->section('header') ){ ?>
                <div class="jumbotron">
                    <h1><?= $site->data('company_name') ?></h1>
                    <p><?= $site->content('intro_text') ?></p>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-lg-6">

                    <?php if( $site->section('about_us') ){ ?>
                        <div class="about-us">
                            <h2>About Us</h2>
                            <?= $site->content('about_us') ?>
                        </div>
                    <?php } ?>

                    <?php if( $site->section('hours') ){ ?>
                        <h3>Here are our hours!</h3>
                        <?= $site->content('hours') ?>
                    <?php } ?>
                </div>
                <div class="col-lg-6">
                    <?php if( $site->section('map') ){ ?>
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:400px;width:100%;"></div><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">http://www.map-embed.com</a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(45.5108944,-122.62277549999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(45.5108944, -122.62277549999999)});infowindow = new google.maps.InfoWindow({content:"<b><?= $site->data('company_name') ?></b><br/><?= $site->data('address') ?>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    <?php } ?>
                </div>
            </div>

            <?php if( $site->section('footer') ){ ?>
                <div class="footer">
                    <center><?= $site->content('footer') ?></center>
                </div>
            <?php } ?>

        </div>
    </body>

</html>
