<?php

require "../collectionHandlingFunctions.php";
use PHPUnit\Framework\TestCase;

class CollectionHandlingFunctions extends TestCase 
{
    public function testSuccessDescribeCollectionItem_EverythingDefined()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow>';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash i.e 200 m</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_noImage()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => NULL      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/colorful-wool.jpg" alt="Stock image of colorful yarn">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash i.e 200 m</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}

?>