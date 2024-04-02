<?php
require_once("config.php");

$data = $_POST;

// dd($_FILES);
date_default_timezone_set("Asia/Calcutta");

// date('Ymdhis');
$target_dir = "uploads/";
$imagBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);

$target_file = $target_dir.$imagBaseName;
// dd($target_file);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$title = $data["title"];
$ordering = $data["ordering"];
$status = $data["status"];

$issetQuery = "INSERT INTO `sliders` (title, ordering, status,image) VALUES ('$title', '$ordering', '$status', '$target_file')";

$selData = $conn->query($issetQuery);

header("location:slider-list.php");
?>