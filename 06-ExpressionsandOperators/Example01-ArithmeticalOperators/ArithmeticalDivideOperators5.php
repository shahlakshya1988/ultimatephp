<?php
$maths = 70 ;
$science = 30;
$english = 80;
$totalMarks = $maths + $science + $english;
$totalSubjectMarks = 300;
$percentage = ($totalMarks / $totalSubjectMarks) * 100;
echo "Percentage Scored : {$percentage}% <br>".PHP_EOL;