<?php
require_once("config.php");
$selectQuery ="SELECT * FROM `user_logs` WHERE user_id=".$_SESSION['user_id']." ORDER BY id DESC LIMIT 1,1;";
$conQuery =$conn->query($selectQuery);
// dd($conQuery);
if($conQuery->num_rows){
    $_user = mysqli_fetch_assoc($conQuery);
     $date1 = strtotime($_user['created_at']);
   $date2 = strtotime(date('Y-m-d H:i:s'));
  
    $day = ceil(($date2-$date1)/86400);
    $weeks = floor($day/7)."-Week ago";
    // $loginBefore = (($weeks <= 0)?0:$weeks)." Week ago";
    // dd($loginBefore);
}

?>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/hemat.png.jpg" class="img-thumbnail" />

                    <div class="inner-text">
                        <?= $_SESSION['names']??"" ?>
                        <br/>
                        <small><?= $_SESSION['emails']??"" ?></small> <br>
                        <small><?= "Last log".$weeks ?></small>
                        
                    </div>
                    
                </div>

            </li>


            <li>
                <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Manage Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="user-add.php"><i class="fa fa-user"></i>Add User</a>
                    </li>
                    <li>
                        <a href="user-list.php"><i class="fa fa-users"></i>User List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Manage Slider<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="slider-add.php"><i class="fa fa-sliders"></i>Add Slider</a>
                    </li>
                    <li>
                        <a href="slider-list.php"><i class="fa fa-sliders"></i>Slider List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Manage Page<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="page-add.php"><i class="fa fa-sliders"></i>Add Page</a>
                    </li>
                    <li>
                        <a href="page-list.php"><i class="fa fa-sliders"></i>Pages List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Manage block<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="block-add.php"><i class="fa fa-sliders"></i>Add block</a>
                    </li>
                    <li>
                        <a href="block-list.php"><i class="fa fa-sliders"></i>block List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Manage Enquirie<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="Enquirie-list.php"><i class="fa fa-sliders"></i>Enquirie List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="notification.html"><i class="fa fa-bell "></i>Notifications</a>
                    </li>
                    <li>
                        <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                    </li>
                    <li>
                        <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                    </li>
                    <li>
                        <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                    </li>
                    <li>
                        <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                    </li>
                    <li>
                        <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                    </li>
                    <li>
                        <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-key "></i>Components</a>
                    </li>
                    <li>
                        <a href="social.html"><i class="fa fa-send "></i>Social</a>
                    </li>

                    <li>
                        <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>

            </li>
            <li>
                <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                    </li>
                    <li>
                        <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
            </li>
            <li>
                <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
            </li>
            <li>
                <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>

            <li>
                <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->