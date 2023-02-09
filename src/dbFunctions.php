<?php

function connectToDb(string $dbname): PDO {
    $db = new PDO("mysql:host=db; dbname=$dbname", "root", "password");
    $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    return $db;  
}

function getItemsFromDb(PDO $db): array {
    $query = $db->prepare("SELECT name, shade, dominantColour, composition, yarnType, 
             lengthInMeters, skeinNumber, project, image  FROM yarns");
    $query->execute();
    $yarnItems = $query->fetchAll();

    return $yarnItems;
}

