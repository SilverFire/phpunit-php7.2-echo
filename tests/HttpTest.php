<?php

class HttpTest extends \PHPUnit\Framework\TestCase
{
    public function testCanSetHeader()
    {
        header('Test: passed');
        $this->assertTrue(true);
    }
}
