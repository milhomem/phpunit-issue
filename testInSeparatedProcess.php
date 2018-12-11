<?php

use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
class SeparateProcessTest extends TestCase
{
    public function testFalsePositive()
    {
        $this->assertFalse(true);
    }
}
