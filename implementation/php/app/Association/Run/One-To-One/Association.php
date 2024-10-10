<?php
namespace App\Association\Run;
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Car {
    private $owner; // Association with Person

    public function __construct(Person $owner) {
        $this->owner = $owner;
    }

    public function getOwnerName() {
        return $this->owner->getName();
    }
}

// استخدام العلاقة
$person = new Person("Mohammad");
$car = new Car($person);

echo "The owner of the car is: " . $car->getOwnerName();
?>