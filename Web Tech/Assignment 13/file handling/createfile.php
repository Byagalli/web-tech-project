<?php
$filename = "ganesh.txt";
$file = fopen($filename, "w"); 

if ($file) {
    $text = "Hello, this is create file";
    fwrite($file, $text); 
    fclose($file); 
    echo "File created and written successfully.";
} else {
    echo "Unable to open file.";
}
?>
