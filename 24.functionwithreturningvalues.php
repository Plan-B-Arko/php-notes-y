<?php 

    function hello($fname="First", $lname="Last") {
        $v = "$fname $lname". "<br>";
        return $v;
    }

   echo  hello("Nadia", "Islam");
   $x = hello("Hattori", "Hanzo");
   echo  "Hello $x <br>";

   function percentage($st) {
       $perc = ($st / 3) ;
       echo $perc. "%";
   }

   function sum($math, $eng, $sc) {
       $s = $math + $eng + $sc;
       return $s;
   }

   $total = sum(55, 25, 80);
   echo "<br> Total:". $total;
   
   echo "<br>";
   percentage($total);

?>