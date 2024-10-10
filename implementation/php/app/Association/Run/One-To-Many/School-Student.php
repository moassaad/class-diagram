<?php
namespace App\Association\Run;

class School {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Student {
    private $name;
    private $school; // Many-to-One relationship

    public function __construct($name, School $school) {
        $this->name = $name;
        $this->school = $school;
    }

    public function getSchoolName() {
        return $this->school->getName();
    }
}

$school = new School("International School");
$student1 = new Student("Mohammad", $school);
$student2 = new Student("Sara", $school);

echo $student1->getSchoolName() . "\n";
echo $student2->getSchoolName() . "\n";
?>