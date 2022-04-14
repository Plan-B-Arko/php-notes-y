<?php 

    function hello($name) {
        echo "Hello $name. <br>";
    }

    hello("Yahoo");
    //hello(); // it will give error, because, you have not give any arguments.
    hello("Nadia");

    function greet($fname = "Lisa", $lname = "Pathan") {
        echo "Hello $fname $lname. <br>";
    }

    greet("Hatori", "Hanzo");
    greet("Nadia", "Islam");
    greet(); // showing no errors because you set default values in the function parameters.


    function sum($a = 1,$b = 2) {
        echo $a + $b. "<br>";
    }
    sum(2,3);
    sum(10 , 9);
    sum();
    $one = 15;
    $two = 22;
    sum($one, $two);




?>