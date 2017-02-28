<?php

require __DIR__ . '/vendor/autoload.php';

$files = App\Objects\Helper::generateFiles(10000);

$regexTest = App\Objects\TestSuite::test(new App\Objects\TestRegex($files, 100));
$stringTest = App\Objects\TestSuite::test(new App\Objects\TestString($files, 100));

echo "\n\n";

echo <<<OUTPUT
========================
       _             
      | |            
      | | ___  _ __  
  _   | |/ _ \| '_ \ 
 | |__| | (_) | | | |
  \____/ \___/|_| |_|
                     
                     
 ** The favicon king **                     

========================
OUTPUT;

echo "\n\n";

print_r($regexTest);
print_r($stringTest);

echo "\n\n";
echo "done.\n";