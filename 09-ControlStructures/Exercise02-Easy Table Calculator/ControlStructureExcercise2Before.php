<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Table Calculator</title>
</head>
<body>
    <?php
    for($i=1;$i<=20;$i++){
        ?>
        <table style="width:49%;float:left;margin-bottom:10px;" border="1" cellpadding="2" cellspacing="2">
                <caption><?="Table for {$i}"?></caption>
            <?php for($j=1;$j<=10;$j++){ ?>
                <tr>
                    <td><?="{$i} * {$j}" ?></td>
                    <td><?=$i*$j; ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
    ?>
</body>
</html>