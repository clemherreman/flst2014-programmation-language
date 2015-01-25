<?php

$studentId = 'ST1337';
$studentFirstname = 'John';
$studentLastname = 'Doe';
$studentAddress = '41 rue du port, 59000 Lille';

function showStudentRecord($studentId, $studentFirstname, $studentLastname, $studentAddress)
{
    echo <<<STRING
Student #{$studentId}: {$studentFirstname} {$studentLastname}

Lives at {$studentAddress}

STRING;
}

showStudentRecord($studentId, $studentFirstname, $studentLastname, $studentAddress);
