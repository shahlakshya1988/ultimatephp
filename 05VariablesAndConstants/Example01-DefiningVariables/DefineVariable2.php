<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Variables and Constants"?></title>
</head>
<body>
    <?php 
    $programming_language = "PHP";
    $aboutme = "I Love Programming In ".$programming_language;
    echo "<p>{$aboutme}</p>";

    $programming_language = "HTML";
    $aboutme = "I Love Designing In ".$programming_language;
    echo "<p>{$aboutme}</p>";

    $programming_language = "CSS";
    $aboutme = "I Love Designing In ".$programming_language;
    echo "<p>{$aboutme}</p>";

    $programming_language = "Javascript";
    $aboutme = "I Love Programming In ".$programming_language;
    echo "<p>{$aboutme}</p>";
    ?>
</body>
</html>