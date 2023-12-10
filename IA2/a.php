<?php

// Numeric Array
$numericArray = array(1, 2, 3, 4, 5);
print_r($numericArray);

// Associative Array
$assocArray = array("name" => "John", "age" => 25, "city" => "New York");
print_r($assocArray);

// Multidimensional Array
$multiArray = array(
    array(1, 2, 3),
    array("name" => "Alice", "age" => 30),
    array(true, false)
);
print_r($multiArray);

// Using array() Constructor
$constructedArray = array(1, 2, 3);
print_r($constructedArray);

// Using range() Function
$rangeArray = range(1, 5);
print_r($rangeArray);

// Using list() Function
list($a, $b, $c) = [1, 2, 3];
echo "a: $a, b: $b, c: $c\n";

// Using explode() Function
$string = "apple,orange,banana";
$explodedArray = explode(",", $string);
print_r($explodedArray);

// Using Short Array Syntax
$shortArray = [1, 2, 3];
print_r($shortArray);

?>
