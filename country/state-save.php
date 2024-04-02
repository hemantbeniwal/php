<?php

require_once("country-config.php");

$data = $_POST;


$countryid = $data["country_id"];
$statename = $data["state_name"];
$statestatus = $data["state_status"];
$cityname = $data["city_name"];
$citystatus = $data["city_status"];

$insQuery= "INSERT INTO `states`(country_id, state_name, state_status) VALUES($countryid, '$statename', $statestatus)";

if($con->query($insQuery)){
    $_SESSION['success'] ='';
    header("location:state-list.php");
}
$stateid =$con->insert_id;
foreach($cityname as $key=> $ctname)
{ 
    $ctistatus = $citystatus[$key];
    $inssQuery= "INSERT INTO `cities`(country_id ,state_id,city_name,city_status) VALUES($countryid,$stateid,'$ctname',$ctistatus)";

        if($con->query($inssQuery)){
            header("location:state-list.php");
        };
}


?>