<?php

namespace Tests;
use App\Composition\CarTire\Car;
use App\Composition\CarTire\Tire;
use App\Composition\HouseRoom\House;
use App\Composition\HouseRoom\Room;
use PHPUnit\Framework\TestCase;

class CompositionTest extends TestCase
{
    public function test_example_car_tire()
    {
        $car = new Car("Toyota", "Camry");
        $tire1 = new Tire("12345", "205/55R16");
        $tire2 = new Tire("12346", "205/55R16");
        $tire3 = new Tire("12347", "205/55R16");
        $tire4 = new Tire("12348", "205/55R16");

        $car->addTire($tire1);
        $car->addTire($tire2);
        $car->addTire($tire3);
        $car->addTire($tire4);

        $this->assertEquals("Car Brand: Toyota, Model: Camry, Tires: Tire Serial: 12345, Size: 205/55R16. | Tire Serial: 12346, Size: 205/55R16. | Tire Serial: 12347, Size: 205/55R16. | Tire Serial: 12348, Size: 205/55R16.", $car->getCarInfo());
        $this->assertEquals(Car::class, $car::class);
        $this->assertEquals(Tire::class, $tire1::class);
    }
    public function test_example_house_room()
    {
        $house = new House("123 Main St");
        $room1 = new Room(101, 20);
        $room2 = new Room(102, 15);
        $room3 = new Room(103, 25);

        $house->addRoom($room1);
        $house->addRoom($room2);
        $house->addRoom($room3);

        $this->assertEquals("House Address: 123 Main St, Rooms: Room Number: 101, Area: 20 sqm. | Room Number: 102, Area: 15 sqm. | Room Number: 103, Area: 25 sqm.", $house->getHouseInfo());
        $this->assertEquals(House::class, $house::class);
        $this->assertEquals(Room::class, $room1::class);
    }
}