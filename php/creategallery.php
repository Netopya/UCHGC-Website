<?php
    session_start();
    
    if(!isset($_SESSION["userId"]))
    {
        die("Illegal operation");
    }

    $enname = isset($_POST['enname']) ? $_POST['enname'] : "";
    $frname = isset($_POST['frname']) ? $_POST['frname'] : "";
    $ukname = isset($_POST['ukname']) ? $_POST['ukname'] : "";
    
    $errorMessage = "";
    $errorIds = array();
    
    if(empty($enname))
    {
        $errorMessage .= " The English title cannot be empty. ";
        array_push($errorIds("en_name"));
    }
    
    if(empty($frname))
    {
        $errorMessage .= " The French title cannot be empty. ";
        array_push($errorIds("fr_name"));
    }
    
    if(empty($ukname))
    {
        $errorMessage .= " The Ukrainian title cannot be empty. ";
        array_push($errorIds("uk_name"));
    }

    if(empty($errorMessage))
    {
        $stmt = $conn->prepare("INSERT INTO Users (username, firstname, lastname, passwordhash, email) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $username, $firstname, $lastname, $hash, $email);
        $success = $stmt->execute();
    }
?>