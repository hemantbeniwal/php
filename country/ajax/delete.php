<?php 
require_once("config.php");

// $test = "SELECT * FROM student";
// $qery = $con->query($test);
// $a = mysqli_fetch_assoc($qery);

// while($b = mysqli_fetch_assoc($qery)) {
//     print_r($b["id"]);
//     echo "<br>";
// }

// dd($a["id"]);

$id = $_GET["student_id"]??0;
// dd($id);
$deleteQuery = "DELETE FROM `student` WHERE id=$id";
$con->query($deleteQuery);
// dd($deleteQuery);




?>