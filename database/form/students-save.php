<?php

require_once("comfig.php");

$data = $_POST;

$isError = false;

$first_name = $data["first_name"];
$last_name = $data["last_name"];
$email = $data["email"];
$phone = $data["phone_number"];
$gender = $data["gender"];
$dob = $data["dob"];
$address = $data["address"];
$city = $data["city"];
$pin_code = $data["pin_code"];
$state = $data["state"];
$country = $data["country"];
$hobbies = implode(",", $data["hobbies"]??[]);
$qualification = implode(",", $data["qualification"])??[];
$courses = $data["courses"];


$_SESSION["first_name"] = $data["first_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["phone_number"] = $data["phone_number"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["dob"] = $data["dob"];
$_SESSION["address"] = $data["address"];
$_SESSION["city"] = $data["city"];
$_SESSION["pin_code"] = $data["pin_code"];
$_SESSION["state"] = $data["state"];
$_SESSION["country"] = $data["country"];
$_SESSION["hobbies"] = $hobbies;

$_SESSION["qualification"] = $qualification;
$_SESSION["courses"] = $data["courses"];


if ($data["first_name"] == "") {
    $isError = true;
    $_SESSION["first_name_error"] = "first Name is a required field";
}
if ($data["last_name"] == "") {
    $isError = true;
    $_SESSION["last_name_error"] = "last Name is a required field";
}
if ($data["email"] == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is a required field";
}
if ($data["phone_number"] == "") {
    $isError = true;
    $_SESSION["phone_number_error"] = "phone is a required field";
}
if ($data["gender"] == "") {
    $isError = true;
    $_SESSION["gender_error"] = "gender is a required field";
}
if ($data["dob"] == "") {
    $isError = true;
    $_SESSION["dob_error"] = "DOB is a required field";
}
if ($data["address"] == "") {
    $isError = true;
    $_SESSION["address_error"] = "address is a required field";
}
if ($data["city"] == "") {
    $isError = true;
    $_SESSION["city_error"] = "city is a required field";
}
if ($data["pin_code"] == "") {
    $isError = true;
    $_SESSION["pin_code_error"] = "pin code is a required field";
}
if ($data["state"] == "") {
    $isError = true;
    $_SESSION["state_error"] = "state is a required field";
}
if ($data["country"] == "") {
    $isError = true;
    $_SESSION["country_error"] = "country is a required field";
}

if ($hobbies == "") {
    $isError = true;
    $_SESSION["hobbies_error"] = "hobbies is a required field";
}
if ($qualification == "") {
    $isError = true;
    $_SESSION["qualification_error"] = "qualification is a required field";
}
if ($data["courses"] == "") {
    $isError = true;
    $_SESSION["courses_error"] = "courses is a required field";
}

if ($isError) {
    header("location:students-add.php");
    exit();
}

$insrtQuery = "INSERT INTO `form`(first_name, last_name, email, phone, gender, dob, address, city, pin_code, state, country, hobbies, qualification, courses) VALUE('$first_name', '$last_name','$email', '$phone', '$gender', '$dob', '$address', '$city', $pin_code, '$state', '$country', '$hobbies', '$qualification', '$courses')";

if ($conn->query($insrtQuery)) {


    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["phone_number"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["dob"]);
    unset($_SESSION["address"]);
    unset($_SESSION["city"]);
    unset($_SESSION["pin_code"]);
    unset($_SESSION["state"]);
    unset($_SESSION["country"]);
    unset($_SESSION["hobbies"]);
    unset($_SESSION["qualification"]);
    unset($_SESSION["courses"]);

    $_SESSION['success'] = "student creted success....";
    
} else {
    $_SESSION['error'] = "student creted error....";

}
header("location:students-list.php");