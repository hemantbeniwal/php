<?php 
require_once("config.php");
$id = $_GET['sch_id']??0;

$selQuery = "SELECT * FROM `student` where id=$id";

$stData = $con->query($selQuery);

// dd($stData)
echo json_encode(mysqli_fetch_assoc($stData));

?>