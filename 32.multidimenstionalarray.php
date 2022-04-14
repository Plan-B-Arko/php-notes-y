<?php 

    $employee = [
        [1, "Nadia","Trainee", 50000],
        [2, "Sarah", "Graphic Designer", 60000],
        [3, "Jazeb",'Manager', 30000],
        [4, 'Amir', 'Driver', 50000],
    ];


    for($row = 0; $row < 4; $row++) {
        for($col =0; $col < 4; $col++) {
            echo $employee[$row][$col];
        }
        echo "<br>";
    }
    echo "<br>";

   echo "<table border='2px' cellpadding='5px' cellspacing = '0'>";
   echo "<tr>  
        <th>Employee Id</th>
        <th>Employee Name</th>
        <th>Designations</th>
        <th>Salary</th>
   </tr>";
   
    foreach($employee as $v1) {
        echo "<tr>";
        foreach($v1 as $v2 ) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    echo "<pre>";
    print_r($employee);
    echo "</pre>";



?>