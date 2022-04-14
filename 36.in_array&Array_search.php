<?php

        $food = array('orange', 'banana', 'mango', 'biryani', 'dal', 55, '75');
        echo in_array('orange', $food); // it will give 1, becauste it found the item 'orange' in $food array.
        echo "<br>";
        echo in_array('lime', $food); //it will not give anything, because it did not find the item 'lime' in $food array.

        if(in_array('lime', $food)) {
            echo "Found Successfully";
        } else {
            echo "Can't find";
        }
        echo "<br>";
        if(in_array('mango', $food)) {
            echo "Found Successfully";
        } else {
            echo "Can't find";
        }

         echo "<br>";
        if(in_array( 55, $food)) {
            echo "Found Successfully";
        } else {
            echo "Can't find";
        }

         echo "<br>";
         // we see 75 is a string in an array. but it is showing "Found Successfully"
        if(in_array(75, $food)) {
            echo "Found Successfully";
        } else {
            echo "Can't find";
        }

        echo "<br>";
        // so inorder to enable it strictly,add another parameter. The parameter can be true or false to enable strict mode
        if(in_array(75, $food, true)) {
            echo "Found Successfully";
        } else {
            echo "Can't find";
        }

        echo "<br>";

       

      $foods = array('a'=> 'orange', 'b'=> 'apple', 'c'=> 'banana');
      echo array_search('apple', $foods);
?>