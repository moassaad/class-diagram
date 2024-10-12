<?php

namespace App\Aggregation\DepartmentEmployee;

class Department {
    private $employees = [];

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}