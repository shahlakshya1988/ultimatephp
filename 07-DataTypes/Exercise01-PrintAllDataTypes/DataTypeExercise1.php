<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Datatype Excercise"; ?></title>
</head>
<body>
    <h1>Exercise 1: Use All Data Types</h1>

    <h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
        $length = 10;
        $breath = 30;
        $area = $length * $breath;
        echo "Area with Length {$length} and Breath {$breath} is :: ".$area.PHP_EOL;
    ?>

    <h2>Calculate Student Exact Marks Percentage with Double:</h2>
    <?php
        $marksScored = 34.33;
        $totalMarks = 100;
        $percentage = ($marksScored / $totalMarks) * 100;
        echo "Percentage Of Marks ".$percentage." % ";
    ?>

    <h2>Check if the user has admin roles:</h2>
    <?php
    $username = "myusername";
    $thisUserRole="Service";
    $otherUser="otherusername";
    $otherUserRole="Admin";
    echo ($thisUserRole == "Admin") ? "{$username} is Admin" : "{$username} is {$thisUserRole}, but not Admin";
    echo PHP_EOL;
    echo ($otherUserRole == "Admin") ? "{$otherUser} is Admin ":"{$otherUser} is not Admin";
    echo PHP_EOL;
    ?>

    <h2>Define and Display a User Name using Strings:</h2>
    <?php
        $username = "myusername";
        echo $username.PHP_EOL;
        echo strlen($username)." Character Count".PHP_EOL;
    ?>

    <h2>Check if the variable is null or not:</h2>
    <?php
        $name = null;
        echo (is_null($name)) ? "Null Value Received" : $name;
        echo PHP_EOL;
        $name = "Lakshya";
        echo (is_null($name)) ? "Null Value Received" : $name;
    ?>
</body>
</html>