<?php
require_once("config.php");

$data = $_POST;

$id = $data['id'] ?? 0;

date_default_timezone_set("Asia/Calcutta");


$target_dir = "uploads/";
$imagBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);

$target_file = $target_dir.$imagBaseName;

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$title = $data["title"];
$heading = $data["heading"];
$description = $data["description"];
$ordering = $data["ordering"];
$status = $data["status"];
$titles = preg_replace("/[^a-zA-Z]/", "", $title);
$url_key =strtolower($titles);

// $url_key = $data["url_key"];
$img = $_FILES["image"]["name"];
// dd($img);

if($imagBaseName) {
    $updQuery = "UPDATE `pages` SET title='$title',heading='$heading',description='$description',banner_image='$target_file',ordering='$ordering', status='$status',url_key='$url_key' WHERE id=$id";
} else {
    $updQuery = "UPDATE `pages` SET title='$title',heading='$heading',description='$description',ordering='$ordering', status='$status',url_key='$url_key' WHERE id=$id";
}
// dd($updQuery);
if($conn->query($updQuery)) {
    $_SESSION["success"] = "Data updated Successfully.....";
    header("location:page-list.php");


} else {
    $_SESSION["error"] = "Error somthing happning worong...";
    header("location:page-edit.php");
}
?>