<?php
require_once("config.php");

$data = $_POST;


$id = $data["edit_id"];
$first_name = $data["first_name"];
$last_name = $data["last_name"];
$email = $data["email"];
$phone = $data["phone"];

// dd($id);
if ($id) {
     $updateQuery = "UPDATE `student` SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone' WHERE id=$id";

     $con->query($updateQuery);
     // dd($updateQuery);

} else {
     $insertQuery = "INSERT INTO `student` (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
     $con->query($insertQuery);
}


?>