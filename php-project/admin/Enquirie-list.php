<?php

require_once("config.php");

$selQuery = "SELECT * FROM enquiries";
$seleQuery = $conn->query($selQuery);


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
        <!-- /. NAV TOP  -->
        <?php include_once("includes/nav-side.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">enquiry list</h1>
                        <h1 class="page-subhead-line"> </h1>

                    </div>
                    <div class="col-md-12">
                        <!--   Basic Table  -->
                        <div class="panel panel-default">
                            <?php //include_once("user-message.php"); 
                            ?>

                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover display" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>message</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($seleQuery->num_rows){
                                            $i = 1;
                                            while ($_enquiry = mysqli_fetch_assoc($seleQuery))
                                             {
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $_enquiry['name'] ?></td>
                                                    <td><?= $_enquiry['email'] ?></td>
                                                    <td><?= $_enquiry['phone'] ?></td>
                                                    <td><?= $_enquiry['message'] ?></td>
                                                    <td id="status_id<?= $_enquiry['id']?>">
                                                    
                                                        <?php 
                                                        // echo $_enquiry['status'];
                                                        if($_enquiry['status'] == 1) { ?>                                                    
                                                            <button data-id="<?= $_enquiry['id']?>" class="btn btn-danger status_class">Unread</button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-success">Read</button>
                                                            <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Basic Table  -->
                    </div>
                    
                </div>
                
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. WRAPPER  -->
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

            <?php include_once("includes/footer.php") ?>
            <script>
                $(document).ready(function(){
                    $(".status_class").click(function(){
                        ids = $(this).attr('data-id');
                        // alert(ids);
                        // console.log(ids);
                        $.ajax({
                            url: 'enquriy-save.php',
                            type: 'POST',
                            data: {s_id:ids},
                            success:function(resutl){
                                $("#status_id"+ids).html(resutl);
                            },

                            error: function(er){
                                alert(er);
                            }
                        });
                    });
                });

            </script>
            
</body>

</html>