<?php

require_once("form-config.php");

$selQuery = "SELECT * FROM form";

$fromQuery = $con->query($selQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List form database</title>
</head>
<body>
    <a href="form-add.php">+ add more</a>
    <table border="1" cellspacing="0" align="100%">
        <tr>
            <th>Sr. No.</th>
            <th>id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>phone</th>
            <th>gender</th>
            <th>dob</th>
            <th>addresss</th>
            <th>city</th>
            <th>pincode</th>
            <th>state</th>
            <th>country</th>
            <th>hobbies</th>
            <th>qualification</th>
            <th>courses</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while($_form = mysqli_fetch_assoc($fromQuery))
        {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $_form['id'] ?></td>
                <td><?= $_form['first_name'] ?></td>
                <td><?= $_form['last_name'] ?></td>
                <td><?= $_form['email'] ?></td>
                <td><?= $_form['phone'] ?></td>
                <td><?= $_form['gender'] ?></td>
                <td><?= $_form['dob'] ?></td>
                <td><?= $_form['address'] ?></td>
                <td><?= $_form['city'] ?></td>
                <td><?= $_form['pincode'] ?></td>
                <td><?= $_form['state'] ?></td>
                <td><?= $_form['country'] ?></td>
                <td><?= $_form['hobbies'] ?></td>
                <td><?= $_form['qualification'] ?></td>
                <td><?= $_form['courses'] ?></td>
                <td>
                    <a href="">Edit</a>/
                    <a href="">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>
</html>