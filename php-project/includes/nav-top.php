<!-- Topbar Start -->
<?php
require_once("admin/config.php");

$selQuery = "SELECT * FROM `pages` WHERE status=1 ORDER BY ordering ASC ";

$seldata = $conn->query($selQuery);
// $seleda =mysqli_fetch_assoc($seldata);

    // dd($seleda);




// dd($seleda);

?>
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                <span class="text-body">|</span>
                <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-body pl-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Navbar End -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <?php while ($_page = mysqli_fetch_assoc($seldata)) {
                        // dd($_page);
                        $title = $_page["title"];
                        $titles = preg_replace("/[^a-zA-Z]/", "", $title);
                        $url_key = strtolower($titles);
                        // dd($title);

                        ?>
                        <a href="page.php?url_key=<?= $url_key ?>" class="nav-item nav-link active">
                            <?= $_page["title"] ?>
                        </a>
                    <?php } ?>

                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </nav>
    </div>
</div>