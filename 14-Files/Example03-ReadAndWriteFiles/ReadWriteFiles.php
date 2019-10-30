<?php
// OPEN A FILE
// READ A FILE
// CLOSE A FILE
// FILE MODE  -r read mode, -w write mode [Can't append] , -a append mode [contents will be added]
$filename = "content.txt";
$fileHandler = fopen($filename,"r");
$filesize = filesize($filename);
// reading file

var_dump($fileHandler);var_dump($filesize);
$content = fread($fileHandler,$filesize);
var_dump($content);
fclose($fileHandler);
// write operation
$fileHandler = fopen($filename,"w") or die("Unable to Write To the File");
$filewrite = fwrite($fileHandler,"This is Modified Content");
fclose($fileHandler);

// file_put_content
$filename = "NewFile.php";
$heredoc =<<<label
<?php echo "Hello World From the new file"; ?>
label;

file_put_contents($filename,$heredoc);
// nowdoc
$filename = "NowDocDemo.php";
$nowdoc=<<<'label'
<?php print_r($_SERVER); ?>
label;

file_put_contents($filename,$nowdoc);

echo `php NowDocDemo.php`;

// for good pract
if(file_exists($filename)){
    if(is_file($filename)){
        echo `php NowDocDemo.php`;
    }
}
if(!file_exists($filename)){
    if(!is_file($filename)){
        die("File Operations Error");
    }
}