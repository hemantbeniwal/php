<?php
require_once("config.php");

$id = $_POST["s_id"];
// dd($id);
$updateQuery = "UPDATE `enquiries` SET status=2 WHERE id=$id";
$conn->query($updateQuery);


?>
 <button class="btn btn-success">read</button>
