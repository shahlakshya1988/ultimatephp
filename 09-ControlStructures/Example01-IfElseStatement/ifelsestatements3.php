<?php
$input1 ="Some Text From The User";
$input2 = 34;
if(!is_null($input1)){
    echo '$input1 NOT is empty'.PHP_EOL;
}else{
    echo '$input1 is empty'.PHP_EOL;
}
//unset($input1);
//$input1 = null;
if(isset($input1) && !is_null($input1)){
    echo '$input1 NOT is empty'.PHP_EOL;
}else{
    echo '$input1 is empty'.PHP_EOL;
}

echo PHP_EOL.PHP_EOL;
$somestring = "";
if(empty($somestring)){
    echo '$somestring is empty'.PHP_EOL;
}else{
    ECHO '$somestring is not empty '.PHP_EOL;
}
echo PHP_EOL.PHP_EOL;
$somestring = "   ";
if(empty($somestring)){
    echo '$somestring is empty'.PHP_EOL;
}else{
    ECHO '$somestring is not empty '.PHP_EOL;
}

echo PHP_EOL.PHP_EOL;
$somestring = "   ";
if(empty(trim($somestring))){
    echo '$somestring is empty'.PHP_EOL;
}else{
    ECHO '$somestring is not empty '.PHP_EOL;
}