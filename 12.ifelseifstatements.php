<?php 

    $percentage = 55;

    if($percentage >= 80 && $percentage <= 100) {
        echo "You are in Merit";
    } else if($percentage >= 60 && $percentage < 80) {
        echo "You are in 1st Division";
    } else if ($percentage >= 45 && $percentage < 60 ) {
        echo "You are in 2nd Division";
    } else {
        echo "You are in none of the division";
    }



?>