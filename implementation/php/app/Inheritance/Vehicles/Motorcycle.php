<?php

namespace App\Inheritance\Vehicles;

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