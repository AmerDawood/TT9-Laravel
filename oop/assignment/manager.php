<?php 


namespace examples\oop\assignment;

use examples\oop\assignment\Student;

trait Loggable
{
    private function log($message)
    {
        // file name
        $logFile = 'log.txt';

        file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
    }
}



class Manager
{
    use Loggable;


    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;

        $this->log('Added student: ' . $student->getName());
    }

    public function getStudentById($id)
    {
        if (isset($this->students[$id])) {

            return $this->students[$id];

        }

        return null;
    }

    public function updateStudent(Student $student)
    {
        if (isset($this->students[$student->getId()])) {

            $this->students[$student->getId()] = $student;

            $this->log('Updated student: ' . $student->getName());
        }
    }

    public function deleteStudent($id)
    {
        if (isset($this->students[$id])) {
            $name = $this->students[$id]->getName();

            unset($this->students[$id]);

            $this->log('Deleted student: ' . $name);
        }
    }
}