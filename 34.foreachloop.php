<?php 

    $employee = [
        [1, "Nadia", "Manager", 50000],
        [2, "Sarah", "Graphic Designer", 60000],
        [3, "Hamid", "CEO", 80000],
        [4, 'Amir', "Driver", 30000],
    ];

    foreach($employee as list($id, $name, $designation, $salary)) {
        echo "$id $name $designation $salary <br>";
    }

    echo"<br>";
    echo "<table border='1px' cellspacing='0' cellpadding='5px'>

        <tr>

            <th>Emp Id.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
    
    
    
    ";
        
    foreach($employee as list($id, $name, $designation, $salary)) {
        echo " <tr>
        <td>$id</td>
        <td>$name</td> 
        <td>$designation </td>

       <td> $salary <br></td>
       </tr>";
    }

    echo"</table>";

    echo "<br>";

    $emp = [
        [
            "id"=> 1,
            "name"=> "Nadia",
            "designation" => "Manager",
            "salary"=> 60000,
        ],
        [
            "id"=> 2,
            "name"=> "Amir",
            "designation" => "Executive",
            "salary"=>20000,
        ],
        [
            "id"=> 3,
            "name"=> "Sarah",
            "designation" => "Designer",
            "salary"=> 30000,
        ],
    ];

        echo"<br>";
    echo "<table border='1px' cellspacing='0' cellpadding='5px'>

        <tr>

            <th>Emp Id.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
    
    
    
    ";
        
    foreach($emp as list("id"=>$id,"name"=> $name,"designation"=> $designation, "salary"=> $salary)) {
        echo " <tr>
        <td>$id</td>
        <td>$name</td> 
        <td>$designation </td>

       <td> $salary <br></td>
       </tr>";
    }


?>