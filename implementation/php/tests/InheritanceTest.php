<?php

namespace Tests;
use App\Inheritance\Animals\Cat;
use App\Inheritance\Animals\Dog;
use App\Inheritance\Vehicles\Car;
use App\Inheritance\Vehicles\Motorcycle;
use PHPUnit\Framework\TestCase;

class InheritanceTest extends TestCase
{
    public function test_example_vehicles()
    {
        $car = new Car("Petrol", 180, 4);
        $motorcycle = new Motorcycle("Petrol", 120, "Sport");

        $this->assertEquals("Car - Fuel Type: Petrol, Speed: 180 km/h. Number of Doors: 4.", $car->getDetails());
        $this->assertEquals("Motorcycle - Fuel Type: Petrol, Speed: 120 km/h. Seat Type: Sport.", $motorcycle->getDetails());
        $this->assertEquals(Motorcycle::class, $motorcycle::class);
        $this->assertEquals(Car::class, $car::class);
    }
    public function test_example_animals()
    {
        $dog = new Dog("Buddy", 3);
        $cat = new Cat("Whiskers", 2);

        $this->assertEquals("Buddy is a dog, aged 3, and says: Woof! Woof!", "{$dog->name} is a dog, aged {$dog->age}, and says: " . $dog->makeSound());
        $this->assertEquals("Whiskers is a cat, aged 2, and says: Meow!", "{$cat->name} is a cat, aged {$cat->age}, and says: " . $cat->makeSound());
        $this->assertEquals(Dog::class, $dog::class);
        $this->assertEquals(Cat::class, $cat::class);
    }
}