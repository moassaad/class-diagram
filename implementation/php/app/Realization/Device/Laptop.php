<?php

namespace App\Realization\Device;

class Laptop implements Device {
    public function turnOn() {
        return "Laptop is now ON.";
    }

    public function turnOff() {
        return "Laptop is now OFF.";
    }
}