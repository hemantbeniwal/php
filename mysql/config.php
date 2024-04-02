<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$databasename = "newdatabase";

$con = mysqli_connect($host,$username,$password,$databasename);

if (!$con)
{
    echo "connection not established";
    die();
}

?>