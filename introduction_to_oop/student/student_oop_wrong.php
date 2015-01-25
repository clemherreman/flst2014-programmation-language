<?php

class Student
{
    public $id;
    public $firstname;
    public $lastname;
    public $dob;
    public $address;
}

$student = new Student();
$student->id = 'ST1337';
$student->firstname = 'John';
$student->lastname = 'Doe';
$student->dob = '1989-01-13';
$student->address = '41 rue du port, 59000 Lille';

function showRecord(Student $student)
{
    $age = floor((time() - strtotime($student->dob)) / 31556926);

    echo <<<STRING
Student #{$student->id}: {$student->firstname} {$student->lastname}

Born on {$student->dob} (age: {$age})

Lives at {$student->address}

STRING;
}

showRecord($student);