<?php 

    // Difference between splice and slice is that slice creates a new array and do not make changes in the original array whereas splice makes changes in the original array.

    $color = ['red', 'green', 'blue', 'yellow', 'brown'];

    print_r($color);
    echo "<br>";
    array_splice($color,1,2); // starting from index1 and removing 2 element or item.

    print_r($color);
    echo "<br>";

    $color1 = ['red', 'green', 'blue', 'yellow', 'brown'];
    array_splice($color1, 1); // start from index 1 and remove every item or element starting from index1.

    echo "<br>";
     $color2 = ['red', 'green', 'blue', 'yellow', 'brown'];
    array_splice($color2, 1, -1); // start from index 1 and also take from last position index and delete everything in between.
    print_r($color2);



     echo "<br>";
     $color3 = ['red', 'green', 'blue', 'yellow', 'brown'];
    array_splice($color3, 1, -2); // start from index 1 and also take from last second position index and delete everything in between.
    print_r($color3);

    echo "<br>";

    $color4 = ['red', 'green', 'blue', 'yellow', 'brown'];
    print_r( $color4);
    echo "<br>";
    $fruit = ['Orange', 'Apple'];
    array_splice($color4, 2, 2, $fruit); // start from index2 and remove 2 items and put the items from fruit array.
    echo "<br>";
    print_r($color4);
    echo "<br>";
    print_r  (count($color4));

    echo "<br><br>";
    $color5 = ['red', 'green', 'blue', 'yellow', 'brown'];
    $fruit1 = ['Orange', 'Apple'];
    array_splice($color5, 2,count($color5), $fruit1);
    print_r($color5);


    echo "<br><br>";
    $color6 = ['red', 'green', 'blue', 'yellow', 'brown'];
    $fruit2 = ['Orange', 'Apple'];
    array_splice($color6, 2,0, $fruit1);
    print_r($color6);



    echo "<br><br>";
    $color7 = ['red', 'green', 'blue', 'yellow', 'brown'];
    $fruit3 = ['Orange', 'Apple'];
    array_splice($color7, 0,0, $fruit3);
    print_r($color7);


    echo "<br><br>";
    $color8 = ['red', 'green', 'blue', 'yellow', 'brown'];
    $fruit4 = ['Orange', 'Apple'];
    array_splice($color8, count($color8),0, $fruit4);
    print_r($color8);



?>