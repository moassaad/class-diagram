<?php

namespace App\Composition\HouseRoom;

class Room {
    public $roomNumber;
    public $area;

    public function __construct($roomNumber, $area) {
        $this->roomNumber = $roomNumber;
        $this->area = $area;
    }

    public function getRoomInfo() {
        return "Room Number: {$this->roomNumber}, Area: {$this->area} sqm.";
    }
}