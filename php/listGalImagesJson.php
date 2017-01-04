<?php
    function dieError($message)
    {
        die(json_encode(array(
            "status" => "error",
            "errorMessage" => $message
        )));
    }
    
    require("listGalleryImages.php");
    
    if(!isset($_POST['id']))
    {
        dieError("No gallery specified");
    }

    $galId = $_POST['id'];
    
    $cleanId = galleryExists($galId);
    
    if($cleanId === false)
    {
        dieError("Could not find the required gallery");
    }
    
    echo json_encode(array("status" => "success", "images" => listImages($galId)));

    
    
?>