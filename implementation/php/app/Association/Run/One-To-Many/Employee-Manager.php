<?php
namespace App\Association\Run;

class Employee {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Manager {
    private $name;
    private $employees = []; // One-to-Many relationship

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}

$manager = new Manager("Ali");
$emp1 = new Employee("Sara");
$emp2 = new Employee("Hassan");

$manager->addEmployee($emp1);
$manager->addEmployee($emp2);

foreach ($manager->getEmployees() as $employee) {
    echo $employee->getName() . "\n";
}
?>