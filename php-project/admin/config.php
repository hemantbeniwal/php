<?php

session_start();

function dd( $data ) {
	echo"<pre>";
	print_r($data);
	die();
}

$host="localhost";
$username="root";
$password= "";
$database= "php_project";

$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
	echo "Data Not Established";
die();
}
?>