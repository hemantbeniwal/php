<?php include_once("config.php");

$selQuery = "SELECT * FROM `sliders`";
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
                        <h1 class="page-head-line">Slider List</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Slider List
                            </strong></span>
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
                                                <th>Title</th>
                                                <th>Ordering</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $userQuery->num_rows;
                                                $i = 1;
                                                while($_slider = mysqli_fetch_assoc($userQuery)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $i++ ?>
                                                        </td>
                                                        <td>
                                                            <?= $_slider['title'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $_slider['ordering'] ?>
                                                        </td>
                                                        <td>
                                                            <?= ($_slider['status'] == 1) ? "enable" : "disable" ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?= $_slider['image'] ?>" alt="" width="40%">
                                                        </td>

                                                        <td>
                                                            <a href="slider-edit.php?id=<?= $_slider['id'] ?>"
                                                                class="btn btn-primary"><i
                                                                    class="glyphicon glyphicon-edit"></i>edit</a>
                                                            <a href="slider-delete.php?id=<?= $_slider['id'] ?>"
                                                                class="btn btn-danger"><i
                                                                    class="glyphicon glyphicon-home"></i>Delete</a>
                                                        </td>

                                                        <?php
                                                }
                                            
                                            ?>
                                        </tbody>
                                    </table>
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