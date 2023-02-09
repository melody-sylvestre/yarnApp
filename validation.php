<?php

session_start();

require "src/dbFunctions.php";

$itemIsInvalid = $_POST===[] || !isset($_POST["name"]) ; 

if ($itemIsInvalid) {
    $_SESSION["validItem"] = false ;
    header('Location addItem.php');
} else {
    $newYarn = [
            "name" => $_POST["name"], 
            "shade" => NULL, 
            "dominantColour" => $_POST["dominantColour"],
            "composition" => NULL,
            "yarnType" => $_POST["yarnType"], 
            "lengthInMeters" => NULL,
            "skeinNumber" => NULL, 
            "project"=> NULL,
            "image" => NULL      
        ]; 
    
    if (isset($_POST["shade"])) {
        $newYarn["shade"] = $_POST["shade"];
    }    

    if (isset($_POST["dominantColour"])) {
        $newYarn["dominantColour"] = $_POST["dominantColour"];
    }    

    if (isset($_POST["composition"])) {
        $newYarn["composition"] = $_POST["composition"];
    }

    if (isset($_POST["lengthInMeters"])) {
        $newYarn["lengthInMeters"] = filter_var($_POST["lengthInMeters"], FILTER_SANITIZE_NUMBER_FLOAT); 
    }

    if (isset($_POST["skeinNumber"])) {
        $newYarn["skeinNumber"] = filter_var($_POST["skeinNumber"], FILTER_SANITIZE_NUMBER_FLOAT);
    }

    if (isset($_POST["project"])) {
        $newYarn["project"] = $_POST["project"];
    }    

    if (isset($_POST["image"])) {
        $newYarn["image"] = filter_var($_POST["image"], FILTER_SANITIZE_URL); 
     }
 
     $_SESSION["validItem"] = true; 
     $yarnDb = connectToDb("yarnStashDb");
     addItemToDb($yarnDb, $newYarn);

//     header('Location: addItem.php');
     //add something with db?


}





?>