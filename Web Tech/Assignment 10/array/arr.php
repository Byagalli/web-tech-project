<?php
$fruits = ["apple", "banana", "orange"];


array_push($fruits, "grape");


array_pop($fruits);


echo "Total fruits: " . count($fruits) . "<br>";


sort($fruits);
print_r($fruits);

foreach($fruits as $fruit){
    echo "$fruit<br>";
}
?>
