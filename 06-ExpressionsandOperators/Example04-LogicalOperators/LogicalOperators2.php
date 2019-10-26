<?php
/*
 * AND && Both Should Be True
 * OR !! Any One Can Be True
 * ! If No
 */
$student = "John";
$mathspassed = true;
$mathspassed = false;
$sciencepassed = true;
$sciencepassed = false;
 // Either true or false
if($mathspassed || $sciencepassed){
    echo "{$student} has passed in either Maths or Science".PHP_EOL;
}else{
    echo "{$student} has failed in all the exam".PHP_EOL;
}

echo ($mathspassed or $sciencepassed)? "Student {$student} has passed in Either Maths or Science" : "Student {$student} has failed in all the exam";
echo PHP_EOL;