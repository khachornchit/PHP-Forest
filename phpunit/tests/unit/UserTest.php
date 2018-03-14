<?php
declare (strict_types = 1);

class UserTest extends PHPUnit\Framework\TestCase
{
    protected $user;
    protected $firstName = "Amanda";
    protected $lastName = "Seyfreid";
    protected $fullName;
    protected $email = "x@x.com";

    public function setUp()
    {
        $this->user = new \App\Models\User($this->firstName, $this->lastName, $this->email);
        $this->fullName = $this->firstName . " " . $this->lastName;
    }

    public function testUserFirstName()
    {
        $this->assertEquals($this->user->getFirstName(), $this->firstName);
    }

    public function testUserLastName()
    {
        $this->assertEquals($this->user->getLastName(), $this->lastName);
    }

    public function testUserFullName()
    {
        $this->assertEquals($this->user->getFullName(), $this->fullName);
    }

    public function testEmail()
    {
        $this->assertEquals($this->user->getEmail(), $this->email);
    }

    public function testContainCorrectValue()
    {
        $variable = $this->user->getVariable();

        $this->assertArrayHasKey("firstName", $variable);
        $this->assertArrayHasKey("lastName", $variable);
        $this->assertArrayHasKey("fullName", $variable);
        $this->assertArrayHasKey("email", $variable);

        $this->assertEquals($variable["firstName"], $this->firstName);
        $this->assertEquals($variable["lastName"], $this->lastName);
        $this->assertEquals($variable["fullName"], $this->fullName);
        $this->assertEquals($variable["email"], $this->email);
    }
}
