<?php

include("opening_php.php");

    $pagebutton_id = 5;

?><!DOCTYPE html>

<html>
<head>
    <title><?php echo $location_title[$refined_laguage]; ?></title>
    <LINK REL=StyleSheet HREF="stylesheet1.css" TYPE="text/css">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
   <script type="text/javascript" src="common_scripts.js"></script>
   <meta name="keywords" content="Ukrainian,Catholic,Holy,Ghost,Church,Montreal,église,catholique,ukrainienne,Saint-Esprit,Montréal,Українська,Католицька,Церква,Святого,Духа,Монреалі">
</head>

<body>
<div id="container_main">
    <div id="heading_container">
        <div id="heading_content">
            <?php
            include("header1.php");
            ?>
        </div>
        
        
    </div>
    <div id="webcontent_background">
    <div id="webcontent_container">
        <h1><?php echo $location_button[$refined_laguage]; ?></h1>
        <div class="blog_post">
            
            <p id="address">1795 Rue Grand Trunk </br>Montréal, QC </br>H3K 2J5</p>
            <div id="map_container">
            <iframe width="700" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=<?php echo $map_source; ?>></iframe><br /><small><a href=<?php echo $map_alink; ?> style="color:#0000FF;text-align:left"><?php echo $map_alinktext[$refined_laguage]; ?></a></small>
            </div>
            
        </div>
        
    </div>
    </div>
    <div id="footer">
        
    </div>
</div>


</body>
</html>
