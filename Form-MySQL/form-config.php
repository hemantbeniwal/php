<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$databasename = "new-form";

$con = mysqli_connect($host, $username, $password, $databasename);

if(!$con)
{
    echo "Connection is not established.....";
    die();
}



?>