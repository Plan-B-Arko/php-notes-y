<?php 

    $age = array("Bill"=>25, "Steve"=> 45, "Elon"=> 35);

    echo $age["Bill"];
    echo "<br>";
    echo $age["Steve"];
    echo "<br>";
    echo $age["Elon"];
    echo "<br>";
    print_r($age);

    // Changing the value of Elon to 50.
    echo "<br>";
    $age["Elon"] = 50;
    print_r($age);

    $age1 = [
        1 => 25,
        2 => 30.55,
        3 => 40
    ];
    echo "<pre>";
    var_dump($age1);
    echo "</pre>";
    echo "<br>";
    echo $age1[1]. "<br>";
    echo $age1[2]. "<br>";
    echo $age1[3]. "<br>";
?>