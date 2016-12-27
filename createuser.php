<?php

    include("opening_php.php");

    $pagebutton_id = 0;

?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $about_title[$refined_laguage]; ?></title>
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
                                <h1>Create a new user</h1>
                            </div>
                            <form method="post">
                              <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="email" class="form-control" id="inputUsername" name="username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="inputFirstname">First Name</label>
                                <input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <label for="inputLastname">Last Name</label>
                                <input type="text" class="form-control" id="inputLastname" name="lastname" placeholder="Last Name">
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="footer">
            
            </div>
        </div>
    </body>
</html>