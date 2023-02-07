<?php

function connectToDb(string $dbname): PDO {
    $db = new PDO("mysql:host=db; dbname=$dbname", "root", "password");
    $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    return $db;  
}

function getItemsFromDb(PDO $db): array {
    $query = $db->prepare("SELECT * FROM yarn");
    $query->execute();
    $yarnItems = $query->fetchAll();

    return $yarnItems;
}

?>