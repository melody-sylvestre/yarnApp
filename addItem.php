<?php

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Melody yarn's stash</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css" rel="stylesheet">
    <link href="styles/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1>Add a new item in the stash</h1>

    <form method="post" action="validation.php">

        <div class="yarn_id">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            
            <label for="shade">Shade</label>
            <input type="text" name="shade">

            <label for="image">Image</label>
            <input type="url" name="image">
        </div>

        <div class="yarn_caracteristics">
            <label for="dominantColour">Dominant colour</label>
            <select name="dominantColour">
                <option value="black">Black</option> 
                <option value="blue">Blue</option> 
                <option value="green">Green</option>
                <option value="orange">Orange</option>
                <option value="pink">Pink</option>
                <option value="purple">Purple</option>
                <option value="red">Red</option>
                <option value="white">White</option>
                <option value="yellow">Yellow</option>
             </select>

            <label for="yarnType">Yarn type</label>
            <select name="yarnType">
                <option value="Lace or 1 Ply">Lace or 1 Ply</option> 
                <option value="Fingering or 2 Ply">Fingering or 2 Ply</option> 
                <option value="Sport or 4 Ply">Sport or 4 Ply</option> 
                <option value="DK">DK</option>  
                <option value="Aran">Aran</option> 
                <option value="Chunky">Chunky</option>
                <option value="Super Chunky">Super Chunky</option>
                <option value="Macrame Cord">Macrame Cord</option> 
             </select>   
        </div>

        <div class="quantity">
           <label for="lengthInMeters">Length of a skein (in meters)</label>
           <input type="number"> 

           <label for="skeinNumber">Number of skeins</label>
           <input type="number">
        </div>    

        <div class="project">
            <label for="project">Project</label>
            <input type="text" name="project">
        </div>

        <div class="submit_form">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>