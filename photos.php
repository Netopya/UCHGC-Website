<?php

include("opening_php.php");

    $pagebutton_id = 3;

    $photo_id = $_GET['id'];

    if(!$photo_id) {
        $photo_id = 0;
    }

?><!DOCTYPE html>

<html>
<head>
    <title><?php echo $photo_title[$refined_laguage]; ?></title>
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
        <?php 
            if($photo_id == 1) {

        ?>


            <h1><?php echo $photo_church_title[$refined_laguage] ;?></h1>
            <div class="photos_container">
                <ul>
                    <li>
                        <a href="images/st_esprit.jpg">
                            <img src="images/thumbnails/thb_st_esprit.jpg"/>
                            <p><?php echo $photo1[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="images/st_esprit_int1.jpg">
                            <img src="images/thumbnails/thb_st_esprit_int1.jpg"/>
                            <p><?php echo $photo2[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="images/st_esprit_int2.jpg">
                            <img src="images/thumbnails/thb_st_esprit_int2.jpg"/>
                            <p><?php echo $photo3[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="images/st_esprit_int3.jpg">
                            <img src="images/thumbnails/thb_st_esprit_int3.jpg"/>
                            <p><?php echo $photo4[$refined_laguage] ;?></p>
                        </a>
                    </li>
                </ul>
                <div class="clear_float">
                    
                </div>
            </div>
        <?php
            } else if($photo_id == 0) {
        ?>
        <h1><?php echo $visit_vid_title[$refined_laguage] ;?></h1>
                    <div class="blog_post">
                        <iframe width="853" height="480" src="//www.youtube.com/embed/6Kf5QfrJkH4" frameborder="0" allowfullscreen></iframe>
                    </div>
            <h1><?php echo $photos_button[$refined_laguage]; ?></h1>
            <div class="photos_container">
                <ul>
					<li>
                        <a href="photos.php?id=9">
                            <img src="images/9/page.jpg"/>
                            <p><?php echo $kutia_photo_16[$refined_laguage] ;?></p>
                        </a>
                    </li>
					<li>
                        <a href="photos.php?id=8">
                            <img src="images/8/page.jpg"/>
                            <p><?php echo $sviatchene2015[$refined_laguage] ;?></p>
                        </a>
                    </li>
					<li>
                        <a href="photos.php?id=7">
                            <img src="images/7/page.jpg"/>
                            <p><?php echo $paska2015[$refined_laguage] ;?></p>
                        </a>
                    </li>
					<li>
                        <a href="photos.php?id=5">
                            <img src="images/5/page_lenten.jpg"/>
                            <p><?php echo $lentRet2015[$refined_laguage] ;?></p>
                        </a>
                    </li>
					<li>
                        <a href="photos.php?id=6">
                            <img src="images/6/page.jpg"/>
                            <p><?php echo $kutia_photo_15[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php?id=4">
                            <img src="images/4/page.jpg"/>
                            <p><?php echo $east2014_title[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php?id=3">
                            <img src="images/3/page_egg.jpg"/>
                            <p><?php echo $psy2013_old_title[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php?id=2">
                            <img src="images/page1.jpg"/>
                            <p><?php echo $kutia_photo_14[$refined_laguage] ;?></p>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php?id=1">
                            <img src="images/page2.jpg"/>
                            <p><?php echo $photo_church_title[$refined_laguage] ;?></p>
                        </a>
                    </li>

                    
                </ul>
                <div class="clear_float">
                    
                </div>
        <?php
            } else if ($photo_id == 2) {
                ?>
                    <h1><?php echo $kutia_photo_14[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/2/DSC_2222.JPG">
                                    <img src="images/2/thb/thb_DSC_2222.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/2/DSC_2224.JPG">
                                    <img src="images/2/thb/thb_DSC_2224.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/2/DSC_2234.JPG">
                                    <img src="images/2/thb/thb_DSC_2234.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/2/DSC_2243.JPG">
                                    <img src="images/2/thb/thb_DSC_2243.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/2/DSC_2251.JPG">
                                    <img src="images/2/thb/thb_DSC_2251.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/2/DSC_2252.JPG">
                                    <img src="images/2/thb/thb_DSC_2252.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>
                <?php
            } else if ($photo_id == 3) {
                ?>
                    
                    <h1><?php echo $psy2013_title[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/3/DSC03304.JPG">
                                    <img src="images/3/thb/thb_DSC03304.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03305.JPG">
                                    <img src="images/3/thb/thb_DSC03305.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03306.JPG">
                                    <img src="images/3/thb/thb_DSC03306.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03307.JPG">
                                    <img src="images/3/thb/thb_DSC03307.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03308.JPG">
                                    <img src="images/3/thb/thb_DSC03308.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03309.JPG">
                                    <img src="images/3/thb/thb_DSC03309.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03310.JPG">
                                    <img src="images/3/thb/thb_DSC03310.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/3/DSC03313.JPG">
                                    <img src="images/3/thb/thb_DSC03313.JPG"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>
                <?php
            } else if ($photo_id == 4) {
                ?>
                    <h1><?php echo $east2014_title[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/4/20140419_160046.jpg">
                                    <img src="images/4/thb/thb_20140419_160046.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/4/20140419_160419.jpg">
                                    <img src="images/4/thb/thb_20140419_160419.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/4/20140419_161416.jpg">
                                    <img src="images/4/thb/thb_20140419_161416.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
				}
				else if ($photo_id == 5) {
                ?>
                    <h1><?php echo $lentRetFull2015[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/5/20150321_101531.jpg">
                                    <img src="images/5/thb_20150321_101531.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/5/20150322_100347.jpg">
                                    <img src="images/5/thb_20150322_100347.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
            }
			else if ($photo_id == 6) {
                ?>
                    <h1><?php echo $kutia_photo_15[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/6/20150125_123432.jpg">
                                    <img src="images/6/thb_20150125_123432.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/6/20150125_123930.jpg">
                                    <img src="images/6/thb_20150125_123930.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/6/20150125_124100.jpg">
                                    <img src="images/6/thb_20150125_124100.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/6/20150125_131939.jpg">
                                    <img src="images/6/thb_20150125_131939.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
				}
				else if ($photo_id == 7) {
                ?>
                    <h1><?php echo $paska2015[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/7/20150411_160223_Night.jpg">
                                    <img src="images/7/output/20150411_160223_Night.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/7/20150411_161706.jpg">
                                    <img src="images/7/output/20150411_161706.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/7/20150411_161815.jpg">
                                    <img src="images/7/output/20150411_161815.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
				}
				else if ($photo_id == 8) {
                ?>
                    <h1><?php echo $sviatchene2015[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/8/20150419_123800.jpg">
                                    <img src="images/8/output/thb_20150419_123800.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/8/20150419_123824.jpg">
                                    <img src="images/8/output/thb_20150419_123824.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/8/20150419_130950.jpg">
                                    <img src="images/8/output/thb_20150419_130950.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/8/20150419_131631.jpg">
                                    <img src="images/8/output/thb_20150419_131631.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
				}else if ($photo_id == 9) {
                ?>
                    <h1><?php echo $kutia_photo_16[$refined_laguage] ;?></h1>
                    <div class="photos_container">
                        <ul>
                            <li>
                                <a href="images/9/1.jpg">
                                    <img src="images/9/output/thb_1.jpg"/>
                                    <p></p>
                                </a>
                            </li>
                            <li>
                                <a href="images/9/2.jpg">
                                    <img src="images/9/output/thb_2.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/9/3.jpg">
                                    <img src="images/9/output/thb_3.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/9/4.jpg">
                                    <img src="images/9/output/thb_4.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/9/5.jpg">
                                    <img src="images/9/output/thb_5.jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/9/20160117_125422 (2).jpg">
                                    <img src="images/9/output/thb_20160117_125422 (2).jpg"/>
                                    <p></p>
                                </a>
                            </li>
							<li>
                                <a href="images/9/20160117_130239 (2).jpg">
                                    <img src="images/9/output/thb_20160117_130239 (2).jpg"/>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                        <div class="clear_float">
                            
                        </div>
                    </div>

                <?php
				}
        ?>
    </div>
    </div>
    <div id="footer">
        
    </div>
</div>


</body>
</html>
