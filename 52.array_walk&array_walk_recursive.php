<?php 

    $fruits = array(
        'a' => 'lemon',
        'b' => 'Orange',
        'c' => 'banana',
        'd' => 'apple',
    );

    array_walk($fruits, "myFunction");

    function myFunction($value, $key) {
        echo "$key: $value <br>";
    }

?>