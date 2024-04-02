<?php
require_once("config.php");

$data = $_POST;

$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$designation = $data["designation"];
$password = md5($data["password"]);
$canformPassword = md5($data["canform_password"]);

$_SESSION["email"] = $data["email"];
$_SESSION["names"] = $data["name"];
$_SESSION["phone"] = $data["phone"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["designation"] = $data["designation"];

$selectQu = "SELECT * FROM `users`where email='$email'";
$emsel = $conn->query($selectQu);

if (!$emsel->num_rows && ($password === $canformPassword)) {
	$insertQuery = "INSERT INTO `users`(name, email, phone, gender, designation, password) VALUES('$name','$email','$phone','$gender','$designation','$password')";
} else {
	$_SESSION["error"] = "Password did not match.....";
	header("location: user-add.php");
	exit();
}

if ($conn->query($insertQuery)) {

	$_SESSION["success"] = "User Added Successfully.....";
	header("location:user-list.php");

	unset($_SESSION["email"]);
	unset($_SESSION["names"]);
	unset($_SESSION["phone"]);
	unset($_SESSION["gender"]);
	unset($_SESSION["designation"]);
} else {
	$_SESSION["error"] = "Somthing Happing Wrong.....";
	header("location: user-add.php");
}
