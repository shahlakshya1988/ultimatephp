<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Difference Between And and Or"; ?></title>
</head>
<body>
    <table>
        <tr>
            <th>Status 1</th>
            <th>Status 2</th>
            <th>And</th>
            <th>Or</th>
            <th>xor</th>
        </tr>
        <tr>
            <td>TRUE</td>
            <td>TRUE</td>
            <td><?=(TRUE && TRUE)?"TRUE":"False" ?></td>
            <td><?=(TRUE || TRUE)?"TRUE":"False" ?></td>
            <td><?=(TRUE xor TRUE)?"TRUE":"False" ?></td>
        </tr>
        <tr>
            <td>TRUE</td>
            <td>FALSE</td>
            <td><?=(TRUE && FALSE)?"TRUE":"False" ?></td>
            <td><?=(TRUE || FALSE)?"TRUE":"False" ?></td>
            <td><?=(TRUE xor FALSE)?"TRUE":"False" ?></td>
        </tr>
        <tr>
            <td>FALSE</td>
            <td>TRUE</td>
            <td><?=(FALSE && TRUE)?"TRUE":"False" ?></td>
            <td><?=(FALSE || TRUE)?"TRUE":"False" ?></td>
            <td><?=(FALSE xor TRUE)?"TRUE":"False" ?></td>
        </tr>
        <tr>
            <td>FALSE</td>
            <td>FALSE</td>
            <td><?=(FALSE && FALSE)?"TRUE":"FALSE" ?></td>
            <td><?=(FALSE || FALSE)?"TRUE":"FALSE" ?></td>
            <td><?=(FALSE xor FALSE)?"TRUE":"FALSE" ?></td>
        </tr>
    </table>
</body>
</html>