<?php
namespace App\Dependency\Run;
class Engine {
    public function start() {
        echo "Engine started\n";
    }
}

class Car {
    private $engine;

    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    public function startCar() {
        $this->engine->start();
        echo "Car is now running\n";
    }
}

$engine = new Engine();
$car = new Car($engine);

$car->startCar();

?>
