<?php

namespace App\Association\OneToMany;

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