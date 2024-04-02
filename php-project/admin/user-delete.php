<?php

include_once("config.php");

$id=$_GET["id"];

$delQuery="DELETE FROM `users` WHERE id=$id";

$conn->query($delQuery);

$_SESSION["success"] = "Deleted Successfully.....";
	header("location:user-list.php"); 

?>