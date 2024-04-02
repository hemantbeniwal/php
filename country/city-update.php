<?php

require_once("country-config.php");

$data = $_POST;

$id = $data["city_id"];

$countryid = $data['country_id'];
$stateid = $data["state_id"];

$cityname = $data["city_name"];
$status = $data["city_status"];

 $updQuery= "UPDATE `cities` SET country_id=$countryid, state_id=$stateid, city_name='$cityname', city_status=$status where city_id=$id";
// dd($updQuery);
 $con->query($updQuery);

 header("location:city-list.php");
 

// if($con->query($updQuery))
// {
//     $_SESSION["success"] = "Success....";
//     header("location:city-list.php");
// }else
// {
//     $_SESSION["error"] = "wrong....";
//     header("location:city-edit.php");
// }

?>