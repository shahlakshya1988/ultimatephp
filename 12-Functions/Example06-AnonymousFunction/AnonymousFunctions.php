<?php
/**
 * anonymous function are function with no function names, also know as closers
 */
declare(strict_types = 1);
$addFunction = function(int $a,int $b):int{
    $addition = $a + $b;
    return $addition;
};
echo $addFunction(1,3);
echo PHP_EOL;
$content = "This is a string message";
$printContent = function(){
    global $content;
    echo $content;
    echo PHP_EOL;
};
$printContent();
$printOtherContent = function() use($content){
                    echo $content;
                    echo PHP_EOL;
                };
$printOtherContent();
