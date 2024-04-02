<?php
session_start();

function dd($data) {
    echo "<pre>";
    print_r($data);
    die();
}


$host = "localhost";
$username = "root";
$password = "";
$databaseName = "student1";

$con = mysqli_connect($host, $username, $password, $databaseName);

if(!$con){
    echo "connection not established.....";
    die();  
}

?>