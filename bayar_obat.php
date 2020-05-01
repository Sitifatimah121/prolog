<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jumlah_belanja = $_GET['id'];

?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Center</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/db95e67526.js" crossorigin="anonymous"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Main content  -->
    <div class="container">
        <!-- Navbar here -->
        <div class="py-2"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand mb-0 h1" href="#">Clinic Center.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Diagnoses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="my-2 my-lg-0">
                    <button type="submit" class="btn btn-light">Log In</button>
                    <button type="submit" class="btn btn-dark">Sign Up</button>
                </ul>
            </div>
        </nav>

        <!-- Jumbotron content -->
        <div class="py-4"></div>
        <div class="jumbotron bg-pinky rounded">
            <div class="row">
                <div class="col-md">
                    <h1 class="display-4">Health Care Plan, <br>Let us to provide you the best health Care.</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed earum, quas delectus, quibusdam illo vel voluptatem nesciunt quo maxime quidem error ducimus consequuntur</p>
                    <hr class="my-4">
                    <a href="http://">How they work&nbsp;&nbsp;<span>&#10230;</span></a>
                </div>
                <div class="col-md">
                    <div class="content-box">
                        <img class="image-ilustrator" src="asset/image_content/doctor-ilustrations.png" alt="Ilustration by. Icons8">
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
        </div>

        <!-- Here result -->
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="display">Hello</h3>
                    <p class="lead">You’re about to use a short (3 min), safe and anonymous health checkup. Your answers will be carefully analyzed and you’ll learn about possible causes of your symptoms.</p>
                </div>
                <div class="col-md-9">
                    <h2>Pemesan : <span style="color: coral"><?php echo $nama ?></span></h2>
                    <h2>Alamat : <span style="color: coral"><?php echo $alamat ?></span></h2>
                    <h2>Total belanja Anda adalah Rp. <span style="color: coral"><?php echo $jumlah_belanja ?></span></h2>
                    <div class="container">
                        <div style="margin: 100px" class="jawaban">
                            <form action="proses.php" method="POST">
                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End result -->

    </div>
    <!-- END main content -->

    <!-- Footer -->
    <footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">About us</a>
            </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Products</a>
            </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Awards</a>
            </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Help</a>
            </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Contact</a>
            </h6>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
            <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

        <!-- Grid row-->
        <div class="row pb-3">

        <!-- Grid column -->
        <div class="col-md-12">

            <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text"> </i>
            </a>

            </div>

        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Footer by
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

    </footer>
<!-- Footer -->

    <!-- Javascript end of body -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<!-- https://icons8.com -->
