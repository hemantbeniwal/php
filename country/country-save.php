<?php

require_once("country-config.php");

$data = $_POST;


$country_name = $data["country_name"];
$status = $data["country_status"];

$state_name = $data["state_name"]??0;
// dd($state_name);
$state_status = $data["state_status"]??0;
// dd($state_status);

$insQuery= "INSERT INTO `countries`(country_name, country_status) VALUE('$country_name', $status)";
if($con->query($insQuery)){
    $_SESSION['success'] = "   ";
    header("location:country-list.php");

};
    $countryid =$con->insert_id;
    foreach($state_name as $key=> $stname)
    { 
        $sstatus = $state_status[$key];
        $inssQuery= "INSERT INTO `states`(country_id ,state_name,state_status) VALUE('$countryid', '$stname',$sstatus )";
    
        if($con->query($inssQuery)){
            header("location:country-list.php");
        };
    }
    



?>