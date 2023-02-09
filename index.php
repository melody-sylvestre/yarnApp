<?php

require "src/dbFunctions.php";
require "src/collectionHandlingFunctions.php";

$db = connectToDb("yarnStashDb");
$yarnItems = getItemsFromDb($db);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Melody's yarn stash</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css" rel="stylesheet">
    <link href="styles/style.css" type="text/css" rel="stylesheet">
    <!-- <link href="styles/advancedStyling.css" type="text/css" rel="stylesheet">            -->
</head>

<body>
    <header>
        <h1 tabindex="0">My Yarn Stash</h1>  
    </header>
    
    <main>
        <h2 tabindex="0">Yarn collection</h2>
        <div class="interactions_with_db">
            <a href="addItem.php">Add a new Item</a>
        </div>   
        <?php
            foreach($yarnItems as $yarn){
                try {
                    echo describeCollectionItem($yarn);
                } catch (Exception $exception) {
                   error_log($exception->getMessage(), 3, "error.log");     
                }    
            }
        ?>    
    </main>
     
    <footer>
        <p>© Copyright 2023</p>
    </footer>
</body>    
</html>

