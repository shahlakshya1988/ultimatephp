<?php
/*
 * always use === [3=] insead of ==[2=], as this give 0 for the starting of the string
 */
$string = "This is a very long content, a very long string. This is a string";
$find = "very";
echo strpos($string,$find);
echo PHP_EOL;
$find = "This";
echo strpos($string,$find);
echo "This".PHP_EOL;
if(strpos($string,$find) === false){
    echo "String Not Found <br>".PHP_EOL;
}else{
    echo "String is found at".strpos($string,$find);
}
echo PHP_EOL;
$find = "Very";
echo strpos($string,$find);
echo PHP_EOL;
$find = "Very";
echo stripos($string,$find); // i indicate that it is case insensitive
echo PHP_EOL;
$find  = "content1";
var_dump(strpos($string,$find));
echo PHP_EOL;
if(strpos($string,$find) === false){
    echo "String Not Found <br>".PHP_EOL;
}else{
    echo "String is found at".strpos($string,$find);
}
echo PHP_EOL;