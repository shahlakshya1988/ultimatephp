<?php
$settings = "";
$settings = parse_ini_file("test.ini");
print_r($settings);
foreach($settings as $key => $value){
    echo $key." ::: ".$value;
    echo PHP_EOL;
}