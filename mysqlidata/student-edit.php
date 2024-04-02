<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;

if ($id) {
	$setQuery = "SELECT * FROM `student-list` WHERE id=$id";
	$studrecd = $con->query($setQuery);
	if (!$studrecd->num_rows) {
		$_SESSION["error"] = "Something Wrong With ID..";
		header("location:student-form.php");
		exit();
	}
	$_student = mysqli_fetch_assoc($studrecd);
} else {
	$_SESSION["error"] = "Something Wrong ..";
	header("location:student-form.php");
	exit();
}

// dd($_student);
?>
<!DOCTYPe html>
<html>

<head>

	<title>Edit page</title>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=divice-width,initial-scale=1.0"> -->
	<script src="js//code.jquery.com_jquery-3.7.1.min.js"></script>

	<style>
		form {
			background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
			border: 2px dashed black;
			/* text-align: right; */
		}

		.error {
			color: red;
		}

		.red-border {
			border-color: red;
		}

		.green-border {
			border-color: green;
		}
	</style>

</head>

<body>
	<h2>Update Data</h2>
	<!-- <button class="btn" id="button">click me</button> -->
	<form action="student-update.php" method="post" id="my_form" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_student["id"] ?>">
		<table cellpadding="10">
			<br>
			<tr>
				<td>First Name: <span style="color:red;">*</span></td>
				<td><input type="name" name="first_name" id="first_name" maxlength="50"
						value="<?php echo $_student["first_name"] ?? "" ?>">(Max 50 Characters Allowed)
					<?php if (isset($_SESSION["first_name_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["first_name_error"];
							unset($_SESSION["first_name_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Last Name<span style="color:red;">*</span></td>
				<td><input type="name" name="last_name" id="last_name" maxlength="50"
						value="<?= $_student["last_name"] ?? "" ?>">(Max
					50 Characters Allowed)
					<?php if (isset($_SESSION["last_name_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["last_name_error"];
							unset($_SESSION["last_name_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Email ID <span style="color:red;">*</span></td>
				<td><input type="email" name="email" id="email" value="<?= $_student["email"] ?? "" ?>">
					<?php if (isset($_SESSION["email_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["email_error"];
							unset($_SESSION["email_error"]);
							?>
						</span>
					<?php } ?>

				</td>
			</tr>
			<tr>
				<td>Mobile Number <span style="color:red;">*</span></td>
				<td><input type="tel" name="mobile_number" id="mobile_number"
						value="<?= $_student["mobile_number"] ?? "" ?>" maxlength="10">(Max 10 Digits Allowed)
					<?php if (isset($_SESSION["mobile_number_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["mobile_number_error"];
							unset($_SESSION["mobile_number_error"]);
							?>
						</span>
					<?php } ?>

				</td>
			</tr>
			<tr>
				<td>Gender<span style="color:red;">*</span></td>
				<td><input type="radio" name="gender" value="M" <?= (($_student["gender"] ?? NULL) == "M") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
					<input type="radio" name="gender" value="F" <?= (($_student["gender"] ?? NULL) == "F") ? "checked" : "" ?> />Female
					<?php if (isset($_SESSION["gender_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["gender_error"];
							unset($_SESSION["gender_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Date Of Birth<span style="color:red;">*</span></td>
				<td><input type="date" name="date_of_birth" id="date_of_birth"
						value="<?= $_student["date_of_birth"] ?? "" ?>">
				</td>
				<?php if (isset($_SESSION["date_of_birth_error"])) { ?>
					<span class="error">
						<?php
						echo $_SESSION["date_of_birth_error"];
						unset($_SESSION["date_of_birth_error"]);
						?>
					</span>
				<?php } ?>


			</tr>
			<tr>
				<td>Address<span style="color:red;">*</span></td>
				<td><textarea name="address" id="address" rows="5"
						cols="20"><?= $_student["address"] ?? "" ?></textarea>
					<?php if (isset($_SESSION["address_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["address_error"];
							unset($_SESSION["address_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>City<span style="color:red;">*</span></td>
				<td><input type="name" name="city" id="city" maxlength="50" value="<?= $_student["city"] ?? "" ?>">(Max
					50
					Characters Allowed)
					<?php if (isset($_SESSION["city_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["city_error"];
							unset($_SESSION["city_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Pin Code<span style="color:red;">*</span> </td>
				<td><input type="number" name="pin_code" id="pin_code" value="<?= $_student["pin_code"] ?? "" ?>"
						maxlength="6">
					<!-- (Max 6 Digits	Allowed) -->
					<?php if (isset($_SESSION["pin_code_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["pin_code_error"];
							unset($_SESSION["pin_code_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>State <span style="color:red;">*</span></td>
				<td><input type="name" name="state" id="state" maxlength="50"
						value="<?= $_student["state"] ?? "" ?>">(Max 50
					Characters Allowed)
					<?php if (isset($_SESSION["state_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["state_error"];
							unset($_SESSION["state_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Country <span style="color:red;">*</span></td>
				<td><input type="name" id="country" name="country" value="<?= $_student["country"] ?? "" ?>">
					<?php if (isset($_SESSION["country_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["country_error"];
							unset($_SESSION["country_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Hobbies</td>
				<td>
					<?php $hobbies = explode(",", $_student['hobbies']) ?>
					<input type="checkbox" name="hobbies[]" id="hob1" value="drowing" <?= (in_array("drowing", $hobbies ?? [])) ? "checked" : ""; ?>>Drowing
					<input type="checkbox" name="hobbies[]" id="hob2" value="singing" <?= (in_array("singing", $hobbies ?? [])) ? "checked" : ""; ?>>Singing
					<input type="checkbox" name="hobbies[]" id="hob3" value="dancing" <?= (in_array("dancing", $hobbies ?? [])) ? "checked" : ""; ?>>Dancing
					<input type="checkbox" name="hobbies[]" id="hob4" value="sketching" <?= (in_array("sketching", $hobbies ?? [])) ? "checked" : ""; ?>>Sketching<br>
					<input type="checkbox" name="other_hobbies" id="hob5" value="other" <?= (in_array("other", $hobbies ?? [])) ? "checked" : ""; ?>>other
					<input type="text" name="other_hobbies" value="<?= $_student["other_hobbies"] ?? "" ?>"
						maxlength="50" placeholder="Ex-Teaching">(Max 50 Characters Allowed)
					<?php if (isset($_SESSION["hobbies_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["hobbies_error"];
							unset($_SESSION["hobbies_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td>
					<?php $qualification = explode(",", $_student['qualification']) ?>
					<input type="checkbox" name="qualification[]" value="high_school(10th)"
						<?= (in_array("high_school(10th)", ($qualification ?? []))) ? "checked" : ""; ?>>High
					School(10th)<br>
					<input type="checkbox" name="qualification[]" value="high_school(12th)"
						<?= (in_array("high_school(12th)", ($qualification ?? []))) ? "checked" : ""; ?>>High
					School(12th)<br>
					<input type="checkbox" name="qualification[]" value="graduation(bachelors)"
						<?= (in_array("graduation(bachelors)", ($qualification ?? []))) ? "checked" : ""; ?>>Graduation(Bachelors)<br>
					<input type="checkbox" name="qualification[]" value="post_graduation(masters)"
						<?= (in_array("post_graduation(masters)", ($qualification ?? []))) ? "checked" : ""; ?>>Post
					Graduation(Masters)<br>
					<input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd", ($qualification ?? []))) ? "checked" : ""; ?>>Phd

					<?php if (isset($_SESSION["qualification_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["qualification_error"];
							unset($_SESSION["qualification_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Courses Applied For</td>

				<td>
					<input type="radio" name="course" value="bca" <?= (($_student["course"] ?? NULL) == "bca") ? "checked" : "" ?>>BCA(Bachelor of Computer Applications)<br>
					<input type="radio" name="course" value="bcom" <?= (($_student["course"] ?? NULL) == "bcom") ? "checked" : "" ?>>B.Com(Bachelor of Commerce)<br>
					<input type="radio" name="course" value="bsc" <?= (($_student["course"] ?? NULL) == "bsc") ? "checked" : "" ?>>B.Sc(Bachelore of Science)<br>
					<input type="radio" name="course" value="ba" <?= (($_student["course"] ?? NULL) == "ba") ? "checked" : "" ?>> BA(Bachelor of Arts)<br>
					<input type="radio" name="course" value="mca" <?= (($_student["course"] ?? NULL) == "mca") ? "checked" : "" ?>>MCA(Master of Computer Applications)<br>
					<input type="radio" name="course" value="mcom" <?= (($_student["course"] ?? NULL) == "mcom") ? "checked" : "" ?>>M.Com(Master of Commerce)<br>
					<input type="radio" name="course" value="msc" <?= (($_student["course"] ?? NULL) == "msc") ? "checked" : "" ?>>M.Sc(Master of Science)<br>
					<input type="radio" name="course" value="ma" <?= (($_student["course"] ?? NULL) == "ma") ? "checked" : "" ?>>MA(Master of Arts)


					<?php if (isset($_SESSION["course_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["course_error"];
							unset($_SESSION["course_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Update</button>
				</td>
			</tr>
		</table>
	</form>

</body>

</html>