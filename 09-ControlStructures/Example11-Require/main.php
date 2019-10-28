<?php
/**
 * INCLUDE WILL KEEP ON EXECUTING THE CODE
 * THOUGH FILE IS NOT FOUND, IN SOME CASES WE NEED TO STOP THE EXECUTING THE CODE
 * WE HAVE REQUIRE FOR THIS.
 */
?>
<?php
require "header.php";
?>
    <body>
<?php require "menu.php"; ?>
<?php // require "submenu.php"; // code will stop here ?>
    <h1>Excercise on How to include files</h1>
<?php require "footer.html"; ?>