<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
<?php
$name = "Yasin bin Ibrahim";
$matricNumber = "DI220135";
$course = "Bachelor of Information Technology";
$yearOfStudy = "2";
$address = "No 138, Jalan Suria Utama, Taman Suria, Johor Bahru, Johor";
?>
<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNumber; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>
