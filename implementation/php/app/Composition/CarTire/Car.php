<?php

namespace App\Composition\CarTire;

class Car {
    public $brand;
    public $model;
    private $tires = []; // Relationship with Tires (Composition)

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function addTire(Tire $tire) {
        $this->tires[] = $tire; // Add tire to the car
    }

    public function getCarInfo() {
        $tireInfo = [];
        foreach ($this->tires as $tire) {
            $tireInfo[] = $tire->getTireInfo();
        }
        return "Car Brand: {$this->brand}, Model: {$this->model}, Tires: " . implode(" | ", $tireInfo);
    }
}