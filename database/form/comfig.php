<?php


function dd($data){

echo "<pre>";

print_r($data);
die();
}

// $host = "localhost";
// $username ="root";
// $password ="";
// $dbname = "new-form";

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn)
{
    echo "connection not established";
    die();
}
?>
