<?php

require_once("country-config.php");

$country_id = $_GET['id'];



if ($country_id) {
    $delQuery = "DELETE FROM `countries` WHERE id=$country_id";

    if ($con->query($delQuery)) 
    {
        $_SESSION["success"] = "Record Deleted Successfully...";
        header("location: country-list.php");

    } else 
    {
        $_SESSION["error"] = "Somthing Wrong...";
    }
} else 
{
    $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}
header("location: country-list.php");

?>