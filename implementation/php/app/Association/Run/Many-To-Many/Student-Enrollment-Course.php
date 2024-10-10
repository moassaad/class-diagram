<?php
namespace App\Association\Run;

// Class representing a Student
class Student {
    public $studentId;
    public $name;

    public function __construct($studentId, $name) {
        $this->studentId = $studentId;
        $this->name = $name;
    }
}

// Class representing a Course
class Course {
    public $courseId;
    public $courseName;

    public function __construct($courseId, $courseName) {
        $this->courseId = $courseId;
        $this->courseName = $courseName;
    }
}
// Class representing the Enrollment (Many-to-Many relationship)
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

// Example usage
$student1 = new Student(1, "Mohammad Asaad");
$course1 = new Course(101, "PHP Programming");

$enrollment1 = new Enrollment($student1, $course1, "2024-10-02", "A");

echo $enrollment1->getEnrollmentInfo();

?>