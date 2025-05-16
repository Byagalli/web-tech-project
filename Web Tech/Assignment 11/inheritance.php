<?php

class Animal {
    public $name;

 
    public function __construct($name) {
        $this->name = $name;
    }


    public function speak() {
        echo "$this->name makes a sound.\n";
    }
}


class Dog extends Animal {

 
    public function speak() {
        echo "$this->name barks.\n";
    }
}


$animal = new Animal("Animal");
$animal->speak(); 


$dog = new Dog("Dog");
$dog->speak(); 
?>
