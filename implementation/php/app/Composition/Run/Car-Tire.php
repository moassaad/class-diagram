<?php
namespace App\Composition\Run;
// Class representing a Tire
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

// Class representing a Car
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

// Example usage
$car = new Car("Toyota", "Camry");
$tire1 = new Tire("12345", "205/55R16");
$tire2 = new Tire("12346", "205/55R16");
$tire3 = new Tire("12347", "205/55R16");
$tire4 = new Tire("12348", "205/55R16");

// Adding tires to the car
$car->addTire($tire1);
$car->addTire($tire2);
$car->addTire($tire3);
$car->addTire($tire4);

echo $car->getCarInfo() . "\n"; // Car with tires

?>