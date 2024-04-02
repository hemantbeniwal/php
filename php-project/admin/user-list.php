<?php include_once("config.php");

$selQuery = "SELECT * FROM `users`";
$userQuery = $conn->query($selQuery);


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php include_once("includes/nav-top.php"); ?>
        <?php include_once("includes/nav-side.php"); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User List</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >>  User List </strong></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php require_once("message.php") ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover display" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Gender</th>
                                                <th>Designation</th>
                                                <th>password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $userQuery->num_rows;
                                                $i =1;
                                                while ($_user = mysqli_fetch_assoc($userQuery)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $i++ ?>
                                                        </td>
                                                        <td>
                                                            <?= $_user['name'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $_user['email'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $_user['phone'] ?>
                                                        </td>
                                                        <td>
                                                            <?=($_user['gender']=="M")?"Male":"Female"?>
                                                        </td>
                                                        <td>
                                                            <?= $_user['designation'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $_user['password'] ?>
                                                        </td>

                                                        <td>
                                                            <a href="user-edit.php?id=<?= $_user['id'] ?>" class="btn btn-primary"><i
                                                                    class="glyphicon glyphicon-edit"></i>edit</a>
                                                            <a href="user-delete.php?id=<?= $_user['id'] ?>" class="btn btn-danger"><i
                                                                    class="glyphicon glyphicon-home"></i>Delete</a>
                                                        </td>

                                                   <?php
                                                          }
                                                    ?>


                                        </tbody>
                                    </table>
                                    <?php //include_once("pagination.php"); ?>

                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <?php include_once("includes/footer.php"); ?>


</body>

</html>


