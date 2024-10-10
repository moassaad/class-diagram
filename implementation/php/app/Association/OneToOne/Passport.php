<?php

namespace App\Association\OneToOne;

class Passport {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function getNumber() {
        return $this->number;
    }
}