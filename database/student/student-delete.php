<?php
require_once("config.php");


// $id=$_GET['id'];
// $deleteQuery="DELETE FROM `student` WHERE id=$id ";

// $con->query($deleteQuery);

// header("location:student-list.php");

$id= $_GET['id'];
if($id){
    $delQuery = "DELETE FROM student where id = $id";
    if($con->query($delQuery)){
        $_SESSION['success']= "Record delete success...";

    }else{
        $_SESSION["error"]= "something wrong..";
    }
}else{
    $_SESSION["error"]= "something wrong. try agein";
}
header("location: student-list.php");
?>