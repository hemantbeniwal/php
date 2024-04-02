<?php
session_start();
$data =$_POST;
$isError = false;

echo "<pre>";
print_r($data);
$_SESSION["first name"]=$data["first name"];

if($data["first name"]==""){
    $isError =true;
    $_SESSION["first_name_error"]="first Name is a required field";
}
if ($isError) {
	header("location:.php");
}
?>