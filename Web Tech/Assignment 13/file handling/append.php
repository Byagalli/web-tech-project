<?php

$file = fopen("example.txt", "a");

if ($file) {
    fwrite($file, "This is an appended line.\n");
    fclose($file);
    echo "Content appended successfully.";
} else {
    echo "Error opening the file.";
}
?>
