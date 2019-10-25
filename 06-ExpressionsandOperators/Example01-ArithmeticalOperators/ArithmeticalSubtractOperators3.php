<?php
// DIFFERENCE BETWEEN MARKS ACHIEVED AND TOTAL MARKS
$maths = 70;
$science = 30;
$english = 80;
$totalSubjectMarks = 300;
$totalMarks = $maths + $science + $english;
$totalDifference = $totalSubjectMarks - ($totalMarks);
echo "Total Difference Marks {$totalDifference} <br>".PHP_EOL;
