<?php
namespace App\Aggregation\Run;
class Department {
    private $employees = [];

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}

class Employee {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$dept = new Department();
$emp1 = new Employee("Ali");
$emp2 = new Employee("Sara");

$dept->addEmployee($emp1);
$dept->addEmployee($emp2);

foreach ($dept->getEmployees() as $employee) {
    echo $employee->getName() . "\n";
}