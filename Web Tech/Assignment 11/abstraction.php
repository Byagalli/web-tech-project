<?php


abstract class Shape {
    // Abstract method (must be implemented by subclasses)
    abstract public function calculateArea();

    // Concrete method (common to all shapes)
    public function display() {
        echo "Calculating area of shape...<br>";
    }
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        $area = pi() * $this->radius * $this->radius;
        echo "Area of Circle: " . $area . "<br>";
    }
}


class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        $area = $this->length * $this->width;
        echo "Area of Rectangle: " . $area . "<br>";
    }
}


$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

$circle->display();       
$circle->calculateArea(); 

$rectangle->display();
$rectangle->calculateArea();

?>
