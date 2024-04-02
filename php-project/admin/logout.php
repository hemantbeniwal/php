<?php
session_start();

unset($_SESSION['names']) ;
unset($_SESSION['emails']) ;

$_SESSION["error"] = "Logout sucessfully....";
	header("location:index.php");

?>