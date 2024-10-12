<?php

namespace App\Aggregation\ClassroomTeacher;

class Teacher {
    public $teacherId;
    public $name;

    public function __construct($teacherId, $name) {
        $this->teacherId = $teacherId;
        $this->name = $name;
    }
}