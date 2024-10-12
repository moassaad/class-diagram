<?php

namespace App\Aggregation\ClassroomTeacher;

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
        
        $teacherList = !empty($teacherNames) ? implode(", ", $teacherNames) : "No teachers assigned";
        
        return "Classroom: {$this->className}, Teachers: {$teacherList}.";
    }
}