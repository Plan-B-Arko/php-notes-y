<?php 

    $age = [
        "bill" => 25,
        "Steve" => 30,
        "Elon" => 22,
    ];

    echo "<ul>";
    foreach($age as $key=>$value) {
       echo "<li>$key = $value</li>";
    }
    echo "</ul>";


?>