<?php 

    $a1 = array("a"=> "red", "b"=> "green", "c"=> "blue", "d"=> "yellow");

    $a2 = array("a"=> "red", "f"=> "green", "d"=>"purple");

    $a3 = array("a"=>"red", "b"=> "black", "c"=>"yellow");

    $newArray = array_diff($a1,$a2,$a3);

    echo "<pre>";
        print_r($newArray);
    echo"</pre>";

     $newArrayKey = array_diff($a1,$a2);
    echo "<pre>";
        print_r($newArrayKey);
    echo"</pre>";


?>