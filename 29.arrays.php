<?php 

$colors = array("red", "yellow", "blue", "green");

echo $colors[0]. "<br>";
echo $colors[1]. "<br>";
echo $colors[2]. "<br>";
echo $colors[3]. "<br>";

print_r($colors);

echo "<br>";

echo "<pre>";
print_r($colors);
echo "</pre>";

// making an car array.

echo "<br>";
$cars[0] = "Mercedes";
$cars[1] = "BMW";
$cars[2] = "Corolla";
$cars[3] = "Jaguar";

print_r($cars);

echo "<br>";
echo "<ul>";
for($i = 0; $i < 4; $i++) {
    echo "<li>$cars[$i] </li>";
}
echo "</ul>";

?>