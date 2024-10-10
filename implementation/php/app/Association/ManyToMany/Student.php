<?php

namespace App\Association\ManyToMany;

class Student {
    public $studentId;
    public $name;

    public function __construct($studentId, $name) {
        $this->studentId = $studentId;
        $this->name = $name;
    }
}