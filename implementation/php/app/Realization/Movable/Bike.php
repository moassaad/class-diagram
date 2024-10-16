<?php

namespace App\Realization\Movable;

class Bike implements Movable {
    public function move() {
        return "The bike is moving\n";
    }
}