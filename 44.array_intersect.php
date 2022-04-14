<?php 

$a = array('a'=> 'red', 'b'=> 'green', 'c'=> 'blue', 'd'=>'yellow');

$b = array('a'=> 'red', 'f'=> 'green', 'd'=>'purple');

$c = array('a'=>'red', 'b'=> 'black', 'h'=>'yellow');

$newArrayCommon = array_intersect($a, $b);

echo "<pre>";
    print_r($newArrayCommon);
echo"</pre>";


echo "<br>";
$newArray1Common = array_intersect($a, $b, $c);

echo "<pre>";
    print_r($newArray1Common);
echo"</pre>";



$newArrayCommonKeys = array_intersect_key($a, $b);

echo "<pre>";
    print_r($newArrayCommonKeys);
echo"</pre>";


$matchBothValuesandKeys = array_intersect_assoc($a, $b);
echo "<pre>";
    print_r($matchBothValuesandKeys);
echo"</pre>";


function compare($a, $b) {
    // will match the keys, values and datatype.
    if($a === $b) {
        return 0;
    }
    return ($a > $b)? 1: -1;
}

$matchBothValuesandKeysUserDefined = array_intersect_uassoc($a, $b, "compare");
echo "<pre>";
    print_r($matchBothValuesandKeysUserDefined);
echo"</pre>";



?>