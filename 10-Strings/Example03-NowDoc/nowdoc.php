<?php
/**
 * purpose of nowdoc is to print the block of strings
 * label is kept in single quotes
 * heredoc only does variable substition, In nowdoc nothing happens even variable substituion
 */

$number = 10;
$documenttitle = "This is my document Title";
$nowdoc = <<< 'DOC_LABEL'
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{$documenttitle}</title>
    </head>
    <body>
    <h1>Apart from variables substitution nothing will work, any condition or expression won't work</h1>
        <p>($number * 10)</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse impedit ipsum natus porro ratione sapiente. Alias deleniti deserunt distinctio dolore, doloribus eaque excepturi, mollitia natus non omnis sunt voluptatum.</p>
        "more syntax " moresyn " hello" ' ' ' ' '
    </body>
    </html>
DOC_LABEL;
echo $nowdoc;