<?php
namespace App\Inheritance\Run;

// Class representing a generic Vehicle
class Vehicle {
    public $fuelType;
    public $speed;

    public function __construct($fuelType, $speed) {
        $this->fuelType = $fuelType;
        $this->speed = $speed;
    }

    public function getDetails() {
        return "Fuel Type: {$this->fuelType}, Speed: {$this->speed} km/h.";
    }
}

// Class representing a Car, inheriting from Vehicle
class Car extends Vehicle {
    public $numberOfDoors;

    public function __construct($fuelType, $speed, $numberOfDoors) {
        parent::__construct($fuelType, $speed);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getDetails() {
        return "Car - " . parent::getDetails() . " Number of Doors: {$this->numberOfDoors}.";
    }
}

// Class representing a Motorcycle, inheriting from Vehicle
class Motorcycle extends Vehicle {
    public $seatType;

    public function __construct($fuelType, $speed, $seatType) {
        parent::__construct($fuelType, $speed);
        $this->seatType = $seatType;
    }

    public function getDetails() {
        return "Motorcycle - " . parent::getDetails() . " Seat Type: {$this->seatType}.";
    }
}

// Example usage
$car = new Car("Petrol", 180, 4);
$motorcycle = new Motorcycle("Petrol", 120, "Sport");

echo $car->getDetails() . "\n"; // Car details
echo $motorcycle->getDetails() . "\n"; // Motorcycle details

?>