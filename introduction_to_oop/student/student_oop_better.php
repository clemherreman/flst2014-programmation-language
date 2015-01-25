<?php
use \DateTime;

class Student
{
    private $id;
    private $firstname;
    private $lastname;
    private $dob;
    private $address;

    public function __construct($id, $firstname, $lastname, $dob, $address)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = DateTime::createFromFormat('Y-m-d', $dob);
        $this->address = $address;
    }

    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getAge()
    {
        $now = new DateTime();
        $age = $this->dob->diff($now)->y;

        return $age;
    }

    public function showRecord()
    {
        echo <<<STRING
Student #{$this->id}: {$this->getFullname()}

Born on {$this->dob->format('d M. Y')} (age: {$this->getAge()})

Lives at {$this->address}

STRING;
    }
}

$student = new Student('ST1337', 'John', 'Doe', '1989-01-13', '41 rue du Port');
echo $student->getAge();
$student->showRecord();


