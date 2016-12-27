<?php

include("opening_php.php");

    $pagebutton_id = 7;

?><!DOCTYPE html>

<html>
<head>
    <title><?php echo $links_title[$refined_laguage]; ?></title>
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
        <div class="blog_post">
            <h1><?php echo $link_button[$refined_laguage]; ?></h1>
            <?php echo $link1[$refined_laguage]; ?><br/> <a href="http://www.ugcc.org.ua">http://www.ugcc.org.ua</a></br></br>
            <?php echo $link2[$refined_laguage]; ?><br/> <a href="http://www.ucet.ca/">http://www.ucet.ca/</a></br></br>
            <?php echo $link3[$refined_laguage]; ?><br/> <a href="http://www.ukrainiantime.com">http://www.ukrainiantime.com</a>
        </div>
        
    </div>
    </div>
    <div id="footer">
        
    </div>
</div>


</body>
</html>
