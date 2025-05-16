<?php

$fruits = array("apple", "banana", "orange", "mango");


array_push($fruits, "grape");

array_pop($fruits);




echo "Total fruits: " . count($fruits) . "<br>";


sort($fruits);
echo "Sorted fruits: ";
print_r($fruits);
echo "<br>";


$index = array_search("mango", $fruits);
echo "Mango is at index: $index<br>";

?>
