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
    echo PHP_EOL;
    $message = "This message is in Double quotes";
    echo $message.PHP_EOL;
    $message = 'This message is in Single quotes';
    echo $message.PHP_EOL;
    $somenumber = 2019;
    $message = "Year : {$somenumber}";
    echo $message.PHP_EOL;
    $message = "Year : $somenumber";
    echo $message.PHP_EOL;
    $message = "Year : $somenumber";
    echo $message.PHP_EOL;
    ECHO "<br>";
    echo "$message"." ".'$message'.PHP_EOL;
    
    ?>
</body>
</html>