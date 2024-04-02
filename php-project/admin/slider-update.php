<?php
require_once("config.php");

$data=$_POST;

$id=$data['id']??0;

date_default_timezone_set("Asia/Calcutta");


$target_dir = "uploads/";
$imagBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);

$target_file = $target_dir.$imagBaseName;

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$title= $data["title"];
$ordering= $data["ordering"];
$status= $data["status"];
 $img=$_FILES["image"]["name"];

if($img) {
	$updQuery="UPDATE `sliders` SET title='$title',ordering='$ordering',status='$status',image='$target_file' WHERE id=$id";
} else {
	$updQuery="UPDATE `sliders` SET title='$title',ordering='$ordering',status='$status' WHERE id=$id";
}
// dd($updQuery);
if($conn->query($updQuery)){
	$_SESSION["success"] = "Data updated Successfully.....";
	header("location:slider-list.php");

	
}else{
	$_SESSION["error"]= "Error somthing happning worong...";
	header("location:slider-edit.php");
}
?>