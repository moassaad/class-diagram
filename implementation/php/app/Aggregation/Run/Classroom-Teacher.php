<?php
namespace App\Aggregation\Run;

// Class representing a Teacher
class Teacher {
    public $teacherId;
    public $name;

    public function __construct($teacherId, $name) {
        $this->teacherId = $teacherId;
        $this->name = $name;
    }
}

// Class representing a Classroom
class Classroom {
    public $classroomId;
    public $className;
    public $teachers = []; // Relationship with Teachers (Aggregation)

    public function __construct($classroomId, $className) {
        $this->classroomId = $classroomId;
        $this->className = $className;
    }

    public function addTeacher(Teacher $teacher) {
        $this->teachers[] = $teacher; // Add teacher to the classroom
    }

    public function getClassroomInfo() {
        $teacherNames = array_map(function($teacher) {
            return $teacher->name;
        }, $this->teachers);
        
        $teacherList = !empty($teacherNames) ? implode(", ", $teacherNames) : "No teachers assigned.";
        
        return "Classroom: {$this->className}, Teachers: {$teacherList}.";
    }
}

// Example usage
$teacher1 = new Teacher(1, "Mr. Smith");
$teacher2 = new Teacher(2, "Ms. Johnson");

$classroom1 = new Classroom(101, "Mathematics");
$classroom2 = new Classroom(102, "Science");

// Adding teachers to classrooms
$classroom1->addTeacher($teacher1);
$classroom1->addTeacher($teacher2);

echo $classroom1->getClassroomInfo() . "\n"; // Classroom with teachers
echo $classroom2->getClassroomInfo() . "\n"; // Classroom without teachers

?>