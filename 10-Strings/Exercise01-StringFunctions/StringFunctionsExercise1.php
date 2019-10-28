<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Strings"?></title>
</head>
<body>
<?php $content = "    this is a String. this is very long string. We will use this string for operations     "; ?>
    <h1>Exercise 1: String Functions</h1>

    <h2>Find the Given Word in the String (Case Insensitive)</h2>
   <?php
        $find = "string";
        if(stripos($content,$find) === false){
            echo "Word Is Not Present In The String <Br>".PHP_EOL;
        }else{
            echo "Word is at ".stripos($content,$find).PHP_EOL;
        }

       $find = "string";
       if(strpos($content,$find) === false){
           echo "Word Is Not Present In The String <Br>".PHP_EOL;
       }else{
           echo "Word is at ".strpos($content,$find).PHP_EOL;
       }
   ?>

    <h2>Calculate the Length of the String</h2>
<?php
echo strlen($content);
echo PHP_EOL;
?>

    <h2>Remove White Spaces from  the String</h2>
<?php
echo trim($content);
echo PHP_EOL;
?>

<h2>Remove White Spaces from left the String</h2>
<?php
echo ltrim($content);
echo PHP_EOL;
?>
<h2>Remove White Spaces from right the String</h2>
<?php
echo rtrim($content);
echo PHP_EOL;
?>

    <h2>Reverse the String</h2>
<?php
echo strrev($content);
echo PHP_EOL;
?>
</body>
</html>