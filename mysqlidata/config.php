<?php

session_start();
function dd($data){
	echo "<pre>";
	print_r($data);
	die;
  }

$host="localhost";
$username= "root";
$password= "";
$dbname= "students";

$con = mysqli_connect($host,$username,$password,$dbname);

if(!$con)
{
	echo "connection not established...";
	die();
}
?>