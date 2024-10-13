<?php
namespace App\Composition\Run;
    class House {
        private $rooms = [];

        public function __construct() {
            $this->rooms[] = new Room("Living Room");
            $this->rooms[] = new Room("Bedroom");
        }

        public function getRooms() {
            return $this->rooms;
        }
    }

    class Room {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    $house = new House();

    foreach ($house->getRooms() as $room) {
        echo $room->getName() . "\n";
    }
?>

