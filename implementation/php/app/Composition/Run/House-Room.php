<?php
namespace App\Composition\Run;
// Class representing a Room
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


// Class representing a House
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

// Example usage
$house = new House("123 Main St");
$room1 = new Room(101, 20);
$room2 = new Room(102, 15);
$room3 = new Room(103, 25);

// Adding rooms to the house
$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);

echo $house->getHouseInfo() . "\n"; // House with rooms

?>