
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Student Details" ?></title>
</head>
<body>
<?php
$student_array = [
    "1"=>["id"=>"101","name"=>"Student 1","age"=>20,"class"=>"10B"],
    "2"=>["id"=>"102","name"=>"Student 2","age"=>23,"class"=>"12B"],
    "3"=>["id"=>"103","name"=>"Student 3","age"=>25,"class"=>"14B"]
];

?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Class</th>
        </tr>
    <?php foreach($student_array as $student_key => $student_value){
        echo "<tr>";
        foreach($student_value as $key => $value){
           echo  "<td>{$value}</td>";
        }
        echo "</tr>";
         } ?>
    </thead>
</table>
</body>
</html>
