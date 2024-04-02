<?php
require_once("admin/config.php");

$data =$_POST;

$name =$data["name"];
$email =$data["email"];
$phone =$data["phone"];
$Message =$data["Message"];

$insetQuery ="INSERT INTO `enquiries`(name, email, phone, Message) VALUES ('$name', '$email', '$phone', '$Message')";
$conn->query($insetQuery);

header("location:contact.php")

?>