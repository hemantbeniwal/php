<?php
require_once("country-config.php");

$selQuery = "SELECT * FROM `countries`";
$countryData = $con->query($selQuery);
$selQueryy = "SELECT * FROM `states`";
$StateData = $con->query($selQueryy);

$id = $_GET['city_id'] ?? 0;
// dd($id);

$setQuery = "SELECT * FROM `cities` WHERE city_id=$id";
$cityrecd = $con->query($setQuery);

$_city = mysqli_fetch_assoc($cityrecd);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Add City</title>
</head>

<body>
	<form action="city-update.php" method="post">
	<input type="hidden" name="city_id" value="<?= $_city["city_id"] ?>">


		<table>
			<tr></tr>
			<tr>
				<td>Country:</td>
				<td><select name="country_id">
						<?php while ($_country = mysqli_fetch_assoc($countryData)) { ?>
							<option value="<?= $_country['id'] ?>" <?= ($_country['id'] == $_city['country_id']) ? "selected" : "" ?>>
								<?= $_country['country_name'] ?>
							</option>
							<?php
						} ?>
					</select>
                </td>
			<tr>

				<td>State:</td>
				<td><select name="state_id">
						<?php while ($_state = mysqli_fetch_assoc($StateData)) { ?>
							<option value="<?= $_state['state_id'] ?>" <?= ($_state['state_id'] == $_city['state_id']) ? "selected" : "" ?>>
								<?= $_state['state_name'] ?>
							</option>
							<?php
						} ?>
					</select><br></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="city_name" name="city_name" value="<?= $_city['city_name'] ?>"><br></td>
			</tr>
			<tr>
				<td>Status:</td>
				<td>
					<select name="city_status">
						<option value="1"  <?= ($_city["city_status"] == "1") ? "selected" : "" ?>>Enable</option>
						<option value="2"  <?= ($_city["city_status"] == "2 ") ? "selected" : "" ?>>Disable</option>
					</select>
				</td>

			</tr>
			<tr>
				<td></td>
				<td><button name="submit">Save</button></td>
			</tr>

		</table>

	</form>

</body>

</html>


