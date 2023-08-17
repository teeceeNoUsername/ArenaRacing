<?php
require_once "Entity.php";

class Actor extends Entity
{
    public $name;
    public $dateOfBirth;

    public function __construct($id, $name, $dateOfBirth)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
}