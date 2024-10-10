<?php

namespace App\Association\Run;

class Passport {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function getNumber() {
        return $this->number;
    }
}

class Person {
    private $name;
    private $passport; // One-to-One relationship

    public function __construct($name, Passport $passport) {
        $this->name = $name;
        $this->passport = $passport;
    }

    public function getPassportNumber() {
        return $this->passport->getNumber();
    }
}

$passport = new Passport("123456789");
$person = new Person("Mohammad", $passport);

echo $person->getPassportNumber();
?>