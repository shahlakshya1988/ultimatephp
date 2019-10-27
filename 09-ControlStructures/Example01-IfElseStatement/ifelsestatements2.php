<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="If Else in condition" ?></title>
</head>
<body>
<?php
$isLoggedIn = true;
$isLoggedIn = false;
if($isLoggedIn){
?>
    <h1>Welcome, Lakshya</h1>

<?php
}else{
?>
    <h1>Welcome, Please login to continue</h1>
<?php
}
?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem cumque deleniti, deserunt dicta distinctio doloremque ea explicabo facilis hic in itaque officia placeat praesentium quos repellendus suscipit unde voluptatum.</p>
</body>
</html>