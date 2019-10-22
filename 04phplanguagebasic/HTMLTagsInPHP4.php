<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Tags In PHP 4</title>
</head>
<body>
	<?="<table border='1'>" ?>
		<?php for($i=0;$i<=10;$i++){?>
			<tr>
				<?="<td>"; ?>
					<?php echo $i; ?>
				<?="</td>"; ?>
				<?="<td>"; ?>
					<?php echo $i; ?>
				<?="</td>"; ?>
			</tr>
		<?php } ?>
	<?="</table>"; ?>
</body>
</html>
