<?php

class Student
{
    public $firstname;
    public $lastname;
    public $age;
    public $phone;
    public $email;
    public $adress;
    public $city;
    public $alternance;

    public function __CONSTRUCT($firstname, $lastname, $age, $phone, $email, $adress, $city, $alternance)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->phone = $phone;
        $this->email = $email;
        $this->adress = $adress;
        $this->city = $city;
        $this->alternance = $alternance;
    }


    public function Initialize()
    {
        
    }

}