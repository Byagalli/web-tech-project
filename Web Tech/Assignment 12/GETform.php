<?php
if (isset($_GET['name']) && isset($_GET['marks'])) {
    $name = $_GET['name'];
    $marks = $_GET['marks'];

    echo "Name: $name <br>";
    echo "Marks: $marks <br>";
}
?>
