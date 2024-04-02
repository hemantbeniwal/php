<?php
require_once("student-config.php");


$data = $_POST;

$studentname = $data["student_name"];
$email = $data["emailid"];
$mobile = $data["mobile_number"];
$gender = $data["gender"];
$dob = $data["dob"];
$address = $data["address"];
$city = $data["city"];
$pincode = $data["pincode"];
$state = $data["state"];
$country = $data["country"];
$hobbies = implode(",", $data["hobbies"]??[]);
$qualification = implode(",", $data["qualification"]??[]);
$course = $data["course_applied"];

$isError = false;

$_SESSION["student_name"] = $studentname;
$_SESSION["emailid"] = $email;
$_SESSION["mobile_number"] = $mobile;
$_SESSION["gender"] = $gender;
$_SESSION["dob"] = $dob;
$_SESSION["address"] = $address;
$_SESSION["city"] = $city;
$_SESSION["pincode"] = $pincode;
$_SESSION["state"] = $state;
$_SESSION["country"] = $country;
$_SESSION["hobbies"] = $hobbies;
$_SESSION["qualification"] = $qualification;
$_SESSION["course_applied"] = $course;


if($studentname == "")
{
    $isError = true;
    $_SESSION["student_name_error"] = "Student name is a required field.";
}
if($email == "")
{
    $isError = true;
    $_SESSION["emailid_error"] = "Email is a required field.";
}
if($mobile == "")
{
    $isError = true;
    $_SESSION["mobile_number_error"] = "Mobile number is a required field.";
}
if($gender == "")
{
    $isError = true;
    $_SESSION["gender_error"] = "Gender is a required field.";
}
if($dob == "")
{
    $isError = true;
    $_SESSION["dob_error"] = "Date of birth is a required field.";
}
if($address == "")
{
    $isError = true;
    $_SESSION["address_error"] = "Address is a required field.";
}
if($city == "")
{
    $isError = true;
    $_SESSION["city_error"] = "City is a required field.";
}
if($pincode == "")
{
    $isError = true;
    $_SESSION["pincode_error"] = "Pin code is a required field.";
}
if($state == "")
{
    $isError = true;
    $_SESSION["state_error"] = "State is a required field.";
}
if($country == "")
{
    $isError = true;
    $_SESSION["country_error"] = "Country is a required field.";
}
if($hobbies == "")
{
    $isError = true;
    $_SESSION["hobbies_error"] = "Hobbies is a required field.";
}
if($qualification == "")
{
    $isError = true;
    $_SESSION["qualification_error"] = "Qualification is a required field.";
}
if($course == "")
{
    $isError = true;
    $_SESSION["course_applied_error"] = "Course is a required field.";
}

if($isError)
{
    header("location: student-add.php");
    exit();
}

// echo "<pre>";
// print_r($data);

$insQuery = "INSERT INTO `students`(student_name, emailid, mobile_number, gender, dob, address, city, pincode, state, country, hobbies, qualification, course_applied) value('$studentname', '$email', '$mobile', '$gender', '$dob', '$address', '$city', $pincode, '$state', '$country', '$hobbies', '$qualification', '$course')";

if($con->query($insQuery))
{
    unset($_SESSION["student_name"]);
    unset($_SESSION["emailid"]);
    unset($_SESSION["mobile_number"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["dob"]);
    unset($_SESSION["address"]);
    unset($_SESSION["city"]);
    unset($_SESSION["pincode"]);
    unset($_SESSION["state"]);
    unset($_SESSION["country"]);
    unset($_SESSION["hobbies"]);
    unset($_SESSION["qualification"]);
    unset($_SESSION["course_applied"]);


    $_SESSION["success"] = "Student record added successfully....";
    header("location:student-list.php");
}else{
    $_SESSION["error"] = "Something went wrong....";
    header("location:student-add.php");
}

?>




