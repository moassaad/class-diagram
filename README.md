# Class Diagram Documentation
## Creating the class
In this section, we explain how to create a class in the system. Below is an example using PHP and image.

![Creating-Class](diagrams/images/Class-Diagram/class-diagram-write-class.jpg)

### Create class using PHP code
class Person
``` php
class Person {
    public string $name;
    public int $age;
    
    public function speak():void
    {
        # code ...
    }
    
    public function walk(int $distance):void
    {
        # code ...
    }
}
```

class Book
``` php
class Book {
    public string $title;
    public string $author;
    
    public function borrow():bool
    {
        # code ...
    }
    
    public function return(int $distance):void
    {
        # code ...
    }
}
```

## Relationships

### Example impelementation using PHP code
| Name | Code Implement | Testing-Run | Fast Running | Notes |
| ---- | -------------- | ----------- | ------------ | ----- |
| Association - Multiplicity | [ ( 1..1 ) One To One ](implementation/php/app/Association/OneToOne) |  [ test_one_to_one ](implementation/php/tests/AssociationTest.php#L17) | [One-To-One](implementation/php/app/Association/Run/One-To-One) | |
| - | [ ( 1..* ) One To Many ](implementation/php/app/Association/OneToMany) | [ test_one_to_many ](implementation/php/tests/AssociationTest.php#L26) | [One-To-Many](implementation/php/app/Association/Run/One-To-Many) | |
| - | [ ( \*..* ) Many To Many ](implementation/php/app/Association/ManyToMany) | [ test_many_to_many ](implementation/php/tests/AssociationTest.php#L40) | [Many-To-Many](implementation/php/app/Association/Run/Many-To-Many) | |
| - | [ ( 0..1 ) Zero To One ](implementation/php/app/Association/ZeroToOne) | [ test_zero_to_one ](implementation/php/tests/AssociationTest.php#L57) | [Zero-To-One](implementation/php/app/Association/Run/Zero-to-One) | |
| - | [ ( 0..* ) Zero To Many ](implementation/php/app/Association/ZeroToMany) | [ test_zero_to_many ](implementation/php/tests/AssociationTest.php#L68) | [Zero-To-Many](implementation/php/app/Association/Run/Zero-to-Many) | |
| Aggregation | [ Classroom-Teacher ](implementation/php/app/Aggregation/ClassroomTeacher) | [ test_example_department_employee ](implementation/php/tests/AggregationTest.php#L12) | [ Classroom-Teacher-Run ](implementation/php/app/Aggregation/Run/Classroom-Teacher.php) | |
| - | [ Department-Employee ](implementation/php/app/Aggregation/DepartmentEmployee) | [ test_example_teacher_classroom ](implementation/php/tests/AggregationTest.php#L26) | [ Department-Employee-Run ](implementation/php/app/Aggregation/Run/Department-Employee.php) | |
| Composition |  |  |  |  |
| Inheritance - Generalization |  |  |  |  |
| Dependency |  |  |  |  |
| Realization |  |  |  |  |

### **Association - Multiplicity**
![ Association - Multiplicity ](diagrams/images/Association/Multiplicity-cover.jpg)
____________________________
**( 1..1 ) One To One**
____________________________
* ![ ( 1..1 ) One To One image ](diagrams/images/Association/Association-One-to-One.jpg)
____________________________
**( 1..\* ) One To Many**
____________________________
* ![ ( 1..* ) One To Many image ](diagrams/images/Association/Association-One-to-Many.jpg)
____________________________
**( \*..\* ) Many To Many**
____________________________
* ![ ( *..* ) Many To Many image ](diagrams/images/Association/Association-Many-to-Many.jpg)
____________________________
**( 0..1 ) Zero To One**
____________________________
* ![ ( 0..1 ) Zero To One image ](diagrams/images/Association/Association-Zero-to-One.jpg)
____________________________
**( 0..\* ) Zero To Many**
____________________________
* ![ ( 0..* ) Zero To Many image ](diagrams/images/Association/Association-Zero-to-Many.jpg)

### **Aggregation**
![ Aggregation ](diagrams/images/Aggregation/Aggregation-cover.jpg)
____________________________
**Aggregation relation**
____________________________
* ![ Aggregation relation image ](diagrams/images/Aggregation/Aggregation.jpg)

### **Composition**


### **Inheritance - Generalization**


### **Dependency**


### **Realization**

