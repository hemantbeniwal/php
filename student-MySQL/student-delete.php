<?php

require_once("student-config.php");

$studentid = $_GET["studentid"];

if ($studentid) {
    $delQuery = "DELETE FROM students where studentid=$studentid";
    if ($con->query($delQuery)) {
        $_SESSION["success"] = "Record delete successfully.....";
        header("location: student-list.php");
    } else {
        $_SESSION["error"] = "Something went wrong....";
    }
} else {
    $_SESSION["error"] = "Something went wrong. Please try again....";
}

header("location: student-list.php");


?>