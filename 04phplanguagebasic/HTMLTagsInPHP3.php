<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Tags In PHP 3</title>
</head>
<body>
	<p>
		<a href="<?="https://www.gogole.com"?>" <?php echo "style='color:red;'" ?>>This is link</a>
	</p>
	<p <?= "style='color:blue;font-size:larger;font-weight:bolder;'" ?> >
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, eius!
	</p>
</body>
</html>
