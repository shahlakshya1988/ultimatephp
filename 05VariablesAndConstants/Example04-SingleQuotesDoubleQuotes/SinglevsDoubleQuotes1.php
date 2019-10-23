<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="When To Use Single Quotes / Double Quotes"?></title>
</head>
<body>
    <?php 
    $message = "This is a PHP Language";
    echo "Printing the message variable: $message <br>".PHP_EOL;
    echo 'Printing the message variable: $message <br>'.PHP_EOL; 

    $message2="PHP Prints this message faster".PHP_EOL;
    echo "$message - $message2".PHP_EOL;
    echo "$message".' $message2 '.PHP_EOL;
    
    ?>
</body>
</html>