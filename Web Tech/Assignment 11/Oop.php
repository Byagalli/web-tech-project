<?php
class Student {
    public $name;
    public $age;
    public $marks;
    
    function __construct($name, $age, $marks) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    function getCgpa() {
        return $this->marks / 10;
    }

    function display() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Marks: $this->marks<br>";
        echo "CGPA: " . $this->getCgpa() . "<br>";
    }
}

$student1 = new Student("Ganesh", 21, 88);
$student1->display();
?>
