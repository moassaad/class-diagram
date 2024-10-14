<?php

namespace App\Inheritance\Vehicles;

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