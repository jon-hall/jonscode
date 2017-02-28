<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 28/02/17
 * Time: 21:53
 */

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