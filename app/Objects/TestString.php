<?php

namespace App\Objects;


class TestString extends TestCase
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
            $filename = $this->state['filename'];
            $ext = $this->state['extensions'][$start];
            if(stripos(strrev($filename), strrev($ext) . '.') === 0) {
                return substr($filename, 0, -(strlen($ext) + 1));
            }
        }
    }
}