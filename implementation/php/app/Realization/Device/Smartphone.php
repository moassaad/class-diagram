<?php

namespace App\Realization\Device;

class Smartphone implements Device {
    public function turnOn() {
        return "Smartphone is now ON.";
    }

    public function turnOff() {
        return "Smartphone is now OFF.";
    }
}