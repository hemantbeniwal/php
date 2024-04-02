<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;

	$selQuery = "SELECT* FROM `users` WHERE id=$id";
	$userrec = $conn->query($selQuery);
	
	$_users = mysqli_fetch_assoc($userrec);
	// dd($_users);


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Responsive Bootstrap Advance Admin Template</title>
	<?php include_once("includes/head.php"); ?>
</head>

<body>
	<div id="wrapper">
		<?php include_once("includes/nav-top.php"); ?>
		<?php include_once("includes/nav-side.php"); ?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">Edit user</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> <a href="user-list.php">User List</a> >> User Edit </span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
							<?php include_once("message.php");  ?>
								<form action="user-update.php" method="post">
									<input type="text" name="id" value="<?= $_users["id"] ?>">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" name="name" type="text" value="<?= $_users["name"] ?? "" ?>">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" name="email" type="email" value="<?= $_users["email"] ?? "" ?>">

									</div>
									<div class="form-group">
										<label>Phone No.</label>
										<input class="form-control" name="phone" type="tel" value="<?= $_users["phone"] ?? "" ?>">

									</div>
									<div class="form-group">
										<label>Select Gender</label>
										<div class="radio">
											<label>
												<input type="radio" name="gender" id="optionsRadios1" value="M" <?= (($_users["gender"] ?? NULL) == "M") ? "checked" : "" ?>>Male
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="gender" id="optionsRadios2" value="F" <?= (($_users["gender"] ?? NULL) == "F") ? "checked" : "" ?>>Female
											</label>
										</div>
										<div class="form-group">
											<label>Designation</label>
											<input class="form-control" name="designation" value="<?= $_users["designation"] ?? "" ?>">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" name="password" type="password" value="<?= $_users["password"] ?? "" ?>">

										</div>


										<button type="submit" class="btn btn-info">Update </button>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->

	<?php include_once("includes/footer.php"); ?>



</body>

</html>