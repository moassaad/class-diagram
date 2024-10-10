<?php

namespace App\Association\OneToOne;

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