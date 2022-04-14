<?php 

    $color = ["red", "green", "blue", "yellow"];

    $arrayKey = array_keys($color);


    echo "<pre>";
        print_r($arrayKey);
    echo"</pre>";


    echo "<br><br>";
     $color1 = ["first"=>"red","second" =>"green", "third"=>"blue", "fourth"=>"yellow"];

    $arrayKey1 = array_keys($color1);


    echo "<pre>";
        print_r($arrayKey1);
    echo"</pre>";

  
    echo "<br>";
    $arrayKeyExist = array_key_exists('third',$color1);
     echo "<pre>";
        print_r($arrayKeyExist); // will give '1' if it exist and nothing if it does not exist
    echo"</pre>";



    if($arrayKeyExist) {
        echo "Key Exists!";
    } else {
        echo "Key does not exist!";
    }

?>