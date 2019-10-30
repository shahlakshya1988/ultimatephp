<?php
// csv is the comma seperated file
// comma or tab delimiter is used

//Read Entire Content
$filename = "students.csv";
$content = file_get_contents($filename);
print_r($content);
echo PHP_EOL.PHP_EOL;

//Read Line By Line
$csvFile=file($filename);
foreach($csvFile as $line){
    echo $line.PHP_EOL;
}

echo PHP_EOL.PHP_EOL;

$csvFile = file($filename);
foreach($csvFile as $line){
    $data[]=str_getcsv($line);

}
print_r($data);

// array map
$content = array_map("str_getcsv",file($filename));
print_r($content);