<?php

require_once("config.php");

$selQuery = "SELECT * FROM `newtable`";
$studentsQuery = $con->query($selQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List from database</title>
</head>

<body>
    <h3>Student list</h3>
    <a href="student-add.php">+add student</a>
    <table border="1" cellspacing="0" width ="100%">
        <tr>
            <th>Sr.No</th>
            <th>name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>fee</th>
            <th>address</th>
            <th>pin</th>
            <th>action</th>

        </tr>
        <?php
        $a = 1;
        while ($_student = mysqli_fetch_assoc($studentsQuery))
        {
        ?>
        <tr>
            <td>
                <?= $a++ ?>
            </td>
            <td>
                <?= $_student['name'] ?>
            </td>
            <td>
                <?= $_student['email'] ?>
            </td>
            <td>
                <?= $_student['phone'] ?>
            </td>
            <td>
                <?= $_student['gender'] ?>
            </td>
            <td>
                <?= $_student['fee'] ?>
            </td>
            <td>
                <?= $_student['address'] ?>
            </td>
            <td>
                <?= $_student['pin'] ?>
            </td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>