<?php
/*
 * used for excecuting the commands on terminal or cmd
 * note operating system dependend
 */
$result = `git log --format=full`;
var_dump($result);

echo "<br><br>";

$result = `dir`;
var_dump($result);

echo "<br><br>";

$result = `ls`;
var_dump($result);