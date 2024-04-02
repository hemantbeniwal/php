<?php
require_once("config.php");

$selQuery = "SELECT * FROM `employee`";
$employeeQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
</head>
<body>
<h3>employee list</h3>
<a href="add-employee.php">add employee</a>
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr.No</th>
            <th>name</th>
            <th>Phone</th>
            <th>email</th>
            <th>Gender</th>
            <!-- <th>city</th> -->
            <th>fee</th>
            <th>total salary</th>
            <th>pin</th>
            <th>action</th>

        </tr>
<?php
$a = 1;
while ($_employee = mysqli_fetch_assoc($employeeQuery))
{
?>
<tr>
    <td><?= $a++ ?></td>
    <td><?= $_employee['name']?></td>
    <td><?= $_employee['phone']?></td>
    <td><?= $_employee['email']?></td>
    <td><?= $_employee['Gender']?></td>
    <!-- <td><?= $_employee['city']?></td> -->
    <td><?= $_employee['fee']?></td>
    <td><?= $_employee['total salary']?></td>
    <td><?= $_employee['pin']?></td>
    <td>
        <a class="" href="">Edit</a>|
        <a href="" class="">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>