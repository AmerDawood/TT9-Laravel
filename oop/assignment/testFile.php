<?php

use examples\oop\assignment\Student;
use examples\oop\assignment\Manager;


include 'Student.php';
include 'Course.php';
include 'Manager.php';


// This file to test all functions (Create , Get Student By id  , Update , Delete) to students



$manager = new Manager();

// Add students
$student1 = new Student('Amer', 'amer@gmail.com');
$manager->addStudent($student1);

$student2 = new Student('Amer2', 'amer2@gmail.com');
$manager->addStudent($student2);

$student3 = new Student('Amer3', 'amer3@gmail.com');
$manager->addStudent($student3);



// Update student details
$manager->updateStudent($student1, 'Amer Dawood', 'amer@example.com');



// Delete a student
$manager->deleteStudent($student2);


// get student by id 
$studentId = 1; // id
$student = $manager->getStudentById($studentId);


?>