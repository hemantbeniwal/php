<?php

require_once("country-config.php");

$data = $_POST;

$id = $data["country_id"];
// $countryid= $data["country_id"];
$stateid = $data["state_id"];
$statename = $data["state_name"];
$statestatus = $data["state_status"];

$cityname = $data["city_name"]??[];
$citystatus = $data["city_status"]?? [];
$cityid = $data["city_id"] ??[];
$ctyimpl = implode(",", $cityid);


$updQuery = "UPDATE `states` SET country_id=$id, state_name='$statename', state_status=$statestatus WHERE state_id=$id";
$con->query($updQuery);
// dd($updQuery) ;


if(empty($cityid)) {
	$dellQuery="DELETE FROM `cities` WHERE  state_id=$stateid";
	$con->query($dellQuery);
}else{
$delQuery="DELETE FROM `cities` WHERE city_id NOT IN($ctyimpl)And state_id=$cityid";
$con->query($delQuery);
}


foreach ($cityname as $key => $ctyName) {
	$ctyId = $cityid[$key] ?? 0;
	$ctyStatus = $citystatus[$key];

	if ($ctyId) {
		$cityUpdate = "UPDATE `cities` SET city_name='$ctyName', city_status=$ctyStatus WHERE city_id=$ctyId";
		// dd($cityUpdate);
		// die("");
		$con->query($cityUpdate);
	} else {
		$cityinst = "INSERT INTO `cities` (country_id, state_id, city_name, city_status ) VALUES ($id, $stateid, '$ctyName', $ctyStatus)";

		$con->query($cityinst);
	}
}


if ($stateid) {
	if ($con->query($updQuery)) {
		$_SESSION["success"] = "Record Update successfully..";
	} else {
		$_SESSION["error"] = "Something wrong...";
	}
} else {
	$_SESSION["error"] = "Id not found. please try again..";
}


header("location:state-list.php");


// $updQuery = "UPDATE `states` SET country_id=$id, state_name='$state_name', state_status=$state_status where state_id=$state_id";
// // dd($updQuery);
// // $con->query($updQuery);

// if ($con->query($updQuery)) {
//     $_SESSION["success"] = "Success....";
//     header("location:state-list.php");
// } else {
//     $_SESSION["error"] = "wrong....";
//     header("location:state-edit.php");
// }

// $citydelquery = "DELETE FROM `cities` where city_id NOT IN ($cityid) and state_id=$state_id";
// $con->query($citydelquery);
// // dd("$citydelquery");

// foreach ($city_name as $key => $ctname) {
//     $citid = $city_id[$key] ?? "";
//     $ctstatus = $city_status[$key];
//     // dd($ctstatus);

//     if ($citid) {
//         $ctupdQuery = "UPDATE `cities` SET contry_id=$id, state_id=$state_id, city_name='$ctname', city_status=$ctstatus where city_id=$citid";
//         $con->query($ctupdQuery);
//     } else {
//         $inscity = "INSERT INTO `cities`(country_id, state_id, city_name, city_status)VALUES ($id, $state_id,'$ctname', $ctstatus)";
//         $con->query($inscity);
//     }

// }


?>