<?php
/**
 * Created by PhpStorm.
 * User: newchallengelive
 * Date: 3/18/2018
 * Time: 12:49 AM
 */

class CustomerTest extends PHPUnit\Framework\TestCase
{
    private $customer;

    public function setup()
    {
        $this->customer = new App\Models\Customer("Kajornjit", "Songsaen");
    }

    public function testFirstName() {
        $this->assertEquals("Kajornjit", $this->customer->getFirstName());
    }
}