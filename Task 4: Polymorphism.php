<?php
//Base Animal class
abstract class Animal {
    //Abstract method to be overridden in child classes
    abstract public function makeSound();
    //Method to describe the animal
    public function describe() {
        echo "I am an animal." . PHP_EOL;
    }
}

// Dog class that extends Animal
class Dog extends Animal {
    // Overriding the makeSound method
    public function makeSound() {
        echo "Bark! Bark!" . PHP_EOL;
    }
}

//Cat class that extends Animal
class Cat extends Animal {
    //Overriding the makeSound method
    public function makeSound() {
        echo "Meow! Meow!" . PHP_EOL;
    }
}


// Main script to demonstrate polymorphism
function animalSound(Animal $animal) {
    $animal->describe(); 
    $animal->makeSound();
}

//Create objects of different animals
$dog = new Dog();
$cat = new Cat();

//Demonstrate polymorphism
animalSound($dog); //Outputs: I am an animal. Bark! Bark!
animalSound($cat); //Outputs: I am an animal. Meow! Meow!

?>
