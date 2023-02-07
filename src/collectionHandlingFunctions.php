<?php

function describeCollectionItem(array $item): string {
    $description = '<div class="collection_item">';
    $description .= '<h3>' . $item["name"] . " " . $item["shade"] . '</h3>';
    
    if($item["image"]!== NULL) {
        $description.= '<img src="images/' . $item["image"] . '" alt="A picture of ' .
                      $item["name"]. ' in shade ' . $item["shade"] . '>';      
    } else {
       $description .= '<img src="images/colorful-wool.jpg" alt="Stock image of colorful yarn">' ;
    }

    $description .= '<h4>Description</h4>';
    $description .= '<ul>';
    $description .= '<li>Dominant colour: '. $item['dominantColour'] .'</li>';
    $description .= '<li>Yarn type: '. $item['yarnType'] .'</li>';
    $description .= '<li>Composition: '. $item['composition'] .'</li>';
    $description .= '<li>Length of a skein: '. $item['lengthInMeters'] .' m</li>';
    $description .= '<li>Quantity: '. $item['skeinNumber'] .' skeins in stash i.e ' . floor($item['skeinNumber'] * $item['lengthInMeters']) . ' m</li>'; 
    if($item["project"]!== NULL) {
        $description.= '<li>Allocated to project: '. $item['project'] .'</li>';       
    } else {
        $description.= '<li>Available for a new project!</li>';
    }
    
    $description .= '</ul>';
    $description .= '</div>';

    return $description;
}


?>