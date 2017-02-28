<?php

namespace App\Objects;

class TestSuite
{
    /**
     * Test a TestCase Object.
     *
     * @param TestCase $test
     * @return array
     */
    public static function test(TestCase $test) {
        return $test->run();
    }
}