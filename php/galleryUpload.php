<?php

    session_start();
    
    function dieError($message)
    {
        die(json_encode(array(
            "status" => "error",
            "errorMessage" => $message
        )));
    }
    
    
    if(!isset($_SESSION["userId"]))
    {
        dieError("Could not authenticate");
    }

    if(!isset($_FILES['userfiles']))
    {
        dieError("No files sent");
    }
    
    if(!isset($_POST["id"]))
    {
        dieError("No gallery specified");
    }
    
    $dirtyId = $_POST["id"];
    
    require("dbconfig.php");

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        ob_end_clean();
        dieError("Could not connect to the database");
    }
    
    $stmt = $conn->prepare("SELECT id FROM Galleries WHERE id = ?");
    $stmt->bind_param("s", $dirtyId);
    $stmt->execute();
    $stmt->bind_result($cleanId);
    $stmt->store_result();
    
    if($stmt->num_rows == 0)
    {
        dieError("Could not find the required gallery");
    }

    // Count # of uploaded files in array
    $total = count($_FILES['userfiles']['name']);

    if($total == 0)
    {
        dieError("No files sent");
    }
    
    // Loop through each file
    for($i=0; $i<$total; $i++) {
      //Get the temp file path
      $tmpFilePath = $_FILES['userfiles']['tmp_name'][$i];

      //Make sure we have a filepath
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "uploadFiles/" . $_FILES['userfiles']['name'][$i];

        // Handle error case where directory doesn't exist and this would print an error!
        
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