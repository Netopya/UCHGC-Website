<?php

    session_start();
    
    if(!isset($_SESSION["userId"]))
    {
        die("Illegal operation");
    }

    if(!isset($_FILES['userfiles']))
    {
        die(json_encode(array(
            "status" => "error",
            "errorMessage" => "No Files sent"
        )));
    }
    
    // Count # of uploaded files in array
    $total = count($_FILES['userfiles']['name']);

    // Loop through each file
    for($i=0; $i<$total; $i++) {
      //Get the temp file path
      $tmpFilePath = $_FILES['userfiles']['tmp_name'][$i];

      //Make sure we have a filepath
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "uploadFiles/" . $_FILES['userfiles']['name'][$i];

        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

          //Handle other code here

        }
        else
        {
            // Create some way to add the file to failed uploads
        }
      }
}
?>