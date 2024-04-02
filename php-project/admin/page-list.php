<?php include_once("config.php");

$selQuery = "SELECT * FROM `pages`";
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
                        <h1 class="page-head-line">Page List</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Page List
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
                                                <th>heading</th>
                                                <th>banner_image</th>
                                                <th>ordering</th>
                                                <th>status</th>
                                                <th>url_key</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $userQuery->num_rows;
                                            $i = 1;
                                            while ($_page = mysqli_fetch_assoc($userQuery)) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $i++ ?>
                                                    </td>
                                                    <td>
                                                        <?= $_page['title'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $_page['heading'] ?>
                                                    </td>
                                                    <td style="width:20%;">
                                                        <img src="<?= $_page['banner_image'] ?>" alt=""
                                                            style=" width:100%;">

                                                    </td>
                                                    <td>
                                                        <?= $_page['ordering'] ?>
                                                    </td>
                                                    <td>
                                                        <?= ($_page['status'] == 1) ? "enable" : "disable" ?>
                                                    </td>
                                                    <td>
                                                        <?= $_page['url_key'] ?>
                                                    </td>


                                                    <td>
                                                        <a href="page-edit.php?id=<?= $_page['id'] ?>"
                                                            class="btn btn-primary"><i
                                                                class="glyphicon glyphicon-edit"></i>edit</a>
                                                        <a href="page-delete.php?id=<?= $_page['id'] ?>"
                                                            class="btn btn-danger"><i
                                                                class="glyphicon glyphicon-home"></i>Delete</a>
                                                    </td>

                                                </tr>
                                                <?php
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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