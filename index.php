<?php

require "src/dbFunctions.php";

$db = connectToDb("yarnStashDb");
$yarnItems = getItemsFromDb($db);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>My yarn stash</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css" rel="stylesheet">
    <link href="styles/style.css" type="text/css" rel="stylesheet">        
</head>
<body>
    <header>
        <h1>My Yarn Stash</h1>  
    </header>
    
    <main>
        <h2>Yarn collection</h2>
        <div class="collection_item">
            <h3>An example of yarn</h3>
            <img src="images/colorful-wool.jpg" alt="A picture of this yarn">
            <p>Description</p>
            <ul>
                <li>Property 1: stuff</li>
            </ul>        
        </div>
        <?php
            print_r($yarnItems); // this is just for testing
        ?>    
    </main>    

    <footer>
        <p>©Copyright 2023</p>
    </footer>
</body>    
</html>

