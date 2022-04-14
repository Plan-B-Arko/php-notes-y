<?php 


    /*
        array_merge() is used for index or associative array.

        array_merge_recursive() is used for multidimenstional associative array.

        array_combine is used for index array.
    */

    $fruit = ["orange", "banana", "grapes", 'x'=> "tomato"];
    $veggie = ['carrot', 'pea'];
    $junk = ['pizza', 'burger', 'chips', 'd'=>"chickenfry", 'x'=>"cherry", 'y'=> 'toppings'];
    $others = ['a'=> "biryani", 'b'=> 'chicken roast', 'c'=> 'cake', 'y'=> ['color'=>['green', 'red', 'yellow']],];

    $newArray = array_merge($fruit, $veggie, $junk, $others);

    echo "<pre>";
        print_r($newArray);
    echo "</pre>";

    echo "<br>";
    $newArray1 = array_merge_recursive($fruit, $veggie, $junk, $others);
    echo "<pre>";
        print_r($newArray1);
    echo "</pre>";


    echo "<br>";

    $name = ["Nadia", "Sarah", "Oishi"];
    $age= [25, 28, 30];

    $newArray3 = array_combine($name, $age);
    echo "<pre>";
        print_r($newArray3);
    echo "</pre>";
?>