<?php

namespace App\Realization\Movable;

class Car implements Movable {
    public function move() {
        return "The car is moving\n";
    }
}