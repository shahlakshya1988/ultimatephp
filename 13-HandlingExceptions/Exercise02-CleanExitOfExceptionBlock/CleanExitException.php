<?php
    try{
        throw new Exception("Can Be Raised From AnyWhere");
    }catch(Exception $e){
        echo PHP_EOL;
        echo $e->getMessage();
        echo PHP_EOL;
    }finally{
        echo PHP_EOL;
        echo "This is from Finally block";
        echo PHP_EOL;
    }