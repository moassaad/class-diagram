<?php

namespace App\Composition\CarTire;

class Tire {
    public $serialNumber;
    public $size;

    public function __construct($serialNumber, $size) {
        $this->serialNumber = $serialNumber;
        $this->size = $size;
    }

    public function getTireInfo() {
        return "Tire Serial: {$this->serialNumber}, Size: {$this->size}.";
    }
}