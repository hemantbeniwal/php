<?php
require_once("config.php");
$data = $_POST;

$id = $data["id"];

$name = $data["name"];
$email = $data["email"];
$gender = $data["gender"];
$phone = $data["phone"];
$address = $data["address"];

$updQuery = "UPDATE student SET name = '$name', email='$email',gender='$gender',phone='$phone', address= '$address' where id=$id";
// $updQuery =  "UPDATE `student` SET `name`='$name',`email`='$email',`gender`='$gender',`phone`='$phone',`address`='$address' WHERE `id`=$id";
if($con->query($updQuery)){
    $_SESSION['success']="Recored update success..";

}else{$_SESSION['error']="Error..";
}
header("location: student-list.php");
?>