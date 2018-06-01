<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class AlmacenTest extends TestCase
{
    use TestCaseTrait;

    public function getConnection()
    {}

    public function getDataSet()
    {}

    public function testInitial()
    {
        $this->assertTrue(true);
    }
}
