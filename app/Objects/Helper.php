<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 28/02/17
 * Time: 21:12
 */

namespace App\Objects;


class Helper
{

    /**
     * Generate files + extensions
     *
     * @param int $limit
     * @return mixed
     */
    public function generateFiles($limit = 100000) {
        $state['extensions'] = static::generateExtensions($limit);
        $state['filename'] = 'filename.' . $state['extensions'][mt_rand(0, $limit)];

        return $state;
    }
    /**
     * Generate a number of random file extensions.
     *
     * @param int $count
     * @return array
     */
    protected static function generateExtensions($count = 100) {
        $min = base_convert('100', 36, 10);
        $max = base_convert('zzz', 36, 10);

        $extensions = [];
        while($count--) {
            $extensions[] = base_convert(mt_rand($min, $max), 10, 36);
        }

        return $extensions;
    }


}