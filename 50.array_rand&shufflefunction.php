<?php 

    $a = ["red", "green", "black", "blue", "violet", "orange"];

    echo "The original array of 'a' is:";
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    echo "<br> <br>";
    echo "The random array is:";

    $newArrayRand = array_rand($a);

    echo "<pre>";
        print_r($newArrayRand); // gives you a random index of the array.
    echo"</pre>";

    echo $a[$newArrayRand];


    $newArrayRand2 = array_rand($a, 2); // gives you 2 random indexes of the array.

    echo "<pre>";
        print_r($newArrayRand2); 
    echo"</pre>";

     echo $a[$newArrayRand2[0]];
     echo "<br>";
     echo $a[$newArrayRand2[1]];




         $newArrayRand3 = array_rand($a, 3); // gives you 3 random indexes of the array.

        echo "<pre>";
            print_r($newArrayRand3); 
        echo"</pre>";

        echo $a[$newArrayRand3[0]];
            echo "<br>";
        echo $a[$newArrayRand3[1]];
        echo "<br>";
        echo $a[$newArrayRand3[2]];



        $newArrayRand4 = array_rand($a, 4); // gives you 4 random indexes of the array.

        echo "<pre>";
            print_r($newArrayRand4); 
        echo"</pre>";

        echo $a[$newArrayRand4[0]];
            echo "<br>";
        echo $a[$newArrayRand4[1]];
        echo "<br>";
        echo $a[$newArrayRand4[2]];
        echo "<br>";
        echo $a[$newArrayRand4[3]];

    


        echo "<br> <br>The random of associative array are: ";
        $b = array("a"=> "red", "b"=> "black", "c" => "orange", "d"=> "blue");
        echo "<br> <br> The original array:";
        print_r($b);

        $newArrayRandomAsociative = array_rand($b);
        echo "<pre>";
            print_r($newArrayRandomAsociative);
        echo "</pre>";
        echo $b[$newArrayRandomAsociative];


          $newArrayRandomAsociative2 = array_rand($b, 2);
        echo "<pre>";
            print_r($newArrayRandomAsociative2);
        echo "</pre>";
        echo $b[$newArrayRandomAsociative2[0]];
        echo "<br>";
        echo $b[$newArrayRandomAsociative2[1]];









        echo "<br> <br> <br>";
        shuffle($a);
        echo "<pre>";
            print_r($a);
        echo"</pre>";
       




?>