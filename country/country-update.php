<?php

require_once("country-config.php");

$data = $_POST;


 $id = $data["id"];
 
$country_name = $data["country_name"];
$country_status = $data["country_status"];
$state_name =$data["state_name"];
$state_status = $data["state_status"];
$state_id = $data["state_id"]??[];
$stId = implode(",",$state_id);

$updQuery= "UPDATE `countries` SET country_name='$country_name', country_status=$country_status where id=$id";

$con->query($updQuery);
$delQuery ="DELETE FROM `states` where state_id not in ($stId) and country_id = $id";
$con->query($delQuery);



foreach ($state_name as $key => $stname){
    $stateid = $state_id[$key]??"";
    $ststatus = $state_status[$key];
    
    if($stateid){
        $stupdQuery = "UPDATE `states` SET state_name='$stname', state_status=$ststatus where state_id=$stateid";
        $con->query($stupdQuery);
       
    }else{
        $insState = "INSERT INTO `states`(state_name, state_status, country_id)VALUES ('$stname', $ststatus, $id)";
        $con->query($insState);
    }
// $stupdate = "UPDATE `states` SET";
}
if($con->query($updQuery))
{
    $_SESSION["success"] = "Success....";
    header("location:country-list.php");

}else
    {
        $_SESSION["error"] = "wrong....";
        header("location:country-edit.php");
    }

?>