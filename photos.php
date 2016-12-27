<?php

include("opening_php.php");

    $pagebutton_id = 3;

    $photo_id = 0;
    if (isset($_GET['id']))
    {
        $photo_id = $_GET['id'];
    }

?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $photo_title[$refined_laguage]; ?></title>
        <?php include("php/head.php"); ?>
    </head>

    <body>
        <?php include("php/navbar1.php"); ?>
                
        <div id="container_main">
            <div id="smalltopnavback"></div>
            <div id="webcontent_background">
                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="page-header">
                                <h1><?php echo $photo_button[$refined_laguage];  ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h1><?php echo $visit_vid_title[$refined_laguage] ;?></h1>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/6Kf5QfrJkH4" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h1><?php echo $photos_button[$refined_laguage];  ?></h1>
                            <p>Under construction</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
            
            </div>
        </div>
    </body>
</html>
