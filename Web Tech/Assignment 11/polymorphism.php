<?php


class Animal {
    public function makeSound() {
        echo "Some generic animal sound<br>";
    }
}


class Dog extends Animal {
    public function makeSound() {
        echo "Bark! Bark!<br>";
    }
}


class Cat extends Animal {
    public function makeSound() {
        echo "Meow! Meow!<br>";
    }
}


class Cow extends Animal {
    public function makeSound() {
        echo "Moo! Moo!<br>";
    }
}


function animalSound(Animal $animal) {
    $animal->makeSound();  // This will call the overridden method
}

// Create objects
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();


animalSound($dog);  // Output: Bark! Bark!
animalSound($cat);  // Output: Meow! Meow!
animalSound($cow);  // Output: Moo! Moo!

?>
