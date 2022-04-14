<?php 

    /*
           (condition)? true statements: false statements. 
           
           Difference between ternary statements and if else statements is that if else  can have multiple staments while ternary operator can only have one statement
    */


    $x = 30;

    ($x > 20)? $z = "Greater" : $z = "Smaller";
    
    echo $z;

    echo "<br>";
    $c = ($x > 20)? "Greater": "Smaller";
    echo $c;

    echo "<br>";
    $d = "Value of $x is: ". ($x > 20? "Greater": "Smaller");
    echo $d;




?>