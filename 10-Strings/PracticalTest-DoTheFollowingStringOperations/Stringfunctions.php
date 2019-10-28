<?php
$string = "This is my String which goes here. this string has most of the characters";
echo "String Length ".strlen($string);
echo PHP_EOL;
echo "String Word Count ".str_word_count($string);
echo PHP_EOL;
echo "String Find \"string\" ".strpos($string,"string");
echo PHP_EOL;
echo "String Find Case Insensitive \"string\" ".stripos($string,"string");
echo PHP_EOL;

$heredocSample = <<<label
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, rerum sint. Assumenda eius quidem suscipit vel velit? Alias, deserunt doloremque doloribus facere fuga labore nobis, nostrum, perspiciatis quam sapiente voluptatum!</p>
<ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
    <li><a href="#">Item 5</a></li>
</ul>
label;
echo $heredocSample;


