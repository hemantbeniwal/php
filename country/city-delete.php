<?php
require_once("country-config.php");

$cityid = $_GET['city_id'];
// echo $id;
// die();
if($cityid){
$deleQuery = "DELETE FROM `cities` WHERE city_id = $cityid";
if($con->query($deleQuery)){
    $_SESSION["success"] = "Record Deleted Successfully...";
}else{
    $_SESSION["error"] = "Somthing Wrong...";
}
}else{
$_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}
header("location: city-list.php");

?>