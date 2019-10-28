<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Exercise 2: String Functions"; ?> </title>
</head>
<body>
<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
<?php
$longtext = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur blanditiis, commodi corporis cumque cupiditate, dolorem doloribus, earum eligendi error est eveniet ex facilis fugiat hic illum laboriosam neque omnis pariatur quaerat quas quod ratione sequi voluptatem voluptates. Ab accusantium cum debitis enim eveniet libero maiores molestias, mollitia numquam odio, officiis pariatur quibusdam repellendus reprehenderit ullam. Corporis enim, eveniet ipsam magnam odit officiis porro quam quo rerum vitae. Ad consequatur culpa doloribus eius quibusdam, sapiente suscipit voluptas. Architecto at cum expedita fuga ipsa labore laboriosam libero, molestiae necessitatibus perspiciatis quas quasi quia quis quisquam rem sequi similique totam, ut voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur blanditiis, commodi corporis cumque cupiditate, dolorem doloribus, earum eligendi error est eveniet ex facilis fugiat hic illum laboriosam neque omnis pariatur quaerat quas quod ratione sequi voluptatem voluptates. Ab accusantium cum debitis enim eveniet libero maiores molestias, mollitia numquam odio, officiis pariatur quibusdam repellendus reprehenderit ullam. Corporis enim, eveniet ipsam magnam odit officiis porro quam quo rerum vitae. Ad consequatur culpa doloribus eius quibusdam, sapiente suscipit voluptas. Architecto at cum expedita fuga ipsa labore laboriosam libero, molestiae necessitatibus perspiciatis quas quasi quia quis quisquam rem sequi similique totam, ut voluptas.";

echo wordwrap($longtext,3);
echo PHP_EOL;

?>


<h2>Find and Replace the word in upper case</h2>
<?php
    $string="This is the string. this String is having words in uppercase as well as lowercase";
    echo str_replace("String","Text",$string);
    echo PHP_EOL;
    echo str_ireplace("String","text",$string);
    echo PHP_EOL;
?>

<h2>Count number of words</h2>
<?php
echo str_word_count($string);
echo PHP_EOL;
?>

<h2>Shuffle the Strings</h2>
<?php
echo str_shuffle($string);
echo PHP_EOL;
echo str_shuffle($string);
echo PHP_EOL;
?>
</body>
</html>