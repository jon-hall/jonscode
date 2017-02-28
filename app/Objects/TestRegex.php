<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 28/02/17
 * Time: 21:24
 */

namespace App\Objects;

use App\Objects\TestCase;

class TestRegex extends TestCase
{

    /**
     * Loop through method until finding the correct extension.
     *
     * @param $start
     * @param $end
     * @return string
     */
    protected function test($start, $end) {
        while(++$start < $end) {
            $matches = [];
            $filename = $this->state['filename'];
            $ext = $this->state['extensions'][$start];
            if (preg_match('/(.*)\.' . preg_quote($ext) . "$/i", $filename, $matches)) {
                return $matches[1];
            }
        }
    }

}