<?php 
/** 
 * USERS DON'T HAVE DATABASE RELATED THINGS
 * IT IS DATABASE CLASS IS HAVING, WE HAVE TO THINK IN COMPONENTS
 * USER HAVE FETCH USER, CONNECTING TO DATABASE IS THE JOB OF DATABASE CLASS
 * THIS IS JUST SAMPLE, MAY BE USED OR MAY NOT BE
 */
class Users{
    function fetchUser($id):bool{
        /*$db= new Database();
        $db->selectQuery($id,$tableName,$primary_key); */
        // QUERY THE DATABASE
        // DISPLAY THE DATA
        // MAY BE RETURN TRUE OR FALSE OR SOME THING ELSE
    }
    function deleteUser($id):bool{
        //DELETING THE RECORDS
        // RETURN DATA OR TRUE/FALSE
    }
}

$user1 = new Users();
$user1->fetchUser(2);
$user1->fetchUser(4);
$user1->fetchUser(3);
$user1->fetchUser(6);
$user1->deleteUser(2);