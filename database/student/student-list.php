<?php

require_once("config.php");

$stuQuery = "SELECT * FROM `tables`";
$studQuery = $con->query($stuQuery);
// echo $studQuery;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-list</title>
</head>

<body>
    <table border="1" cellspacing="0">
        <a href="student-add.php"></a>
        <tr>
            <th>Sr.no</th>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>phone</th>
            <th>address</th>
        </tr>
        <?php
        $a = 1;
        while ($_students = mysqli_fetch_assoc($studQuery)); { ?>

            <tr>
                <td>
                    <?= $a++; ?>
                </td>
                <td>
                    <?= $_students["name"]?? null ?>
                </td>
                <td>
                    <?= $_students["class"] ?>
                </td>
                <td>
                    <?= $_students["age"] ?>
                </td>
                <td>
                    <?= $_students["gender"] ?>
                </td>
                <td>
                    <?= $_students["fee"] ?>
                </td>
                <td>
                    <?= $_students["address"] ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>