<?php
/**
 * differnece between or and ||
 */
$result1= TRUE || FALSE;
$result2 = TRUE or FALSE;
var_dump($result1);
var_dump($result2);

$result3= FALSE || TRUE;
$result4 = FALSE or true;
var_dump($result3);
var_dump($result4);

var_dump("OR");
var_dump(TRUE OR TRUE);
var_dump(TRUE OR FALSE);
var_dump(FALSE OR TRUE);
var_dump(FALSE OR FALSE);

var_dump("||");
var_dump(TRUE || TRUE);
var_dump(TRUE || FALSE);
var_dump(FALSE || TRUE);
var_dump(FALSE || FALSE);