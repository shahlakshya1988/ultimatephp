<?php 
class Files{
    function displayContent($filename):bool{
        $result = true;
        try{    
            echo "Read The Content Of The File ::: {$filename}".PHP_EOL;
            $content = file_get_contents($filename);
            echo PHP_EOL." Displaying the Content Of the File ".PHP_EOL;
            echo $content;
        }catch(Exception $e){
            $result = false;
        }
        return $result;
    }
}
$file = new Files();
$file->displayContent("demo.html");