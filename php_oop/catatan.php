<?php

//function

function name($name)
{
    echo $name;
};

name("nama siswa");


class Student
{
    //properties

    public $name;

    private $address;

    //method

    public function name()
    {
        echo "student Name";
    }

    //static method

    public static function names()
    {
        echo "\nStatic Methods\n";
        
    }

    //setters

    public function setAddress($address)
    {
        $this->address=$address;
    }

    //getters

    public function getAddress()
    {
        return $this->adresss;
    }
}

//instantiated class

$student = new Student();

//invoke method

$student->name();

//invoke static method

Student::names();

//invoke setters & getters

$student->setAddress("jl.Gajah Mada No.123,Cipondoh,Tangerang");

echo $student->getAddress().PHP_EOL;





