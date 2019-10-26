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
    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    <?php
    $number = 10;
    echo --$number.PHP_EOL;
    $number--;
    echo $number.PHP_EOL;
    ?>
    <h2>Show the negative of 5 using Bitwise Operator:</h2>
    <?php
        var_dump(decbin(5));
        var_dump(~5);
    ?>

    <h2>Execute a dos or linux command using Execution Operator:</h2>
    <?php
        var_dump(`php -v`);
    ?>

    <h2>Raise and Error and control it using Execution Operators:</h2>
    <?php
    echo $php_errormsg;
    @$value = 1 /0;
    echo $php_errormsg;

    ?>

    <h2>Show an example of Operator Precedence Operator:</h2>
<?php
echo 5*2+5;
echo PHP_EOL;
echo 5 * (2+5);
echo PHP_EOL;
?>
</body>
</html>