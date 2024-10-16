<?php
namespace App\Realization\Run;
interface Movable {
    public function move();
}

class Car implements Movable {
    public function move() {
        echo "The car is moving\n";
    }
}

class Bike implements Movable {
    public function move() {
        echo "The bike is moving\n";
    }
}

$car = new Car();
$car->move();

$bike = new Bike();
$bike->move();
?>