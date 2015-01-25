<?php

$studentId = 'ST1337';
$studentFirstname = 'John';
$studentLastname = 'Doe';
$studentDob = '1989-01-13';
$studentAddress = '41 rue du port, 59000 Lille';

function showStudentRecord($studentId, $studentFirstname, $studentLastname, $studentDob, $studentAddress)
{
    // previous code
}

function calculateStudentAge($studentId, $studentFirstname, $studentLastname, $studentDob)
{
    // 31556926 is the number of seconds in a year
    $age = floor((time() - strtotime($studentDob)) / 31556926);

    echo <<<STRING
Student #{$studentId} {$studentFirstname} {$studentLastname} is {$age} years old";

STRING;

}

calculateStudentAge($studentId, $studentFirstname, $studentLastname, $studentDob);
