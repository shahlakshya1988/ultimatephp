<?php
define("DS",DIRECTORY_SEPARATOR);
var_dump(DS);
defined("DS") ? NULL : define("DS","SEPARATE VALUE");
defined("LANGUAGE")? NULL : define("LANGUAGE","PHP");
defined("LANGUAGE") ? NULL : define("LANGUAGE","JAVA");
var_dump(LANGUAGE);
define("DS","THIS IS ILLEGAL OPERATION, AND WILL GENERATE ERROR");