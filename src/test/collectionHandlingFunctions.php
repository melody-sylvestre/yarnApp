<?php
require "../collectionHandlingFunctions.php";
use PHPUnit\Framework\TestCase;

class CollectionHandlingFunctions extends TestCase 
{

    public function testFailureDescribeCollectionItem_EmptyItem() 
    {
        $yarnExample = [];
        $this->expectException(Exception::class); 
        describeCollectionItem($yarnExample);
    }
    
    public function testFailureDescribeCollectionItem_undefinedName() {
        $yarnExample = ["name" => NULL, 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $this->expectException(Exception::class);
        describeCollectionItem($yarnExample);
    }

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
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedShade()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => NULL, 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }


    public function testSuccessDescribeCollectionItem_undefinedImage()
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
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedProject()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> NULL,
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Available for a new project!</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedColour(){
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => NULL,
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedYarnType()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedComposition()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => 2, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedLength()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => NULL,
                        "skeinNumber" => 2, 
                        "project"=> NULL,
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';            
        $expectedOutput .= '<li>Quantity: 2 skeins in stash</li>';
        $expectedOutput .= '<li>Available for a new project!</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDescribeCollectionItem_undefinedSkeinNumber()
    {
        $yarnExample = ["name" => "Unicorn brand", 
                        "shade" => "Rainbow", 
                        "dominantColour" => "purple",
                        "composition" => "Cashmere",
                        "yarnType" => "Super Chunky", 
                        "lengthInMeters" => 100,
                        "skeinNumber" => NULL, 
                        "project"=> "Cool rainbow hat",
                        "image" => "blue_scarf.jpg"      
                    ];
        $expectedOutput = '<div class="collection_item">';
        $expectedOutput .= '<h3>Unicorn brand Rainbow</h3>';
        $expectedOutput .= '<img src="images/blue_scarf.jpg" alt="A picture of Unicorn brand in shade Rainbow">';              
        $expectedOutput .= '<h4>Description</h4>';
        $expectedOutput .= '<ul>';
        $expectedOutput .= '<li>Dominant colour: purple</li>';
        $expectedOutput .= '<li>Yarn type: Super Chunky</li>';
        $expectedOutput .= '<li>Composition: Cashmere</li>';
        $expectedOutput .= '<li>Length of a skein: 100 m</li>';            
        $expectedOutput .= '<li>Allocated to project: Cool rainbow hat</li>';
        $expectedOutput .= '</ul>';
        $expectedOutput .= '</div>'; 
        
        $actualOutput = describeCollectionItem($yarnExample);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

}

?>