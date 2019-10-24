<?php 
    $firstname = "Lakshya";
    $name = $firstname;
    var_dump(isset($name));

    $lastname = NULL;
    $name = $lastname;
    var_dump(isset($name));

    $name = NULL;
    var_dump(isset($name));