<?php 

    $fruit = array('Orange', 'Apple', 'Mango','Grape', 'Orange');
    echo count($fruit);
    echo "<br>";
    echo sizeof($fruit);

    $food = array(
        'fruit'=> array('orange', 'banana', 'apple', 'grape'),
        'veggies'=>array('carrot', 'collard', 'pea', 'cauliflower'),
    );
    echo "<br>";
    echo count($food);
    echo "<br>";
    echo count($food,1);
    echo "<br>";
    echo count($food["fruit"]);

    echo "<br> <br>";
    $len = count($fruit);
    for($i = 0; $i <$len; $i++) {
        echo $fruit[$i]. " ";
    }

    echo "<br> <br>";
    echo array_count_values($fruit); // will give you an error.


    echo "<pre>";
        print_r(array_count_values($fruit)); // it will give how many times an array item is repeated. Here, orange is repeated 2 times.
    echo "</pre>";


?>
