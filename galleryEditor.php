<?php
    
    include("opening_php.php");

    $id = $_GET["id"];
    
    
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
                                <h1>Gallery Editor for ID: <?php echo $id; ?></h1>
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
                                    
                                    $stmt = $conn->prepare("SELECT name_en, name_fr, name_uk FROM Galleries WHERE id = ?");
                                    $stmt->bind_param("s", $id);
                                    $stmt->execute();
                                    $stmt->bind_result($name_en, $name_fr, $name_uk);
                                    $stmt->store_result();
                                    
                                    if($stmt->num_rows == 0)
                                    {
                                        ?>
                                            <div class="alert alert-danger" role="alert"><strong>An error has occurred</strong> Could not find a gallery with that id.</div>
                                        <?php
                                    }
                                    else
                                    {
                                        $stmt->fetch();
                                        ?>
                                            <a class="btn btn-default" href="galleryEd.php" role="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to gallery list</a>
                                            <br><br>
                                            <h2>Gallery Titles</h2>
                                            <form class="form-horizontal">
                                              <div class="form-group">
                                                <label for="en_name" class="col-sm-3 control-label">English Title</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="en_name" placeholder="Title" value="<?php echo $name_en; ?>">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="fr_name" class="col-sm-3 control-label">French Title</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="fr_name" placeholder="Title" value="<?php echo $name_fr; ?>">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="uk_name" class="col-sm-3 control-label">Ukrainian Title</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="uk_name" placeholder="Title" value="<?php echo $name_uk; ?>">
                                                </div>
                                              </div>
                                              <div>
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-default">Update</button>
                                                </div>
                                              </div>
                                            </form>
                                            <h2>Gallery Images</h2>
                                        <?php
                                    }
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
