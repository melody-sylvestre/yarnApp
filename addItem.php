<?php
    session_start();
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
            <input type="text" name="name" id="name">
            
            <label for="shade">Shade</label>
            <input type="text" name="shade" id="shade">

            <label for="image">Image</label>
            <input type="url" name="image" id="image">
        </div>

        <div class="yarn_caracteristics">
            <label for="dominantColour">Dominant colour</label>
            <select name="dominantColour" id="dominantColour">
                <option value="black">Black</option>
                <option value="Grey">Grey</option> 
                <option value="blue">Blue</option> 
                <option value="green">Green</option>
                <option value="orange">Orange</option>
                <option value="pink">Pink</option>
                <option value="purple">Purple</option>
                <option value="red">Red</option>
                <option value="white">White</option>
                <option value="yellow">Yellow</option>
             </select>

            <label for="composition">Composition</label>
            <input type="text" name="composition" id="composition"> 

            <label for="yarnType">Yarn type</label>
            <select name="yarnType" id="yarnType">
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
           <input type="number" name="lengthInMeters" id="lengthInMeters" required> 

           <label for="skeinNumber">Number of skeins</label>
           <input type="number" name="skeinNumber" id="skeinNumber" required>
        </div>    

        <div class="project">
            <label for="project">Project</label>
            <input type="text" name="project" id="project">
        </div>

        <div class="submit_form">
            <input type="submit" value="Submit">
        </div>
    </form>

    <footer>
        <?php 
            if (isset($_SESSION['validItem'])) {
                if ($_SESSION['validItem']) {
                    echo '<p>Your new yarn was added in the stash!</p>';
                    unset($_SESSION['validItem']);
                } else {
                    echo '<p>There was an issue with your new item - try again</p>';
                    unset($_SESSION['validItem']);
                }
            }
        ?>
        <a href="index.php">Return to stash</a>
    </footer>    
</body>

</html>