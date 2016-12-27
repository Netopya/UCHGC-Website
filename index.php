<?php

    $pagebutton_id = 1;

    include("opening_php.php");
    
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $home_title[$refined_laguage]; ?></title>

        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script type="text/javascript" src="common_scripts.js"></script>

        <meta name="keywords" content="Ukrainian,Catholic,Holy,Ghost,Church,Montreal,église,catholique,ukrainienne,Saint-Esprit,Montréal,Українська,Католицька,Церква,Святого,Духа,Монреалі">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="bootstrap.override.css">
        
        <LINK REL=StyleSheet HREF="stylesheet1.css" TYPE="text/css">
    </head>

<body>
    
    <div id="container_main">
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php">UCHGC</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><?php echo $home_button[$refined_laguage]; ?></a></li>
                        <li ><a href="about.php"><?php echo $about_button[$refined_laguage]; ?></a></li>
                        <li ><a href="photos.php"><?php echo $photo_button[$refined_laguage]; ?></a></li>
                        <li ><a href="location.php"><?php echo $location_button[$refined_laguage]; ?></a></li>
                        <li ><a href="contact.php"><?php echo $contact_button[$refined_laguage]; ?></a></li>
                        <li ><a href="links.php"><?php echo $link_button[$refined_laguage]; ?></a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $language_label[$refined_laguage];?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li onclick="language_changed(1)"><a href="#">English</a></li>
                            <li onclick="language_changed(2)"><a href="#">Français</a></li>
                            <li onclick="language_changed(3)"><a href="#">Український</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <!-- carousel begin -->
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="st_esprit_int1 - Copy.jpg" alt="...">
              <div class="carousel-caption">
                <!--<h1></h1>
                <p></br></p>-->
              </div>
            </div>
            <div class="item">
              <img src="st_esprit_int1 - Copy.jpg" alt="...">
              <div class="carousel-caption">
                <h1>NETOPYAPLANET.COM</h1>
                <p>Welcome to netopyaplanet.com!</br>Programming, projects, and more ...</p>
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
                            <p><?php echo $schedual_text[$refined_laguage]; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
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
                </div>
            </div>
        </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>
