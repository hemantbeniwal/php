<?php
require_once("config.php");

$selQuery = "SELECT * FROM `student-list`";
$studentQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student List</title>
</head>

<body>
	<h2>Student List</h2>

	<?php require_once("message.php"); ?>
	<a href="Student-add.php">Add Student</a>
	<table border="1px" cellspacing="0">
		<tr>
			<th>Sr.No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Mobile No.</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Address</th>
			<th>City</th>
			<th>Pin Code</th>
			<th>State</th>
			<th>Country</th>
			<th>Hobbies</th>
			<th>Other Hobbies</th>
			<th>Qualification</th>
			<th>Course</th>
			<th colspan="2">Action</th>

		</tr>
		<?php
		if ($studentQuery->num_rows) {
			$i = 1;
			while ($_student = mysqli_fetch_assoc($studentQuery)) {

				?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $_student['first_name'] ?></td>
					<td><?= $_student['last_name'] ?></td>
					<td><?= $_student['email'] ?></td>
					<td><?= $_student['mobile_number'] ?></td>
					<td><?= $_student['gender'] ?></td>
					<td><?= $_student['date_of_birth'] ?></td>
					<td><?= $_student['address'] ?></td>
					<td><?= $_student['city'] ?></td>
					<td><?= $_student['pin_code'] ?></td>
					<td><?= $_student['state'] ?></td>
					<td><?= $_student['country'] ?></td>
					<td><?= $_student['hobbies'] ?></td>
					<td><?= $_student['other_hobbies'] ?></td>
					<td><?= $_student['qualification'] ?></td>
					<td><?= $_student['course'] ?></td>
					<td>
						<a href="student-edit.php?id=<?= $_student['id'] ?>">Edit</a>
					</td>
					<td><a href="student-delete.php?id=<?= $_student['id']?>">Delete</a>
					</td>
				</tr>
				<?php
			}
		} else {
			?>
			<tr>
				<td colspan="17" align="center"> No Data Found...</td>
			</tr>
		<?php
		}
		?>


	</table>
</body>

</html>