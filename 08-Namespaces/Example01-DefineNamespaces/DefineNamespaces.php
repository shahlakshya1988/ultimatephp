<?php
/*
  * 1) Namespaces are case insensitive
  * 2) Namespaces are used to avoid name collision between other libraries
  * 3) Namespace is the keyword used to define namespace
  * 4) Only classes, Interface, Functions and constants should be defined in namespaces
  * 5) Name space should be always in the first line
  * 6) include is used to include any file into another file
  * 7) Use the backslash to refer to sub directories or file name
  */


// including the namespace file
include "NamespaceConstants.php";
include "NamespaceConstants2.php";

//accessing the namespace
echo FILE_NAME;
echo myconstants\FILE_NAME;
echo MyConstantS\FILE_NAME;
echo MyConstantS2\FILE_NAME;
echo MyConstantS2\FILE_NAME;
