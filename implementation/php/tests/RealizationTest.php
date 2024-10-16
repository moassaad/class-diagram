<?php

namespace Tests;
use App\Realization\Device\Laptop;
use App\Realization\Device\Smartphone;
use App\Realization\Movable\Bike;
use App\Realization\Movable\Car;
use App\Realization\PaymentMethod\CreditCardPayment;
use App\Realization\PaymentMethod\PayPalPayment;
use PHPUnit\Framework\TestCase;

class RealizationTest extends TestCase
{
    public function test_example_payment_method()
    {
        $creditCardPayment = new CreditCardPayment();
        $payPalPayment = new PayPalPayment();
        
        $this->assertEquals("Processing credit card payment of $100.50", $creditCardPayment->processPayment(100.50));
        $this->assertEquals("Processing PayPal payment of $75.25", $payPalPayment->processPayment(75.25));
        $this->assertEquals(CreditCardPayment::class, $creditCardPayment::class);
        $this->assertEquals(PayPalPayment::class, $payPalPayment::class);
    }
    public function test_example_device()
    {
        $smartphone = new Smartphone();
        $laptop = new Laptop();

        $this->assertEquals("Smartphone is now ON.", $smartphone->turnOn());
        $this->assertEquals("Smartphone is now OFF.", $smartphone->turnOff());
        $this->assertEquals("Laptop is now ON.", $laptop->turnOn());
        $this->assertEquals("Laptop is now OFF.", $laptop->turnOff());
        $this->assertEquals(Smartphone::class, $smartphone::class);
        $this->assertEquals(Laptop::class, $laptop::class);
    }
    public function test_example_movable()
    {
        $car = new Car();
        $bike = new Bike();

        $this->assertEquals("The car is moving\n", $car->move());
        $this->assertEquals("The bike is moving\n", $bike->move());
        $this->assertEquals(Car::class, $car::class);
        $this->assertEquals(Bike::class, $bike::class);
    }
}