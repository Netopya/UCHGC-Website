<?php

    include("opening_php.php");

    $pagebutton_id = 3;

?><!DOCTYPE html>
<html>
    <head>
        <title>Gallery View</title>  <!-- Change to localized title -->
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
                                <h1>Gallery View</h1>
                            </div>
                            <div id="carousel-example-generic" class="carousel slide galleryCarousel" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="img-responsive" src="images/st_esprit.jpg" alt="...">
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="images/st_esprit_int1.jpg" alt="...">
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="images/9/4.jpg" alt="...">
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="images/9/20160117_130239 (2).jpg" alt="...">
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="images/9/page.jpg" alt="...">
                                </div>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="footer">
            
            </div>
        </div>
    </body>
</html>
