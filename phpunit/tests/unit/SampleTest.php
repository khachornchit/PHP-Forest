<?php
declare (strict_types = 1);

class SampleTest extends PHPUnit\Framework\TestCase
{
    public function testAssertsTrue() 
    {        
        $this->assertTrue(true);
    }
    
    public function testAssertFalse() {
        $this->assertFalse(false);
    }
}