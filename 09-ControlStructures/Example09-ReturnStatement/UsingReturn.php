<?php
function checkUserRoles($userRoles){
    if(empty(trim($userRoles))){
        echo "Roles cannot be empty";
        return; // AFTER THIS NOT CODE WILL BE EXECUTED
    }
    // Dont execute this code when userRoles is empty
    switch($userRoles){
        case "Admin":
            echo "Hello Admin".PHP_EOL;
            break;
        case "Editor":
            echo "Hello Editor".PHP_EOL;
            break;
        default:
            echo "This is from Default Block".PHP_EOL;
    }
}
checkUserRoles("Admin");
checkUserRoles("Editor");
checkUserRoles("");