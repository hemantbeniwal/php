<?php session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "students1";

$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    echo "Connection not established....";
    die();  
};
?>
