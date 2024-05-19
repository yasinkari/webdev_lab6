<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
    <style>
        table {
            width: 50%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
$students = [
    [
        'name' => 'Yasin',
        'program' => 'BIT',
        'age' => 21,
    ],
    [
        'name' => 'Haiqal;',
        'program' => 'BIW',
        'age' => 20,
    ],
    [
        'name' => 'Muz',
        'program' => 'BIS',
        'age' => 22,
    ],
];
?>
<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['program']; ?></td>
        <td><?php echo $student['age']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
