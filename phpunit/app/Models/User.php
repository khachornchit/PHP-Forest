<?php
namespace App\Models;

class User
{
    private $firstName;
    private $lastName;
    private $fullName;
    private $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->fullName = $this->firstName . " " . $this->lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        $this->fullName = $this->firstName . " " . $this->lastName;
        return $this->fullName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getVariable()
    {
        return [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "fullName" => $this->getFullName(),
            "email" => $this->email,
        ];
    }
}
