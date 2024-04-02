<?php

session_start();

function dd($data) {
    echo "<pre>";
    print_r($data);
    die();

}

$host = "localhost"; // 127.0.0.1
$username = "root";
$password = "";
$databaseName = "student-database";

$con = mysqli_connect($host, $username, $password, $databaseName);

if(!$con){
    echo "Connection not established....";
    die();
};


?>