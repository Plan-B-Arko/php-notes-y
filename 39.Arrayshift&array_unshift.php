<?php 

    $fruit = ['orange', 'banana', 'grapes'];
    print_r($fruit);
    echo  "<br>";

    array_shift($fruit); // will delete the item at the begining of the array.
    echo "<pre>";
        print_r($fruit);
    echo"</pre>";


    echo "<br>";
    array_unshift($fruit, "apple", "mango", "jackfruit"); // will add the items at the beginning of an array.
    echo "<pre>";
        print_r($fruit);
    echo"</pre>";


?>