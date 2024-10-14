<?php

namespace App\Inheritance\Animals;

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