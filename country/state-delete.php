<?php

require_once("country-config.php");

$state_id = $_GET['state_id'];

if ($state_id) {
    $delQuery = "DELETE FROM `states` WHERE state_id = $state_id";

    if ($con->query($delQuery)) {
        $_SESSION["success"] = "Record Deleted Successfully...";
        header("location: state-list.php");
    } else {
        $_SESSION["error"] = "Somthing Wrong...";
    }
} else {
    $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}
header("location: state-list.php");

?>