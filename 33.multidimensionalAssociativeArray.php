<?php 

    $marks = [
        "Nadia" => [
            "physics"=> 85,
            "math" => 80,
            "chemistry" => 70,
        ],
        "Sarah" => [
             "physics"=> 85,
            "math" => 90,
            "chemistry" => 65,
        ],
        "Jazeb" => [
            "physics"=> 93,
            "math" => 90,
            "chemistry" => 98,
        ],
        "Amin" => [
            "physics"=> 40,
            "math" => 82,
            "chemistry" => 72,
        ]
    ];

    echo  "<table border= '2px' cellpadding='5px' cellspacing='0'>
            <tr>
                <th>Student Name</th>
                <th>Physics</th>
                <th>Maths</th>
                <th>Chemistry</th>
            </tr>
    ";
        
    foreach($marks as $key => $v1) {
        echo "<tr>";

        echo "<td> $key </td>" ;
        foreach($v1 as $v2) {
            echo  "<td>$v2</td>";
        }
        echo "<tr>";
    }
    echo "</table>";


    echo "<pre>";
        print_r($marks);
    echo "</pre>";


?>