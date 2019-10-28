<?php
// string to array explode
$students = "Student 1,Student 2,Student 3,Student 4,Student 5";
var_dump($students);
$student_array = explode(",",$students);
var_dump($student_array);
$students_string = implode(", ",$student_array);
var_dump($students_string);


// limiting explode
$student_array = explode(",",$students,2);
var_dump($student_array);