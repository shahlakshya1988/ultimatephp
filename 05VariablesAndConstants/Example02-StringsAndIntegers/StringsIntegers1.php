<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Strings and Integers"?></title>
</head>
<body>
    <?php
    $name = "John Smith";
    $message="This is a Message";
    echo $name." : ".$message.PHP_EOL; 
    echo "$name : $message".PHP_EOL;
    echo '$name : $message'.PHP_EOL; // NOTE THE SINGLE QUOTES
    echo "{$name} : {$message}".PHP_EOL;
    ?>
    <h1>Integer</h1>
    <?php
    $integer = 100;
    echo $integer;
    echo PHP_EOL;
    $float = 100.100;
    echo $float;
    echo PHP_EOL;
    $float = 100.1001;
    echo $float;
    echo PHP_EOL;
    $convert_to_int = (int)$float;
    echo $convert_to_int;
    echo PHP_EOL;
     
    ?>
    
</body>
</html>