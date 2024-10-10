<?php
namespace App\Association\Run;

class Employee {
    private $name;
    private $manager = null;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setManager(Manager $manager) {
        $this->manager = $manager;
    }

    public function getManager() {
        return $this->manager;
    }

    public function getName() {
        return $this->name;
    }
}

class Manager {
    private $name;
    private $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
        $employee->setManager($this);
    }

    public function getEmployees() {
        return $this->employees;
    }

    public function getName() {
        return $this->name;
    }
}

$manager = new Manager("Ali");

$employee1 = new Employee("Mohammad");
$employee2 = new Employee("Sara");

$manager->addEmployee($employee1);
$manager->addEmployee($employee2);

$employee3 = new Employee("Hassan");

function displayEmployeeManager(Employee $employee) {
    $manager = $employee->getManager();
    if ($manager !== null) {
        echo "Manager " . $employee->getName() . " is " . $manager->getName() . "\n";
    } else {
        echo $employee->getName() . " He hasn't manager \n";
    }
}

displayEmployeeManager($employee1);
displayEmployeeManager($employee2);
displayEmployeeManager($employee3);

echo "Manage " . $manager->getName() . " employees :\n";
foreach ($manager->getEmployees() as $employee) {
    echo "- " . $employee->getName() . "\n";
}
?>