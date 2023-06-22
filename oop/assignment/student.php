<?php 
namespace examples\oop\assignment;

class Student
{
    private static $nextId = 1;
    private $id;

    private $name;
    private $email;
    private $courses = [];

    public function __construct($name, $email)
    {
        $this->id = self::$nextId++;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCourses()
    {
        return $this->courses;
    }
}