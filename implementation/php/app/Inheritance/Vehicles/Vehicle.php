<?php

namespace App\Inheritance\Vehicles;

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