<?php
require_once("country-config.php");

$data = $_POST;

$country_id = $data["country_id"];
$state_id = $data["state_id"];
$city_name = $data["city_name"];
$city_status = $data["city_status"];

$cityQuery = "INSERT INTO `cities`(country_id, state_id, city_name, city_status) VALUE($country_id, $state_id,'$city_name', $city_status)";
$con->query($cityQuery);
// dd($cityQuery);


header("location:city-list.php");

?>