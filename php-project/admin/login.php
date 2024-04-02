<?php

require_once("config.php");

$data = $_POST;

$email = $data['email'];
$password = md5($data['password']);

// dd($password);


$selQuery = "SELECT * FROM users WHERE email='$email' and password='$password'";
// dd($selQuery);
$userdata = $conn->query($selQuery);
// dd($userdata);

// header("location:dashboard.php");


if($userdata->num_rows) {
	$_getdata = mysqli_fetch_assoc($userdata);
	// dd($getdata);
	$userId =$_getdata['id'];
	$_SESSION['user_id'] = $_getdata['id'];
	$_SESSION['names'] = $_getdata['name'];
	$_SESSION['emails'] = $_getdata['email'];
	// dd($_SESSION['emails']);

	$insetQuery ="INSERT INTO `user_logs`(user_id)VALUES($userId)";
	$logdata = $conn->query($insetQuery);

	$_SESSION['success'] = "Logged in successfully....";
	header("location:dashboard.php");
} else {

	$_SESSION['error'] = "Invalid UserName or Password....";
	header("location:index.php");
}
?>