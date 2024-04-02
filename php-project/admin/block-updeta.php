<?php
require_once("config.php");

$data = $_POST;

$id = $data['id'] ?? 0;

date_default_timezone_set("Asia/Calcutta");


$target_dir = "uploads/";
$imagBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);

$target_file = $target_dir.$imagBaseName;

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$identifier = $data["identifier"];
$title = $data["title"];
$heading = $data["heading"];
$description = $data["description"];
$ordering = $data["ordering"];
$status = $data["status"];
// $img = $_FILES["image"]["name"];
// dd($img);

if($imagBaseName) {
    $updQuery = "UPDATE `blocks` SET identifier='$identifier',title='$title',heading='$heading',description='$description',banner_image='$target_file',ordering='$ordering', status='$status'WHERE id=$id";
} else {
    $updQuery = "UPDATE `blocks` SET  identifier='$identifier',title='$title',heading='$heading',description='$description',ordering='$ordering', status='$status', WHERE id=$id";
}
// dd($updQuery);
if($conn->query($updQuery)) {
    $_SESSION["success"] = "Data updated Successfully.....";
    header("location:block-list.php");


} else {
    $_SESSION["error"] = "Error somthing happning worong...";
    header("location:block-edit.php");
}
?>