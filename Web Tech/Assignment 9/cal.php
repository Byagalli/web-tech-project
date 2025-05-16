<?php

$a = 10; $b = 20; $c = 30;
echo "Sum: " . ($a + $b + $c) . "<br>";


function factorial($num) {
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}
echo "Factorial of 5: " . factorial(5) . "<br>";

$x = 20; $y = 50;
echo "Greatest: " . ($x > $y ? $x : $y) . "<br>";

$marks = 75;
if ($marks >= 60) {
    echo "First Class<br>";
} else {
    echo "Second Class<br>";
}
?>
