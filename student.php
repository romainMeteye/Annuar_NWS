<?php

class Student
{
    public $age;
    public $prenom;
    public $nom;

    public function __CONSTRUCT($prenom, $nom)
    {
        $this->nom = $nom;
    }


    public function Initialize($prenom)
    {
        $this->prenom = $prenom;
    }

}