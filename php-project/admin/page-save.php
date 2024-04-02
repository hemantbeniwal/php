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
// dd($_FILES["image"]);
$title = $data["title"];
$heading = $data["heading"];
$description = $data["description"];
$ordering = $data["ordering"];
$status = $data["status"];
// $url_key = $data["url_key"];
$titles = preg_replace("/[^a-zA-Z]/", "", $title);
$url_key =strtolower($titles);

$issetQuery = "INSERT INTO `pages` (title, heading, description, banner_image, ordering, status,url_key) VALUES ('$title', '$heading', '$description', '$target_file', '$ordering', '$status', '$url_key')";

$selData = $conn->query($issetQuery);

header("location:page-list.php");
?>