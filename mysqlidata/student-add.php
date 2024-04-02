<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html>

<head>

	<title>form page</title>
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
	<!-- <button class="btn" id="button">click me</button> -->
	<form action="student-save.php" method="post" id="my_form" enctype="multipart/form-data">

		<table cellpadding="10">
			<br>
			<tr>
				<td>First Name: <span style="color:red;">*</span></td>
				<td><input type="name" name="first_name" id="first_name" maxlength="50"
						value="<?php echo $_SESSION["first_name"] ?? "" ?>">(Max 50 Characters Allowed)
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
						value="<?= $_SESSION["last_name"] ?? "" ?>">(Max
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
				<td><input type="email" name="email" id="email" value="<?= $_SESSION["email"] ?? "" ?>">
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
						value="<?= $_SESSION["mobile_number"] ?? "" ?>" maxlength="10">(Max 10 Digits Allowed)
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
				<td><input type="radio" name="gender" value="M" <?= (($_SESSION["gender"] ?? NULL) == "M") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
					<input type="radio" name="gender" value="F" <?= (($_SESSION["gender"] ?? NULL) == "F") ? "checked" : "" ?> />Female
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
				<td><input type="date" name="date_of_birth" id="date_of_birth" value="<?= $_SESSION["date_of_birth"] ?? "" ?>">
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
						cols="20"><?= $_SESSION["address"] ?? "" ?></textarea>
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
				<td><input type="name" name="city" id="city" maxlength="50" value="<?= $_SESSION["city"] ?? "" ?>">(Max
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
				<td><input type="number" name="pin_code" id="pin_code" value="<?= $_SESSION["pin_code"] ?? "" ?>"
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
						value="<?= $_SESSION["state"] ?? "" ?>">(Max 50
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
				<td><input type="name" id="country" name="country" value="<?= $_SESSION["country"] ?? "" ?>">
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
					<input type="checkbox" name="hobbies[]" id="hob1" value="drowing" <?= (in_array("drowing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Drowing
					<input type="checkbox" name="hobbies[]" id="hob2" value="singing" <?= (in_array("singing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Singing
					<input type="checkbox" name="hobbies[]" id="hob3" value="dancing" <?= (in_array("dancing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Dancing
					<input type="checkbox" name="hobbies[]" id="hob4" value="sketching" <?= (in_array("sketching", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Sketching<br>
					<input type="checkbox" name="other_hobbies" id="hob5" value="other" <?= (in_array("other", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>other
					<input type="text" name="other_hobbies" value="<?= $_SESSION["other_hobbies"] ?? "" ?>"
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
					<input type="checkbox" name="qualification[]" value="high_school(10th)"
						<?= (in_array("high_school(10th)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>High
					School(10th)<br>
					<input type="checkbox" name="qualification[]" value="high_school(12th)"
						<?= (in_array("high_school(12th)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>High
					School(12th)<br>
					<input type="checkbox" name="qualification[]" value="graduation(bachelors)"
						<?= (in_array("graduation(bachelors)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Graduation(Bachelors)<br>
					<input type="checkbox" name="qualification[]" value="post_graduation(masters)"
						<?= (in_array("post_graduation(masters)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Post
					Graduation(Masters)<br>
					<input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Phd

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
				<td><input type="radio" name="course" value="bca" <?= (($_SESSION["course"] ?? NULL) == "bca") ? "checked" : "" ?>>BCA(Bachelor of Computer Applications)<br>
					<input type="radio" name="course" value="bcom" <?= (($_SESSION["course"] ?? NULL) == "bcom") ? "checked" : "" ?>>B.Com(Bachelor of Commerce)<br>
					<input type="radio" name="course" value="bsc" <?= (($_SESSION["course"] ?? NULL) == "bsc") ? "checked" : "" ?>>B.Sc(Bachelore of Science)<br>
					<input type="radio" name="course" value="ba" <?= (($_SESSION["course"] ?? NULL) == "ba") ? "checked" : "" ?>> BA(Bachelor of Arts)<br>
					<input type="radio" name="course" value="mca" <?= (($_SESSION["course"] ?? NULL) == "mca") ? "checked" : "" ?>>MCA(Master of Computer Applications)<br>
					<input type="radio" name="course" value="mcom" <?= (($_SESSION["course"] ?? NULL) == "mcom") ? "checked" : "" ?>>M.Com(Master of Commerce)<br>
					<input type="radio" name="course" value="msc" <?= (($_SESSION["course"] ?? NULL) == "msc") ? "checked" : "" ?>>M.Sc(Master of Science)<br>
					<input type="radio" name="course" value="ma" <?= (($_SESSION["course"] ?? NULL) == "ma") ? "checked" : "" ?>>MA(Master of Arts)

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
				<td><button type="reset">Reset</button>&nbsp;
					<button type="submit">submit</button>
				</td>
			</tr>
		</table>
	</form>

	<script>
		$(document).ready(function () {

			$("#my_form").submit(function (e) {

				form1 = $("#first_name").val();
				form2 = $("#last_name").val();
				form3 = $("#email").val();
				form4 = $("#mobile_number").val();
				form5 = $("#address").val();
				form6 = $("#city").val();
				form7 = $("#pin_code").val();
				form8 = $("#state").val();
				form9 = $("#country").val();

				iserror = false;

				if (form1 == "") {
					iserror = true;
					$("#first_name").addClass("red-border");
				}
				if (form2 == "") {
					iserror = true;
					$("#last_name").addClass("red-border");
				}
				if (form3 == "") {
					iserror = true;
					$("#email").addClass("red-border");
				}
				if (form4 == "") {
					iserror = true;
					$("#mobile_number").addClass("red-border");
				}
				if (form5 == "") {
					iserror = true;
					$("#address").addClass("red-border");
				}
				if (form6 == "") {
					iserror = true;
					$("#city").addClass("red-border");
				}
				if (form7 == "") {
					iserror = true;
					$("#pin_code").addClass("red-border");
				}
				if (form8 == "") {
					iserror = true;
					$("#state").addClass("red-border");
				}
				if (form9 == "") {
					iserror = true;
					$("#country").addClass("red-border");
				} if (iserror) {
					e.preventDefault();
				}
			});
			$('form').validate({


				errorPlacement: function (error, element) {
					if (element.attr("type") == "radio") {
						error.insertBefore(element);
					} else {
						error.insertAfter(element);
					}
				}

			});


		});
		$(document).ready(function () {
			$("input").focus(function () {
				$(this).css({ "background-color": "yellow" });
			});
			$("input").blur(function () {
				$(this).css("background-color", "green");
			});
		});
	</script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>