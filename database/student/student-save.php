<?php

require_once("config.php");



$isError = false;

$name = $data["name"];
$email = $data["email"];
$gender = $data["gender"];
$phone = $data["phone"];
$address = $data["address"];

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["gender"] = $gender;
$_SESSION["phone"] = $phone;
$_SESSION["address"] = $address;

if ($name == "") {
    $isError = true;
    $_SESSION["name_error"] = " Name is a required field";
}
if ($email == "") {
    $isError = true;
    $_SESSION["email_error"] = " Email is a required field";
}
if ($gender == "") {
    $isError = true;
    $_SESSION["gender_error"] = " gender is a required field";
}
if ($phone == "") {
    $isError = true;
    $_SESSION["phone_error"] = " phone is a required field";
}
if($address == ""){
    $isError = true;
    $_SESSION["address_error"] = "address is a required fild";
 }
if($isError){
    header("location: student-add.php");
    exit();
}

$insrtQuery="INSERT INTO `student`(name ,email,gender,phone,address)value('$name','$email','$gender','$phone','$address')";
if($con->query($insrtQuery)){

    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["phone"]);
    unset($_SESSION["address"]);
    $_SESSION['success'] = "student creted success....";
    header("location: student-list.php");
}else{

//$con->query($insrtQuery);
header("location:student-list.php");
}
?>