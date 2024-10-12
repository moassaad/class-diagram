<?php

namespace Tests;
use App\Aggregation\DepartmentEmployee\Department;
use App\Aggregation\DepartmentEmployee\Employee;
use App\Aggregation\ClassroomTeacher\Classroom;
use App\Aggregation\ClassroomTeacher\Teacher;
use PHPUnit\Framework\TestCase;

class AggregationTest extends TestCase
{
    public function test_example_department_employee()
    {
        $dept = new Department();
        $emp1 = new Employee("Ali");
        $emp2 = new Employee("Sara");

        $dept->addEmployee($emp1);
        $dept->addEmployee($emp2);

        $this->assertEquals([$emp1,$emp2], $dept->getEmployees());
        $this->assertEquals(Department::class, $dept::class);
        $this->assertEquals(Employee::class, $emp1::class);
        $this->assertEquals(Employee::class, $emp2::class);
    }
    public function test_example_teacher_classroom()
    {
        $teacher1 = new Teacher(1, "Mr. Smith");
        $teacher2 = new Teacher(2, "Ms. Johnson");

        $classroom1 = new Classroom(101, "Mathematics");
        $classroom2 = new Classroom(102, "Science");

        $classroom1->addTeacher($teacher1);
        $classroom1->addTeacher($teacher2);

        $this->assertEquals("Classroom: Mathematics, Teachers: Mr. Smith, Ms. Johnson.", $classroom1->getClassroomInfo());
        $this->assertEquals("Classroom: Science, Teachers: No teachers assigned.", $classroom2->getClassroomInfo());
        $this->assertEquals(Teacher::class, $teacher1::class);
        $this->assertEquals(Classroom::class, $classroom1::class);
    }
}