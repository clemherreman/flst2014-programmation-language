<?php
class StudentListBis
{
    public function setStudents(array $students)
    {
        $serializedStudents = serialize($students);
        file_put_contents('student.bin', $serializedStudents);

        return true; // Everything went smoothly
    }

    public function getAllStudents()
    {
        $serializedStudents = file_get_contents('student.bin');
        $students = unserialize($serializedStudents);

        return $students;
    }
}