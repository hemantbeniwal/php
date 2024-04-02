<?php

require_once("country-config.php");

$data = $_POST;

$id = $data["id"];

$state_id = $data["state_id"];
// $country_id = $data["country_id"];
$state_name = $data["state_name"];
$state_status = $data["state_status"];

$city_name = $data["city_name"]??[];
$city_status = $data["city_status"]?? [];
$city_id = $data["city_id"] ??[];
$cityid = implode(",",$data["cityid"]?? []);


$updQuery = "UPDATE `states` SET country_id=$id, state_name='$state_name', state_status=$state_status where state_id=$state_id";
// dd($updQuery);

if ($con->query($updQuery)) {
    $_SESSION["success"] = "Success....";
    header("location:state-list.php");
} else {
    $_SESSION["error"] = "wrong....";
    header("location:state-edit.php");
}

$citydelquery = "DELETE FROM `cities` where city_id NOT IN ($cityid) and state_id=$state_id";
$con->query($citydelquery);

foreach ($city_name as $key => $ctname) {
    $citid = $city_id[$key] ?? "";
    $ctstatus = $city_status[$key];
    // dd($ctstatus);

    if ($cityid) {
        $ctupdQuery = "UPDATE `cities` SET contry_id=$id, state_id=$state_id, city_name='$ctname', city_status=$ctstatus where city_id=$citid";

        $con->query($ctupdQuery);
    } else {
        $inscity = "INSERT INTO `cities`(country_id, state_id, city_name, city_status)VALUES ($id, $state_id,'$ctname', $ctstatus)";
        $con->query($inscity);
    }

}


?>





<?php

require_once("country-config.php");

$data = $_POST;

$id = $data['id'];

// $country_id = $data['country_id'];
$state_id = $data['state_id'];
$name_state = $data['state_name'];
$state_status = $data['state_status'];

// echo $state_status;
// die();

$cityid = $data['city_id']??[];
$city_name = $data["city_name"]??[];
$city_status = $data['city_status']??[]; 
// $city_id = implode(",", $data['cityid']?? []);

$updQuery = "UPDATE `states` SET country_id=$id, state_name='$name_state', state_status=$state_status WHERE state_id=$state_id";
if($con->query($updQuery))
{
	$_SESSION["success"] = "........";
	header("location:state-list.php");
}else{
	$_SESSION["error"] = ".....";
	header("location:state-edit.php");
}

foreach ($city_name as $key => $ctyName) {
	$ctyId = $cityid[$key] ?? 0;
	$ctyStatus = $city_status[$key];

	if ($ctyId) {
		$cityUpdate = "UPDATE `cities` SET city_name='$ctyName', city_status=$ctyStatus WHERE city_id=$ctyId";
		$con->query($cityUpdate);
	} else {
		$citUpdate = "INSERT INTO `cities` (country_id, state_id, city_name, city_status ) VALUES ($id, $state_id, '$ctyName', $ctyStatus)";

		$con->query($citUpdate);
	}
}


// if ($id) {
// 	if ($con->query($updQuery)) {
// 		$_SESSION["success"] = "Record Update successfully..";
// 	} else {
// 		$_SESSION["error"] = "Something wrong...";
// 	}
// } else {
// 	$_SESSION["error"] = "Id not found. please try again..";
// }


// header("location:state-list.php");

?>
<?php
require_once("country-config.php");


$seleQuery = "SELECT * FROM `countries`";
$countryQuery = $con->query($seleQuery);

$selQuery = "SELECT * FROM `states`";
$stateQuery = $con->query($selQuery);

$id = $_GET["city_id"] ?? "";

if ($id) {
    $selectQuery = "SELECT * FROM `cities` WHERE id=$id";
    $cityQuery = $con->query($selectQuery);
    if (!$cityQuery->num_rows) {
        $_SESSION["error"] = "Something Wrong With ID..";
        header("location:city-list.php");
        exit();
    }

    $_city = mysqli_fetch_assoc($cityQuery);
} else {
    $_SESSION["error"] = "Something Wrong ..";
    header("location:city-list.php");


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add city</title>
</head>

<body>
    <form action="city-update.php" method="post">
        <input type="hidden" name="city_id" value="<?= $_city["city_id"] ?>">
        <table cellpadding="5">
            <tr>
                <td>Country_Id</td>
                <td><select name="country_id">
                        <option value="">Country id</option>
                        <?php while ($_country = mysqli_fetch_assoc($countryQuery)) {
                            ?>
                            <option value="<?= $_country['id'] ?>" <?= ($_city['country_id'] == $_country['id']) ? "SELECTED" : null ?>>
                                <?= $_country['country_name'] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>states_Id</td>
                <td><select name="state_id">
                        <option value="">states id</option>
                        <?php while ($_states = mysqli_fetch_assoc($stateQuery)) {
                            ?>
                            <option value="<?= $_states['id'] ?>" <?= ($_city['state_id'] == $_states['id']) ? "selected" : ""?>>
                                <?= $_states['state_name'] ?>
                            </option>
                            <?php
                        }
                        ?>

                    </select></td>
            </tr>
            <tr>
                <td>city Name</td>
                <td><input type="text" name="city_name">
                </td>
            </tr>

            <tr>
                <td>status</td>
                <td>
                    <select name="status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <!-- <button type="reset">Reset</button> -->
                    <input type="submit" value="save">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>