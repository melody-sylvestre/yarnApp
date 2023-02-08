<?php

function describeCollectionItem(array $item): string {
    
    if($item===[]){
        throw new Exception("Empty collection item!\n");
    
    } else if(!isset($item["name"])) {
        throw new Exception("Undefined yarn name - there must be something wrong with this item...\n");  
    
    } else {
        $description = '<div class="collection_item">';
        
        if(isset($item["name"]) && isset($item["shade"])){
            $description .= '<h3>' . $item["name"]. " " . $item["shade"] . '</h3>';
        
        } else if(!isset($item['shade'])){
            $description .= '<h3>' . $item["name"]. '</h3>';
        }

        if(isset($item["image"])) { 
            if (isset($item["shade"])) {
                $description.= '<img src="images/' . $item["image"] . '" alt="A picture of ' .
                            $item["name"]. ' in shade ' . $item["shade"] . '">';      
            } else {   
                $description.= '<img src="images/' . $item["image"] . '" alt="A picture of ' . $item["name"].'">';
            }    
        } else {
            $description .= '<img src="images/colorful-wool.jpg" alt="Stock image of colorful yarn">' ;
        }

        $description .= '<h4>Description</h4>';
        $description .= '<ul>';

        if(isset($item['dominantColour'])){
            $description .= '<li>Dominant colour: '. $item['dominantColour'] .'</li>';
        }
    
        if(isset($item['yarnType'])){
            $description .= '<li>Yarn type: '. $item['yarnType'] .'</li>';
        }    
    
        if(isset($item['composition'])){
            $description .= '<li>Composition: '. $item['composition'] .'</li>';
        }    

        if(isset($item['lengthInMeters'])){
            $description .= '<li>Length of a skein: '. $item['lengthInMeters'] .' m</li>';
        }

        if(isset($item['skeinNumber'])){
            $description .= '<li>Quantity: '. $item['skeinNumber'] .' skeins in stash</li>';
        }

        if(isset($item["project"])){
            $description.= '<li>Allocated to project: '. $item['project'] .'</li>';       
        } else {
            $description.= '<li>Available for a new project!</li>';
        }
    
        $description .= '</ul>';
        $description .= '</div>';
    }

    return $description;
}


?>