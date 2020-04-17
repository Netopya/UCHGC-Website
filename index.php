<?php

    $pagebutton_id = 1;

    include("opening_php.php");
    
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $home_title[$refined_laguage]; ?></title>
        
        <?php include("php/head.php"); ?>
    </head>

<body>
    <?php include("php/navbar1.php"); ?>
    <div id="container_main">

        <!-- carousel begin -->
        <div id="main-carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/carousel/st_esprit_int1.jpg" alt="...">
              <div class="carousel-caption">
                <!--<h1></h1>
                <p></br></p>-->
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/st_esprit.jpg" alt="...">
              <div class="carousel-caption">
                <!--<h1></h1>
                <p></br></p>-->
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- END CAROUSEL -->

        <div id="webcontent_background">
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="page-header">
                            <h1><?php echo $indexh[$refined_laguage]; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="jumbotron" id="schedual_container">
                            <p><?php echo $schedual_text_new[$refined_laguage]; ?></p>
                        </div>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<h1><?php echo $paska_video[$refined_laguage] ;?></h1>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="853" height="480" src="//www.youtube.com/embed/N6uCIS8fUa4" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<h1><?php echo $vine_video[$refined_laguage] ;?></h1>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="853" height="480" src="//www.youtube.com/embed/95yu_cD5vwU" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
                </div>
                
				<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $corona_title[$refined_laguage]; ?></h1>
                        <?php echo $corona_content[$refined_laguage]; ?>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<img class="img-responsive" src="images/Котик001.jpg"/>
					</div>
				</div>

                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $prayer1_title[$refined_laguage]; ?></h1>
                        <?php echo $prayer1_content[$refined_laguage]; ?>
                    </div>
                </div>

                <!--<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $xmas2013_title[$refined_laguage]; ?></h1>
                        <a href="images/xmas.jpg">
                        <img style="float: right" src="images/thumbnails/xmas_thb.jpg"/></a>
                        <p><?php echo $xmas2013_content[$refined_laguage]; ?></p>
                        <div class="clear_float"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $kutia_title[$refined_laguage]; ?></h1>
                        <a href="images/kutia.jpg"><img style="float: right" src="images/thumbnails/thb_kutia.jpg" height="133" width="200"/></a>
                        <p><?php echo $kutia_text[$refined_laguage]; ?></p>
                        <div class="clear_float"></div>
                    </div>
                </div>-->
                
                <!--<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $lent2013_title[$refined_laguage]; ?></h1>
                        <p style="text-indent: 0px;text-align: center;"><?php echo $lent2013_text[$refined_laguage]; ?></p>
                    </div>
                </div>-->
                <!--<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $e_t[$refined_laguage]; ?></h1>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <center><b><?php echo $e_2d[$refined_laguage]; ?></b></center></br><?php echo $e_2t[$refined_laguage]; ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <center><b><?php echo $e_3d[$refined_laguage]; ?></b></center></br><?php echo $e_3t[$refined_laguage]; ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <center><b><?php echo $e_4d[$refined_laguage]; ?></b></center></br><?php echo $e_4t[$refined_laguage]; ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <center><b><?php echo $e_5d[$refined_laguage]; ?></b></center></br><?php echo $e_5t[$refined_laguage]; ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <center><b><?php echo $e_6d[$refined_laguage]; ?></b></center></br><?php echo $e_6t[$refined_laguage]; ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <center><a href="images/C2011TorEasterAround-the-World-012.jpg"><img src="images/thumbnails/thb_C2011TorEasterAround-the-World-012.jpg"/></a></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h1><?php echo $eb_h[$refined_laguage]; ?></h1>
                        <p><?php echo $eb_t[$refined_laguage]; ?></p>
                    </div>
                </div>-->
            </div>
        </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>
