<?php 

    $a = array(
        "Bill" => 10,
        "Joe" => 20,
        "Peter" => 30,
    );

    $newArrayFlip = array_flip($a);
    echo "<pre>";
        print_r($newArrayFlip);
    echo"</pre>";


     $newArrayCase = array_change_key_case($a, CASE_UPPER);
    echo "<pre>";
        print_r($newArrayCase);
    echo"</pre>";


?>