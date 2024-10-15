<?php

namespace App\Dependency\CarEngine;

class Car {
    private $engine;

    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    public function startCar() {
        $this->engine->start();
        return "Car is now running\n";
    }
}