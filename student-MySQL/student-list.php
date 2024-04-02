<?php

require_once("student-config.php");

$selQuery = "SELECT * FROM `students`";

$studentQuery = $con->query($selQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students list form database</title>
</head>
<body>
    <h3>Students List</h3>
    <a href="student-add.php">+ Add Student</a>
    <?php
        require_once("student-massage.php");
    ?>
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>Sr.No.</th>
            <th>studentid</th>
            <th>student_name</th>
            <th>emailid</th>
            <th>mobile_number</th>
            <th>gender</th>
            <th>dob</th>
            <th>address</th>
            <th>city</th>
            <th>pincode</th>
            <th>state</th>
            <th>country</th>
            <th>hobbies</th>
            <th>qualification</th>
            <th>course_applied</th>
            <th>Action</th>
        </tr>

        <?php

        $i=1;

        while ($_student = mysqli_fetch_assoc($studentQuery))
        {
            // dd($_student);
        ?>
            <tr align='center'>

                <td><?= $i++ ?></td>
                <td><?= $_student["studentid"] ?></td>
                <td><?= $_student["student_name"] ?></td>
                <td><?= $_student["emailid"] ?></td>
                <td><?= $_student["mobile_number"] ?></td>
                <td><?= $_student["gender"] ?></td>
                <td><?= $_student["dob"] ?></td>
                <td><?= $_student["address"] ?></td>
                <td><?= $_student["city"] ?></td>
                <td><?= $_student["pincode"] ?></td>
                <td><?= $_student["state"] ?></td>
                <td><?= $_student["country"] ?></td>
                <td><?= $_student["hobbies"] ?></td>
                <td><?= $_student["qualification"] ?></td>
                <td><?= $_student["course_applied"] ?></td>
                <td>
                    <a href="student-edit.php?studentid=<?= $_student['studentid'] ?>">Edit</a> /
                    <a href="student-delete.php?studentid=<?= $_student['studentid'] ?>" onclick="return confirm('Are you sure to delete this record.....')">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>
</html>