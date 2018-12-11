<?php

use PHPUnit\Framework\TestCase;

class ProcessTest extends TestCase
{
    public function testFalsePositive()
    {
        $this->assertFalse(true);
    }
}
