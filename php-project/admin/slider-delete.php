<?php

include_once("config.php");

$id=$_GET["id"];

$delQuery="DELETE FROM `sliders` WHERE id=$id";

$conn->query($delQuery);

$_SESSION["success"] = "Deleted Successfully.....";
	header("location:slider-list.php"); 

?>