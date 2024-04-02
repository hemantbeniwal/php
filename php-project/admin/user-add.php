
<?php

require_once("config.php")

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Add</title>
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
                        <h1 class="page-head-line">Add User</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >>  Add User </span>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <?php include_once("message.php");  ?>
                                
                                <form action="user-save.php" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name="name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" type="email">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No.</label>
                                        <input class="form-control" name="phone" type="tel">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label>Select Gender</label>
                                        <div class="radio">
                                            <label>
                                                <input  type="radio" name="gender" id="Radio1" value="M">Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input  type="radio" name="gender" id="Radio2" value="F">Female
                                            </label>
                                        </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input class="form-control" name="designation">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Canform Password</label>
                                        <input class="form-control" name="canform_password" type="password">
                                       
                                    </div>


                                    <button class="btn btn-info">Save </button>

                                </form>
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


