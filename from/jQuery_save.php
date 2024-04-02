<?php

session_start();

$data = $_POST;


$isError = false;

$_SESSION["first_name"] = $data["first_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["mobile_number"] = $data["mobile_number"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["dob_day"] = $data["dob_day"];
$_SESSION["dob_month"] = $data["dob_month"];
$_SESSION["dob_year"] = $data["dob_year"];
$_SESSION["address"] = $data["address"];
$_SESSION["city"] = $data["city"];
$_SESSION["pin_code"] = $data["pin_code"];
$_SESSION["state"] = $data["state"];
$_SESSION["country"] = $data["country"];
$_SESSION["hobbies"] = $data["hobbies"];
$_SESSION["other_hobbies"] = $data["other_hobbies"];
$_SESSION["qualification"] = $data["qualification"];
$_SESSION["course"] = $data["course"];



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
if ($data["mobile_number"] == "") {
    $isError = true;
    $_SESSION["mobile_number_error"] = "mobile is a required field";
}
if ($data["gender"] == "") {
    $isError = true;
    $_SESSION["gender_error"] = "gender is a required field";
}
if (!(($data["dob_day"]) && ($data["dob_month"]) && ($data["dob_year"])) )
{
    $isError = true;
    $_SESSION["dob_year_error"] = "DOB is a required field";
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

if ($data["hobbies"] == "") {
    $isError = true;
    $_SESSION["hobbies_error"] = "hobbies is a required field";
}
if ($data["hobbies"] == "") {
    $isError = true;
    $_SESSION["other_hobbies_error"] = "other hobbies is a required field";
}
if ($data["qualification"] == "") {
    $isError = true;
    $_SESSION["qualification_error"] = "qualification is a required field";
}
if ($data["course"] == "") {
    $isError = true;
    $_SESSION["course_error"] = "course is a required field";
 }

if ($isError) {
    header("location:jQuery.php");
};

echo "<pre>";
print_r($data);

?>