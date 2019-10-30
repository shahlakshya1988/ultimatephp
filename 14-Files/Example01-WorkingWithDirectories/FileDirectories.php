<?php
// Sample 1 List all the files in directory scandir
$path = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
var_dump($path);
echo PHP_EOL;
var_dump(scandir($path));
echo PHP_EOL;
print_r(scandir($path));
foreach(scandir($path) as $dirname){
    if($dirname!='.' && $dirname!='..' && $dirname != '.git' && $dirname != '.idea'){
        echo $dirname.PHP_EOL;
    }
}

$directory_array = array_diff(scandir($path),['.','..','.git','.idea']);
print_r($directory_array);

echo PHP_EOL.PHP_EOL;
// check for the specific file
// check if the name is dir or file is_file,is_dir
echo PHP_EOL."All Directory and File Name".PHP_EOL;
foreach($directory_array as $name){
    //echo $path.$name.PHP_EOL;
    //var_dump(is_dir($path.$name));
    if(is_file($name)){
        echo $name.PHP_EOL;
    }elseif(is_dir($path.$name)){
        echo $name.DIRECTORY_SEPARATOR.PHP_EOL;

    }
}


// getting specific patters
$path = glob("*.*");
var_dump($path);


// wether the file exists

$mypath=__DIR__;
print_r(scandir($mypath));
mkdir("thisismynewfolder");
print_r(scandir($mypath));

echo PHP_EOL.PHP_EOL;
$mycurrentpath = __DIR__.DIRECTORY_SEPARATOR."FileDirectories.php";
$mypath = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
$destination_path = $mypath."thisismynewfolder".DIRECTORY_SEPARATOR."FileDirectories.php";
copy($mycurrentpath,$destination_path);
var_dump($mypath);