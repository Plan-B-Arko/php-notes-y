<?php 

    $a = ['Tony', 'Klaus', 'Lennon', 'Maria', 'Natasha'];

    $colors = ["green", "yellow", "blue", "red", "pink"];
    print_r($colors);
    echo "<br>";

    $newArray = array_slice($colors, 1, 3 );

    echo "<pre>";
        print_r($newArray);
    echo"</pre>";

    $newArray1 = array_slice($colors, -2, 1 );

    echo "<pre>";
        print_r($newArray1);
    echo"</pre>";

    echo "<br>";
     $newArray2 = array_slice($colors, -2, 3 );

    echo "<pre>";
        print_r($newArray2);
    echo"</pre>";

     echo "<br>";
     $newArray3 = array_slice($colors, -1, 2, true );

    echo "<pre>";
        print_r($newArray3);
    echo"</pre>";


    $color1 = ['a'=> 'red', 'b'=> 'green', '21'=> 'blue', 'd'=> 'orange'];
    echo "<br>";
    // added 'true' as the fourth parameter in arrayNew1.
    $arrayNew1 = array_slice($color1, 1, 3, true);
    echo "<pre>";
        print_r($arrayNew1);
    echo "</pre>";

?>