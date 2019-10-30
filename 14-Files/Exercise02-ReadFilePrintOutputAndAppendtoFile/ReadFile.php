<?php
$filename = "NewFile.html";
$fileHandler=fopen($filename,"w");
fwrite($fileHandler,"Hello I am one Line 4 Data");
fclose($fileHandler);


$content = file_get_contents($filename);
echo $content;


$fileHandler = fopen($filename,"a");
fwrite($fileHandler,"\n\rThis data is added to the file after append system");
fclose($fileHandler);

$fileHandler = fopen($filename,"r");
$filesize = filesize($filename);
$content = fread($fileHandler,$filesize);
echo $content;
