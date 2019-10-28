<?php
/**
 * Heredoc will display the block of content, with the mixing of quotes ' or "
 * but the main purpose is to print the large block of string
 */
$number = 10;
$documenttitle = "This is my document Title";
$heredoc = <<< DOC_LABEL
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
echo $heredoc;