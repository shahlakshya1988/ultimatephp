<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Strings And Integers"?></title>
</head>
<body>
    <h2>Combining Strings And Integers</h2>
    <?php 
    $version_float= 7.3;
    $version_string = "7.3";
    $language = "PHP";
    echo "{$language} version is {$version_float}<br>".PHP_EOL;
    echo "{$language} version is {$version_string}<br>".PHP_EOL;
    ?>
</body>
</html>