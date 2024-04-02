<?php
require_once("config.php");

$data = $_POST;

$id=$data['id']??0;

$name= $data["name"];
$email= $data["email"];
$phone= $data["phone"];
$gender= $data["gender"];
$designation= $data["designation"];
$password = md5($data["password"]);
// dd($id);

if($password) {
	$updQuery="UPDATE `users` SET name='$name',email='$email',phone='$phone',gender='$gender',designation='$designation',password='$password' WHERE id=$id";
} else {
	$updQuery="UPDATE `users` SET name='$name',email='$email',phone='$phone',gender='$gender',designation='$designation' WHERE id=$id";
}

if($conn->query($updQuery)){
	$_SESSION["success"] = "Data updated Successfully.....";
	header("location:user-list.php");

	
}else{
	$_SESSION["error"]= "Error somthing happning worong...";
	header("location:user-edit.php");
}
?>