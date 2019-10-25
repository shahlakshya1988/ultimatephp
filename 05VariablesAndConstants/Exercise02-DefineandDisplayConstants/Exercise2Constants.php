<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Display Constants"; ?></title>
</head>
<body>
    <h1>Exercise 1: Define and Display Constants</h1>

    <h2>String Constant:</h2>
    <?php
    define("NAME","Shah Lakshya");
    ?>
    <h2>Integer Constant:</h2>
    <?php
    define("COST",1234569);
    ?>

    <h2>Print Constant from Function:</h2>
    <?php
    function print_constant(){
        echo NAME;
        echo "<br>";
        echo constant("NAME");
        echo "<br>";
    }
    print_constant();
    ?>
    <h2>Display Magic Constant:</h2>
    <?php
    echo "DIRECTORY SEPARATOR ".DIRECTORY_SEPARATOR;
    echo "<br>";
    echo "__LINE__".__LINE__;
    echo "<br>";
    echo "__DIR__".__DIR__;
    echo "<br>";
    echo "__FILE__".__FILE__;
    echo "<br>";
    ?>
</body>
</html>