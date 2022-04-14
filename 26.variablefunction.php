<?php 

    function wow() {
        echo "Hello";
    }

    $func = "wow";
    $func();

    function wow1($name) {
        echo "Hello, $name";
    }
    $func1 = "wow1";
    echo "<br>";
    $func1("Nadia Islam");

    echo "<br>";
    $sayHello = function($name) {
        echo "Hello $name <br>";
    };

    $sayHello("Nadia Islam");

?>