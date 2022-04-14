<?php 

    $fruit = ['orange', 'banana', 'apple', 'grapes', 1=>'mango'];

    $veggie = ['carrot', 'pea'];

    $newArray = array_replace($fruit, $veggie);


    echo "<pre>"; 
    print_r($newArray);
    echo"</pre>";


?>