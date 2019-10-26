<?php
/**
 * difference between and and &&
 * operator precedence
 * and has less precedence than =
 * && has more precedence than =
 */
$result1 = TRUE and FALSE;
$result2 = TRUE && FALSE;
var_dump($result1);
var_dump($result2);