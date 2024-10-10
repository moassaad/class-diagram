<?php

namespace App\Association\ManyToMany;

class Enrollment {
    public $student;
    public $course;
    public $enrollmentDate;
    public $grade;

    public function __construct($student, $course, $enrollmentDate, $grade) {
        $this->student = $student;
        $this->course = $course;
        $this->enrollmentDate = $enrollmentDate;
        $this->grade = $grade;
    }

    public function getEnrollmentInfo() {
        return "{$this->student->name} enrolled in {$this->course->courseName} on {$this->enrollmentDate}, Grade: {$this->grade}";
    }
}