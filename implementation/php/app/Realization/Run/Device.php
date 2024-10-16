<?php
namespace App\Realization\Run;
// Interface representing a Device
interface Device {
    public function turnOn();
    public function turnOff();
}

// Class representing a Smartphone, implementing the Device interface
class Smartphone implements Device {
    public function turnOn() {
        return "Smartphone is now ON.";
    }

    public function turnOff() {
        return "Smartphone is now OFF.";
    }
}

// Class representing a Laptop, implementing the Device interface
class Laptop implements Device {
    public function turnOn() {
        return "Laptop is now ON.";
    }

    public function turnOff() {
        return "Laptop is now OFF.";
    }
}

// Example usage
$smartphone = new Smartphone();
$laptop = new Laptop();

echo $smartphone->turnOn() . "\n"; // Turn on smartphone
echo $smartphone->turnOff() . "\n"; // Turn off smartphone
echo $laptop->turnOn() . "\n"; // Turn on laptop
echo $laptop->turnOff() . "\n"; // Turn off laptop

?>