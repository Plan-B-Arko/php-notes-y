<?php 

    $x = 15;

    if($x > 30) {
        echo "X is greater";
    } else {
        echo "X is smaller";
    }

    echo "<br>";
    $x = 100;

    if ($x == 100) {
        echo "X is same";
    } else {
        echo "X is not same";
    }

    $x = "100";
    echo "<br>";
    if($x === 100) {
        echo "X is same";
    } else {
        echo "X is not same";
    }

    $name = "Nadia";
    $gender = "female";

    echo "<br>";
    if ($gender == "male") {
        echo "Hello Mr. $name";
    } else {
        echo "Hello Miss. $name";
    }

?>