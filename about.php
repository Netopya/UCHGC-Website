<?php

include("opening_php.php");

    $pagebutton_id = 2;

?><!DOCTYPE html>

<html>
<head>
    <title><?php echo $about_title[$refined_laguage]; ?></title>
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
            <h1><?php echo $about_text_title[$refined_laguage];  ?></h1>
            <p><?php echo $about_text[$refined_laguage]; ?></p>
            
        </div>
        
    </div>
    </div>
    <div id="footer">
        
    </div>
</div>


</body>
</html>
