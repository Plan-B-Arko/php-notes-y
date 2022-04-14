<?php 

    $a = array("a", "b", "c", "d", "e");

    $newArrayFillKey = array_fill_keys($a, "testing");

    echo "<pre>"; 
        print_r($newArrayFillKey);
    echo "</pre>";


    //$newArrayFill = array_fill(starting index, number of values, 'fixedValue');

    $newArrayFill1 = array_fill(4, 5, "testing");
    echo "<pre>";
        print_r($newArrayFill1);
    echo"</pre>";


     $newArrayFill2 = array_fill(-2, 5, "testing");
     echo "<pre>";
        print_r($newArrayFill2);
     echo"</pre>";


       $newArrayFill3 = array_fill(0, 4, "testing");
     echo "<pre>";
        print_r($newArrayFill3);
     echo"</pre>";





?>