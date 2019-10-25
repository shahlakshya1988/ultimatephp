<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Variables"; ?></title>
</head>
<body>
    <h1>Exercise 1: Create and Display Variables</h1>
    <h2>String Variable:</h2>
    <?php
    $stringVariable = "This is a string Variable";
    var_dump($stringVariable);
    ?>
    <h2>Integer Variable:</h2>
    <?php
    $intVariable = 234;
    var_dump($intVariable);
    ?>
    <h2>Float Variable:</h2>
    <?php
    $floatVariable = 234.256;
    var_dump($floatVariable);
    ?>

    <h2>Print Variable from Function:</h2>
    <?php
    function print_variable(){
        $message = "This is printed from Function";
        echo $message."<br>";
    }
    print_variable();
    ?>

    <h2>Static Variable:</h2>
    <?php
    function static_demo(){
        static $counter = 1;
        echo "Static Demo Counter ".$counter."<br>";
        $counter++;
    }
    static_demo();
    static_demo();
    static_demo();static_demo();static_demo();
    ?>

    <h2>Global Variable:</h2>
    <?php
    $global_name = "Lakshya";
    function print_myname(){
        global $global_name;
        var_dump($global_name);
    }
    print_myname();
    ?> <br>
    <?php
    global $somename;
    $somename = "Lakshya";
    function print_somename(){
        echo "<br>";
        echo $GLOBALS["somename"];
        echo "<br>";
    }
    print_somename();
    ?>

    <h2>Super Global Variable:</h2>
    <?php
        echo "<pre>",print_r($_SERVER),"</pre>";
    ?>
    <h2>Variables of Variables:</h2>
    <?php
        $name = "Lakshya Pradhyuman Shah";
        $message = "name";
        $somemessage = "message";
        echo $somemessage;
        echo "<br>";
        echo $$somemessage;
        echo "<br>";
        echo $$$somemessage;
        echo "<br>";
    ?>
</body>
</html>