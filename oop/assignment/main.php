<?php 

use examples\oop\assignment\Student;
use examples\oop\assignment\Course;
use examples\oop\assignment\Manager;


include 'Student.php';
include 'Course.php';
include 'Manager.php';



$manager = new Manager();




$student1 = new Student('Amer', 'amer@gmail.com');
$manager->addStudent($student1);
$students[] = $student1;


$student2 = new Student('Amer2', 'amer2@gmail.com');
$manager->addStudent($student2);
$students[] = $student2;


$student3 = new Student('Amer3', 'amer3@gmail.com');
$manager->addStudent($student3);
$students[] = $student3;



?>


<!DOCTYPE html>
<html>
<head>
    <title>Blue Div Example</title>
      <link rel="stylesheet" href="../../style.css">
      <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <h1>Amer Dawood</h1> 
            <h3><a href="../examples/basics/first_ex.php">1</a></h3>
            <h3><a href="../examples/arrays&functions/all.php">2</a></h3>
            <h3><a href="./main.php">3</a></h3>

        </div>
    </header>

    <div class="blue-div">
        <p>Welcome To My Homework Website</p>
    </div>




    <h1 style="padding-left: 100px;padding-top:50px">#All Student  : </h1>

    <table style="margin-left: 100px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student->getId(); ?></td>
                    <td><?php echo $student->getName(); ?></td>
                    <td><?php echo $student->getEmail(); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



</html>


