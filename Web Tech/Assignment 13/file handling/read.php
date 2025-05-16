<?php

$file = fopen("example.txt", "r");

if ($file) {
    echo "File content:<br>";
    while (!feof($file)) {
        $line = fgets($file);
        echo nl2br($line);  
    }
    fclose($file);
} else {
    echo "Error reading the file.";
}
?>
