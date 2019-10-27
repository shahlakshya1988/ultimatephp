<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Assignment Employee Details" ?></title>
</head>
<body>
<?php
$employeeName = "Lakshya Shah";
$employeeGender = "Male";
$employeeDateOfBirth = "21-November-1988";
$employeeDesignation = "Senior Web Developer";
$employeeWorkingHours = 9.30;
$employeeId = "SWD-001";
$employeeAddress="Computer";
$employeeMaritalStatus = False;
$employeeLastSalary = 50000.50;
?>
<table>
    <caption><?="Employee Details"?></caption>
    <tr>
        <th>Employee Name</th>
        <td><?=$employeeName; ?></td>
    </tr>
    <tr>
        <th>Employee Gender</th>
        <td><?=$employeeGender; ?></td>
    </tr>
    <tr>
        <th>Employee Date Of Birth</th>
        <td><?=$employeeDateOfBirth; ?></td>
    </tr>
    <tr>
        <th>Employee Designation</th>
        <td><?=$employeeDesignation; ?></td>
    </tr>
    <tr>
        <th>Working Hours</th>
        <td><?=$employeeWorkingHours ?></td>
    </tr>
    <tr>
        <th>Employee Id</th>
        <td><?=$employeeId; ?></td>
    </tr>
    <tr>
        <th>Employee Address</th>
        <td><?=$employeeAddress ?></td>
    </tr>
    <tr>
        <th>Marital Status</th>
        <td><?= ($employeeMaritalStatus) ? "Married" : "Single"; ?></td>
    </tr>
    <tr>
        <th>Last Salary</th>
        <td><?=(double)$employeeLastSalary; ?></td>
    </tr>
</table>

</body>
</html>