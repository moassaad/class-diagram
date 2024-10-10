<?php

namespace Tests;
use App\Association\ManyToMany\Course;
use App\Association\ManyToMany\Enrollment;
use App\Association\ManyToMany\Student;
use App\Association\OneToMany\Employee;
use App\Association\OneToMany\Manager;
use App\Association\OneToOne\Passport;
use App\Association\OneToOne\Person;
use App\Association\ZeroToOne\Account;
use App\Association\ZeroToOne\User;
use PHPUnit\Framework\TestCase;

class AssociationTest extends TestCase
{
    public function test_one_to_one()
    {
        $passport = new Passport("123456789");
        $person = new Person("Mohammad", $passport);

        $this->assertEquals("123456789", $person->getPassportNumber());
        $this->assertEquals(Passport::class, $passport::class);
        $this->assertEquals(Person::class, $person::class);
    }
    public function test_one_to_many()
    {
        $manager = new Manager("Ali");
        $emp1 = new Employee("Sara");
        $emp2 = new Employee("Hassan");

        $manager->addEmployee($emp1);
        $manager->addEmployee($emp2);

        $this->assertEquals([$emp1,$emp2], $manager->getEmployees());
        $this->assertEquals(Manager::class, $manager::class);
        $this->assertEquals(Employee::class, $emp1::class);
        $this->assertEquals(Employee::class, $emp2::class);
    }
    public function test_many_to_many()
    {
        $student1 = new Student(1, "Mohammad Asaad");
        $student2 = new Student(2, "Ahmed Ibrahem");
        $php = new Course(101, "PHP Programming");
        $mysql = new Course(102, "MySQL Database");
        $enrollment1 = new Enrollment($student1, $php, "2024-10-02", "A");
        $enrollment2 = new Enrollment($student1, $mysql, "2024-10-02", "A");
        $enrollment3 = new Enrollment($student2, $php, "2024-10-02", "A");

        $this->assertEquals("Mohammad Asaad enrolled in PHP Programming on 2024-10-02, Grade: A", $enrollment1->getEnrollmentInfo());
        $this->assertEquals("Mohammad Asaad enrolled in MySQL Database on 2024-10-02, Grade: A", $enrollment2->getEnrollmentInfo());
        $this->assertEquals("Ahmed Ibrahem enrolled in PHP Programming on 2024-10-02, Grade: A", $enrollment3->getEnrollmentInfo());
        $this->assertEquals(Student::class, $student1::class);
        $this->assertEquals(Course::class, $php::class);
        $this->assertEquals(Enrollment::class, $enrollment1::class);
    }
    public function test_zero_to_one()
    {
        $account = new Account(1001, "Premium");
        $user1 = new User(1, "Mohammad Asaad", $account);
        $user2 = new User(2, "Sara Ahmed");

        $this->assertEquals("Mohammad Asaad has an account with Account ID: 1001.", $user1->getUserInfo());
        $this->assertEquals("Sara Ahmed does not have an account.", $user2->getUserInfo());
        $this->assertEquals(Account::class, $account::class);
        $this->assertEquals(User::class, $user1::class);
    }
    public function test_zero_to_many()
    {
        $account = new Account(1001, "Premium");
        $user1 = new User(1, "Mohammad Asaad", $account);
        $user2 = new User(2, "Sara Ahmed");

        $this->assertEquals("Mohammad Asaad has an account with Account ID: 1001.", $user1->getUserInfo());
        $this->assertEquals("Sara Ahmed does not have an account.", $user2->getUserInfo());
        $this->assertEquals(Account::class, $account::class);
        $this->assertEquals(User::class, $user1::class);
    }
}