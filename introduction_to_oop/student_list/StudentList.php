<?php
class StudentList 
{
    public function setStudents(array $students)
    {
        // I persist that student list somewhere
        return true; // Everything went smoothly
    }

    public function getAllStudents()
    {
        // I retrieve the students from somewhere, and put it into $students
        return $students;
    }
}