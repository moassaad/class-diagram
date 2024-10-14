<?php
namespace App\Inheritance\Run;
// Class representing a generic Animal
class Animal {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function makeSound() {
        return "Some generic animal sound.";
    }
}

// Class representing a Dog, inheriting from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

// Class representing a Cat, inheriting from Animal
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Example usage
$dog = new Dog("Buddy", 3);
$cat = new Cat("Whiskers", 2);

echo "{$dog->name} is a dog, aged {$dog->age}, and says: " . $dog->makeSound() . "\n";
echo "{$cat->name} is a cat, aged {$cat->age}, and says: " . $cat->makeSound() . "\n";

?>