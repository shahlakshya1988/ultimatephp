<?php
$fileHandler = fopen("mynewfile.txt","w");
fwrite($fileHandler,"Hello World");
fclose($fileHandler);

$fileHandler= fopen("mynewfile.txt","r");
$filesize = filesize("mynewfile.txt");
$content = fread($fileHandler,$filesize);
var_dump($content);
fclose($fileHandler);