<?php 

    $array = array(
        array(
            'id'=> 2201,
            'first_name'=> 'Nadia',
            'last_name'=> 'Islam',
        ),
        array(
            'id'=> 2202,
            'first_name'=> 'Amir',
            'last_name'=> 'Sobhan',
        ),
        array(
            'id'=> 2203,
            'first_name'=> 'Sarah',
            'last_name'=> 'Sarwar',
        ),
    );

    $newArray = array_column($array,'first_name');

    echo "<pre>";
        print_r($newArray);
    echo"</pre>";

    $newArray1 = array_column($array,'last_name');

    echo "<pre>";
        print_r($newArray1);
    echo"</pre>";

     $newArray2 = array_column($array,'last_name', 'id');

    echo "<pre>";
        print_r($newArray2);
    echo"</pre>";



    $cars = ['Volva', 'BMW', 'Honda', 'Opel', 'Jaguar', 'Corolla'];

    $newArrayChunk = array_chunk($cars, 2);

    echo "<pre>";
        print_r($newArrayChunk);
    echo"</pre>";

    $newArrayChunk1 = array_chunk($cars, 3);

    echo "<pre>";
        print_r($newArrayChunk1);
    echo"</pre>";

    $newArrayChunk2 = array_chunk($cars, 4);

    echo "<pre>";
        print_r($newArrayChunk2);
    echo"</pre>";


    $age = array('Ali'=> '35', 'Amir'=> '39', 'Jaem'=> '45', 'Shadab'=> '25');

    $newArrayChunk3 = array_chunk($age, 3);
    echo "<pre>";
        print_r($newArrayChunk3);
    echo"</pre>";

      $newArrayChunk4 = array_chunk($age, 3, true);
    echo "<pre>";
        print_r($newArrayChunk4);
    echo"</pre>";



?>