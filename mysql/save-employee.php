<?php

//  session_start();

require_once("config.php");


$data = $_POST;

$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$fee = $data["fee"];
$total_salary = $data["total_salary"];
$pin = $data["pin"];

$isError = false;

$_SESSION["name"] = $data["name"];
$_SESSION["email"] = $data["email"];
$_SESSION["phone"] = $data["phone"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["city"] = $data["city"];
$_SESSION["fee"] = $data["fee"];
$_SESSION["total_salary"] = $data["total_salary"];
$_SESSION["pin"] = $data["pin"];



if ($data["name"] == "") {
    $isError = true;
    $_SESSION["name_error"] = " Name is a required field";
}
if ($data["email"] == "") {
    $isError = true;
    $_SESSION["email_error"] = "email Name is a required field";
}
if ($data["phone"] == "") {
    $isError = true;
    $_SESSION["phone_error"] = "phone is a required field";
}
if ($data["gender"] == "") {
    $isError = true;
    $_SESSION["gender_error"] = "gender is a required field";
}
if ($data["city"] == "") {
    $isError = true;
    $_SESSION["city_error"] = "city is a required field";
}
if ($data["fee"] == "") {
    $isError = true;
    $_SESSION["fee_error"] = "fee is a required field";
}
if ($data["total_salary"] == "") {
    $isError = true;
    $_SESSION["total_salary_error"] = "total_salary is a required field";

}
if ($data["pin"] == "") {
    $isError = true;
    $_SESSION["pin_error"] = "pin is a required field";
}
if ($isError) {
    header("location: add-employee.php");
    exit(); 
}

// echo "<pre>";
// print_r($data);

$insrtQuery = "INSERT INTO `employee`(name,email,phone,gender,fee,total_salary,address,pin) 
value('$name','$email','$phone','$gender','$fee','$total_salary','$pin')";
if($con->query($insrtQuery))
{
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["phone"]);
    unset($_SESSION["gender"]);
    // unset($_SESSION["city"]);
    unset($_SESSION["pin"]);
    unset($_SESSION["fee"]);
    unset($_SESSION["total_salary"]);
    
    $_SESSION['success'] = "employee created success..";
    header("location: employee.php");
} else 
{
    $_SESSION['error'] = "something wrong...";
    header("location: add-employee.php");
}
?>