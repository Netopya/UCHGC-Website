<?php

    include("opening_php.php");

    $pagebutton_id = 0;

?><!DOCTYPE html>
<html>
    <head>
        <title>Gallery Editor</title>
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
                                <h1>Gallery Editor</h1>
                            </div>
                            <?php
                                if(!isset($_SESSION["userId"]))
                                {
                                    ?> <div class="alert alert-danger" role="alert"><strong>An error has occurred</strong> You must be logged in for this operation</div> <?php
                                }
                                else
                                {
                                    require("php/dbconfig.php");
        
                                    // Create connection
                                    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
                                    
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    
                                    $stmt = $conn->prepare("SELECT id, name_en, name_fr, name_uk FROM Galleries");
                                    $stmt->bind_result($id, $name_en, $name_fr, $name_uk);
                                    
                                    ?>
                                        <table class="table">
                                            <caption>Galleries</caption>
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>English Title</th>
                                                    <th>French Title</th>
                                                    <th>Ukrainian Title</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while ($stmt->fetch()) {
                                                        echo "<tr><th>" . $id . "</th><th>" . $name_en . "</th><th>" . $name_fr . "</th><th>" . $name_uk . "</th><th><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></th></tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        <a class="btn btn-success" href="#" role="button">Create new gallery <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="footer">
            
            </div>
        </div>
    </body>
</html>
