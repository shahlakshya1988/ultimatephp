<?php
/*
  * 1) Number of words
  * 2) Replace Strings
  * 3) Reverse Strings
  * 4) Remove White Spaces
  * 5) Shuffle Strings
  * 6) Find Position case insenstive
  * 7) Upper and Lower Case
  * 8) Word Wrap the string and display it
  */
$content = "You can do string operations easily with string functions";
$findworld = "operation";
$position = false;
echo "{$content}".PHP_EOL;
echo "Number Of Words ::  ".str_word_count($content);
echo PHP_EOL;
echo "Find and Replace Operation :: ";
echo str_replace($findworld,"Manipulation",$content);
echo PHP_EOL;
echo "Reversing the String :: ".strrev($content);
echo PHP_EOL;
echo "Shuffle String :: ".str_shuffle($content);
echo PHP_EOL;
echo "Shuffle String :: ".str_shuffle($content);
echo PHP_EOL;
echo "Find Insensitive ".stripos($content,$findworld);
echo PHP_EOL;
echo "Upper Case :: ".strtoupper($content);
echo PHP_EOL;
echo "Lower Case :: ".strtolower($content);
echo PHP_EOL;
echo "Capital Case :: ".ucwords($content);
echo PHP_EOL;
$longtext=<<<TEXT
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolore eligendi enim, esse illum magni nam necessitatibus officiis porro quas quibusdam quod repudiandae soluta suscipit veritatis voluptate voluptatum. Amet beatae commodi dolore iusto molestias nobis ratione repudiandae sequi veniam voluptatem? Assumenda cum dignissimos ea in nesciunt provident quaerat quibusdam saepe.

TEXT;
echo wordwrap($longtext,10);
echo PHP_EOL;
