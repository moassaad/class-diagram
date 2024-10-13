<?php

namespace App\Composition\HouseRoom;

class House {
    public $address;
    private $rooms = []; // Relationship with Rooms (Composition)

    public function __construct($address) {
        $this->address = $address;
    }

    public function addRoom(Room $room) {
        $this->rooms[] = $room; // Add room to the house
    }

    public function getHouseInfo() {
        $roomInfo = [];
        foreach ($this->rooms as $room) {
            $roomInfo[] = $room->getRoomInfo();
        }
        return "House Address: {$this->address}, Rooms: " . implode(" | ", $roomInfo);
    }
}