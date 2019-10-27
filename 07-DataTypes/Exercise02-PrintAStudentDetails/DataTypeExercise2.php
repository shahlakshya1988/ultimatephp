<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Excercise 2 : Data types" ?></title>
</head>
<body>
    <h1>Exercise 1: Print Student Details</h1>

    <h2>Student Information:</h2>
    <?php
    $studentName = "John Doe";
    $studentAge = 15;
    $studentGender = "Male";
    $studentClass=10;
    $studentSection="A";
    ?>
    <table>
        <tr>
            <th>Student Name</th>
            <td><?=$studentName ?></td>
        </tr>
        <tr>
            <th>Student Age</th>
            <td><?=$studentAge; ?></td>
        </tr>
        <tr>
            <th>Student Gender</th>
            <td><?=$studentGender; ?></td>
        </tr>
        <tr>
            <th>Student Class, Section</th>
            <td><?=$studentClass; ?>,<?=$studentSection ?></td>
        </tr>
    </table>

    <h2>Exams Attended and Marks:</h2>
    <?php
    $maths = 70;
    $science = 60;
    $english = 80;
    $social = 50;
    $totalMarks = $maths + $science + $english + $social;
    $examAttended = true;
    ?>

    <p><?=($examAttended)? "{$studentName}, has attended all the exams":"Student has skipped the exam"; ?></p>
    <h2>Final Marks:</h2>
    <p>Total Marks for Maths <?=$maths ?>, Science <?=$science?>, English <?=$english?>, Social <?=$social ?> is <?=$totalMarks; ?></p>
    <h2>Percentage:</h2>
    <?php
        $percentage = ($totalMarks / 400)* 100;
        echo "Percentage Scored is {$percentage}".PHP_EOL;
    ?>
    <h2>Result:</h2>
<?php echo ($percentage >= 60)? "Passed" : "Failed"; ?>
</body>
</html>