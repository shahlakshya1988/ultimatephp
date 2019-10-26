<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Expressions and Operators"; ?></title>
</head>
<body>
    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
    <?php
        $num1 = 10;
        $num2 = 20;
        echo $num1 + $num2.PHP_EOL;
    ?>
    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php
    $maths = 10;
    $science = 20;
    $english = 30;
    $totalMarksScored = $maths + $science + $english;
    $passingMarks = 30;
    echo ($totalMarksScored >= $passingMarks) ? "Student Has Passed The Exams" : "Student Has Failed The Exam";
    echo PHP_EOL;
    $passingMarks = 70;
    echo ($totalMarksScored >= $passingMarks) ? "Student Has Passed The Exams" : "Student Has Failed The Exam";
    echo PHP_EOL;
    ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
    <?php
    $number = 20;
    echo ($number % 2 == 0) ? "The Number {$number} is Even" : "The Number {$number} is Odd";
    echo PHP_EOL;
    $number = 33;
    $result = ($number % 2 == 0) ? " Even": " Odd";
    echo "The Number {$number} is ".$result;
    echo PHP_EOL;
    ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
    <?php
        $isAllowed = true;
        $hasAccess = true;
     echo ($isAllowed && $hasAccess)? "Allow User To Access The System ".PHP_EOL : "Please Login To Continue ".PHP_EOL;
    $isAllowed = FALSE;
    $hasAccess = true;
    echo ($isAllowed && $hasAccess)? "Allow User To Access The System ".PHP_EOL : "Please Login To Continue ".PHP_EOL;
    ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
<?php
$number = 10;
$number += 10;
echo $number.PHP_EOL;
?>
</body>
</html>