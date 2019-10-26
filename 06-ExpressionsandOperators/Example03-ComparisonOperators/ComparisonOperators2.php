<?php
$a = 5;
$b = "5";
var_dump($a == $b); // this will not care about datatype
var_dump($a === $b); // this will check for datatype also, string int