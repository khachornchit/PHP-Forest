<?php

namespace ZFTTest;

use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use ZFT\User;

class UserTest extends AbstractHttpControllerTestCase {
    public function testAssert() {
        $this->assertTrue(true);
    }

    public function testCreateUserObject() {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
        
        $firstName = "Hello";
        $user->setFirstName($firstName);
        $this->assertEquals($firstName, $user->getFirstName());
    }    
}