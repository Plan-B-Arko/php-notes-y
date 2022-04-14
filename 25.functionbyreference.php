<?php 

    // Pass by reference changes the original value due  and stores the address as the reference. As a result, it changes its original value. Whereas, Pass by value does not change the original value.


    // Pass by value
    function testing($string) {
        $string .= " and something extra";
    }

    $str = "This is a string";
    testing($str);
    echo $str;


    // Pass by Reference
     function testing1(&$string) {
        $string .= " and something extra";
    }

    echo "<br>";
    $str1 = "This is a string";
    testing1($str);
    echo $str;

    echo "<br>";

    function first($num) {
        $num += 5;
    }

    function second(&$num) {
        $num += 5;
    }

    $number = 10;
    first($number);
    echo "Original value is $number <br>";

    second($number);
    echo "Modified value due to pass by reference is $number <br>";



?>