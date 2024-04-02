<?php
require_once("config.php");

$data = $_POST;

// dd($_FILES);
date_default_timezone_set("Asia/Calcutta");

// date('Ymdhis');
$target_dir = "uploads/";
$imagBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);

$target_file = $target_dir.$imagBaseName;
// dd($imagBaseName);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
// dd($_FILES["image"]);
$identifier = $data["identifier"];
$title = $data["title"];
$heading = $data["heading"];
$description = $data["description"];
$ordering = $data["ordering"];
$status = $data["status"];
// dd($status);
$issetQuery = "INSERT INTO `blocks` (identifier,title, heading, banner_image,description, ordering, status) VALUES ('$identifier','$title', '$heading','$target_file', '$description','$ordering', '$status')";

$selData = $conn->query($issetQuery);
// dd($issetQuery);

header("location:block-list.php");
?>