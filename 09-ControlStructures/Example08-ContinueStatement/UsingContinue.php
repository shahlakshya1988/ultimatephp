<?php
$value = 0;
while($value<=100){
    $value++; // make sure this is before the condition
    if($value % 2 != 0){
        continue; // next line of the code will be skipped
    }
    echo $value.PHP_EOL;

}