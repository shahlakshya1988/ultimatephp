<?php
var_dump(date_default_timezone_get());
echo date("d-F-Y h:i:s a"); echo PHP_EOL;
echo date("d-F-Y H:i:s a"); echo PHP_EOL;
date_default_timezone_set("Australia/Melbourne");
var_dump(date_default_timezone_get());
echo date("d-F-Y h:i:s a"); echo PHP_EOL;
echo date("d-F-Y H:i:s a"); echo PHP_EOL;
date_default_timezone_set("Asia/Calcutta");
var_dump(date_default_timezone_get());
echo date("d-F-Y h:i:s a"); echo PHP_EOL;
echo date("d-F-Y H:i:s a"); echo PHP_EOL;