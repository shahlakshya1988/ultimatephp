<?php
/**
 * only single line one line is considered for if else if not brackets are used
 * more than one statement will cause error
 */
if(true)
    echo "This is if without braces".PHP_EOL;
else
    echo "This is else without braces".PHP_EOL;
echo "This is not the part of If Else".PHP_EOL;

echo PHP_EOL.PHP_EOL;

if(false)
    echo "This is if without braces".PHP_EOL;
else
    echo "This is else without braces".PHP_EOL;
echo "This is not the part of If Else".PHP_EOL;

echo PHP_EOL.PHP_EOL;
if(true)
    echo "This is Statement 1".PHP_EOL; echo "This is Statement 2".PHP_EOL; echo "This is Statement 3".PHP_EOL; echo "This is Statement 4".PHP_EOL;