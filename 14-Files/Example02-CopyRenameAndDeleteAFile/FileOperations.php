<?php
// check if the file exists
$fileName = "MyFile.txt";
var_dump($fileName);
// it could be file/folder
if(file_exists($fileName)){
    echo PHP_EOL."File/Directory Does Exists".PHP_EOL;
    if(is_dir($fileName)){
        die("It is a directory Not File");
    }
    copy($fileName,"Copies.txt");
    copy("Copies.txt","Copies2.txt");
    rename("Copies2.txt","Copies3.txt");

    //delete file
    unlink("Copies3.txt");
}else{
    echo PHP_EOL."File/Directory Does Not Exists".PHP_EOL;
    mkdir($fileName);
}

