<?php
/*
  * we can always raise error by dividing 0
  */
echo $php_errormsg; // no errors till now
@$value = 1/0; // to surpress the error
echo $php_errormsg; // this will raise the error
