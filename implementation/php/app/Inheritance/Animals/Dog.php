<?php

namespace App\Inheritance\Animals;

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}