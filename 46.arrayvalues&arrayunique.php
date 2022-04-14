<?php 

    $color = array('a'=> "red", 'b'=>"green", 'c'=>'red', 'd'=> 'yellow');

    $newArray = array_values($color);

    echo "<pre>";
        print_r($newArray);
    echo "</pre>";


    $newArrayUnique = array_unique($color);

    echo "<pre>";
        print_r($newArrayUnique);
    echo "</pre>";

?>