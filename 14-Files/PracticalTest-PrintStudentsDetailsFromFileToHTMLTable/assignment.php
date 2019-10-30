<?php
$filename = "students.csv";
$file = file($filename);
$maindata=[];
foreach($file as $line){
    var_dump($line);
    $line_data = explode(",",$line);

    unset($sub_data);
    $sub_data = [];
    foreach($line_data as $data){

        $sub_data[]=$data;

    }
    $maindata[]=$sub_data;

}

print_r($maindata);
//die();
$fileHandler = fopen("students.html","a");
$heredoc=<<<label
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
</head>
<body>
<table>
label;
//var_dump($maindata); die();
foreach($maindata as $data => $value){
    $heredoc.="<tr>";
    foreach($value as $subdata => $subvalue){
        var_dump($sub_data);
        $heredoc.="<td>".$subvalue."</td>";
    }
    $heredoc.="</tr>";
}
$heredoc.=<<<label
</table>
</body>
</html>
label;
fwrite($fileHandler,$heredoc);
fclose($fileHandler);


