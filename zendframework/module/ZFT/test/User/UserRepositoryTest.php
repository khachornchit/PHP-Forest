<?php

namespace ZFTTest\User;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use ZFT\User;

// PHP 5 version
// class IdentityMap implements IdentityMapInterface {

// }

// class DataMapper implements DataMapperInterface {

// }

class UserRepositoryTest extends AbstractHttpControllerTestCase
{
    public function testAssert()
    {
        $this->assertTrue(true);
    }

    public function testCreateUserRepositoryObject()
    {
        // PHP 5 version
        // $identityMap = new IdentityMap();
        // $dataMapper = new DataMapper();

        $identityMap = new class() implements User\IdentityMapInterface {

        };

        $dataMapper = new class() implements User\DataMapperInterface {

        };

        $repository = new User\Repository($identityMap, $dataMapper);
        $this->assertInstanceOf(User\Repository::class, $repository);
    }
}