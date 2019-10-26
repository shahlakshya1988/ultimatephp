<?php
/*
 * AND && Both Should Be True
 * OR !! Any One Can Be True
 * ! If No
 */
$permission = true;
$loggedin = false;
$loggedin = true;
$user = "John Smith";
var_dump($permission AND $loggedin);
echo PHP_EOL;
var_dump($permission AND !$loggedin);
echo PHP_EOL;
echo ($permission AND $loggedin) ? "Hello {$user}" : "Hello Guest";