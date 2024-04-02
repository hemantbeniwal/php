<?php
require_once("comfig.php");

$stuQuery = "SELECT * FROM `form`";

$studentsquery = $conn->query($stuQuery);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students-list</title>

</head>
<body>
    <h3>student list</h3>
    <a href="students-add.php">Add Record</a>

    
        <table border="1" cellspacing ="0">
                <tr>
                    <th>Sr.no</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Gender</th>
                    <th>Date of Birth(DOB)</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Pin code</th>
                    <th>state</th>
                    <th>Country</th>
                    <th>Hobbies</th>
                    <th>Qualification</th>
                    <th>Courses 
                        Applied For
                    </th>
                </tr>
                
                <?php
                $A= "1";
                while ($_students = mysqli_fetch_assoc($studentsquery)) {
                ?>
                <tr>
                    <td><?= $A++ ?></td>
                    <td><?= $_students['first_name'] ?></td>
                    <td><?= $_students['last_name'] ?></td>
                    <td><?= $_students['email'] ?></td>
                    <td><?= $_students['phone'] ?></td>
                    <td><?= $_students['gender'] ?></td>
                    <td><?= $_students['dob'] ?></td>
                    <td><?= $_students['address'] ?></td>
                    <td><?= $_students['city'] ?></td>
                    <td><?= $_students['state'] ?></td>
                    <td><?= $_students['country'] ?></td>
                    <td><?= $_students['hobbies'] ?></td>
                    <td><?= $_students['qualification'] ?></td>
                    <td><?= $_students['courses'] ?></td>
                    <td>
                        <a href="">Edit</a>/
                        <a href="">Delete</a>
                    </td>
                </tr>
                
                <?php }?>
        </table>
</body>
</html>