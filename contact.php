<?php

include("opening_php.php");

    $pagebutton_id = 6;

?><!DOCTYPE html>

<html>
<head>
    <title><?php echo $contact_title[$refined_laguage]; ?></title>
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
        <h1><?php echo $contact_button[$refined_laguage]; ?></h1>
        <div class="contact_person">
            <img id="#priestimage" src="contact/thb_V_Vitt.jpg"/>
            <h3><?php echo $priestname[$refined_laguage]; ?></h3>
            <p><?php echo $priestresidence[$refined_laguage]; ?>: 7345 Churchill Verdun Qc </br><?php echo $telephone[$refined_laguage]; ?>: 514-769-3804</br>
            <?php echo $email[$refined_laguage]; ?>: <a href="mailto:v.vitt@hotmail.com">v.vitt@hotmail.com</p>
        </div>
        
    </div>
    </div>
    <div id="footer">
        
    </div>
</div>


</body>
</html>
