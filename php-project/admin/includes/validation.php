<?php
if (!(isset($_SESSION['names']) && isset($_SESSION['emails']))) {
	$_SESSION["error"] = "You have to login first....";
	header("location:index.php");
}
 ?>