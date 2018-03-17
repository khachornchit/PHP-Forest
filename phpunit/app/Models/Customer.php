<?php
/**
 * Created by PhpStorm.
 * User: newchallengelive
 * Date: 3/18/2018
 * Time: 12:46 AM
 */
namespace App\Models;

class Customer {
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;

    /**
     * Customer constructor.
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}