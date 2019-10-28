<?php
/*
 * Indexed arrays are the sequence array of element with integer index number
 * index is represented by interger index 1,2,3,4,5,6,7,8,9,10
 * Mostly in sequence
 * Starts with 0
 * New elements are added with incrementd previous index.
 * we can break the sequence, and add elements for jumped index
 */
// automatically index have been done
$arr = [1,2,3,4,5,6,7,8,9,10];
var_dump($arr);
$arr[]=11;
var_dump($arr);
// we are replacing the whole previous array
$arr = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
var_dump($arr);
