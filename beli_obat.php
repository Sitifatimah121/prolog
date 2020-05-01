<?php

$jumlah_obat = $_POST['jumlah_obat'];
// $jenis_sakit = $id;

// function beli_obat($psy,$psj)
function beli_obat($psy)
{
    // modul2
    $file = fopen("beli_obat.pl", "a+") or die("Unable to open file!");

    // if (!empty($psy, $psj)) {
    if (!empty($psy)) {

        //modul2
        fprintf($file, "pertama($psy).\n");
    }

    fclose($file);
}


// echo beli_obat($jumlah_obat, $jenis_sakit);
echo beli_obat($jumlah_obat);

$cmd = "\"c:/program files/swipl/bin/swipl.exe\" -f beli_obat.pl -g hitung_harga,halt";  
$out1 = exec($cmd); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelompok 6</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v2.0.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php"><span>KELOMPOK 6</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>

                    <li class="drop-down"><a href="#">Team</a>
                        <ul>
                            <li><a href="#">L. GILANG OBID</a></li>
                            <li><a href="#">RAFLI SATRIA</a></li>
                            <li><a href="#">RAMADHANI AKBAR ILMIAWAN</a></li>
                            <li><a href="#">RIZKI KHOIRUN NISA</a></li>
                            <li><a href="#">SITI FATIMAH</a></li>
							<li><a href="#">ZAKA M. NOOR</a></li>

                        </ul>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <div class="container">
        <div style="margin: 100px" class="jawaban">

        </div>
    </div>
    <div class="container">
        <div class="modul1">
            <h1 style="text-align: center">Hasil </h1>
        </div>
        <div style="margin: 100px" class="jawaban">

        </div>
        <div style="margin: 100px" class="jawaban">

        </div>
        <h2>Total harga obatnya Rp. <span style="color: coral"><?php echo $out1 ?></span></h2>
        <h2>Kami juga menyarankan Anda untuk membeli vitamin seharga Rp.1000 per butir</h2>
    </div>
    <div class="container">
        <div style="margin: 100px" class="jawaban">
            <form action="beli_vit.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Masukkan Jumlah Vitamin :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angka list" name="jumlah_vit">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 6</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
