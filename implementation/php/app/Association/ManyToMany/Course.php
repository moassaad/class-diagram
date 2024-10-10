<?php

namespace App\Association\ManyToMany;

class Course {
    public $courseId;
    public $courseName;

    public function __construct($courseId, $courseName) {
        $this->courseId = $courseId;
        $this->courseName = $courseName;
    }
}