<?php require_once  "max_number_namespace.php"; //var_dump(max_number\MAX_NUMBER); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd Even Number Using NameSpace</title>
</head>
<body>
<table>
    <caption>Odd/Even Number</caption>
    <thead>
    <tr>
        <th>Number</th>
        <th>Odd</th>
        <th>Even</th>
    </tr>
    </thead>
    <tbody>
        <?php
        for($i=0;$i<=max_number\MAX_NUMBER;$i++){
            ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <td><?php echo ($i%2!=0) ? "Yes" : "No" ?></td>
                    <td><?php echo ($i%2 == 0) ? "Yes" : "No" ?></td>
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>

</body>
</html>