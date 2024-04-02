<?php

include_once("config.php");

$id=$_GET["id"];

$delQuery="DELETE FROM `pages` WHERE id=$id";

$conn->query($delQuery);

$_SESSION["success"] = "Deleted Successfully.....";
	header("location:page-list.php"); 

?>