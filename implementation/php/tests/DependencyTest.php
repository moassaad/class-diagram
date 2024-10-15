<?php

namespace Tests;
use App\Dependency\CarEngine\Car;
use App\Dependency\CarEngine\Engine;
use App\Dependency\LibraryBook\Book;
use App\Dependency\LibraryBook\Library;
use PHPUnit\Framework\TestCase;

class DependencyTest extends TestCase
{
    public function test_example_car_engine()
    {
        $engine = new Engine();
        $car = new Car($engine);

        $this->assertEquals("Car is now running\n", $car->startCar());
        $this->assertEquals(Engine::class, $engine::class);
        $this->assertEquals(Car::class, $car::class);
    }
    public function test_example_library_car()
    {
        $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
        $book2 = new Book("1984", "George Orwell");

        $library = new Library();
        $library->addBook($book1);
        $library->addBook($book2);

        $this->assertEquals([$book1,$book2], $library->showBooks());
        $this->assertEquals(Book::class, $book1::class);
        $this->assertEquals(Library::class, $library::class);
    }
}