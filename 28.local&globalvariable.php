<?php 


    $a = 5;

    function test() {
        $x = 10;
        echo "Variable X inside function: $x";
        echo "<br> Variable of a is: $a "; // give an error

        // to make it accesible,
        global $a;
        echo "Value of a is $a";
    }
    test();
    echo "Variable X outside the function: $x"; // It will give an error, because $x is a local variable inside function test().




?>