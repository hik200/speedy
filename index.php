<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

defined('BASE_PATH') or define('BASE_PATH',__DIR__.'/src');

require_once("vendor/autoload.php");

print \speedy\Speedy::test(\speedy\Speedy::PHP_INC_PREF_POST);
//
//$pref =  function($size)
//{
//    $testCounter = 0;
//    for($i=0;$i<$size;$i++) {
//        ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter;
//        ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter;
//        ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter;
//        ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter; ++$testCounter;
//    }
//};
//
//$post = function($size)
//{
//    $testCounter = 0;
//    for($i=0;$i<$size;$i++) {
//        $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++;
//        $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++;
//        $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++;
//        $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++; $testCounter++;
//    }
//};
//
//print \speedy\Speedy::compare(['pref' => $pref, 'post' => $post]);