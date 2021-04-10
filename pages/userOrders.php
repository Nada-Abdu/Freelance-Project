<?php
include('config-DB.php');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
#session_start();
#$_SESSION['userID'] = 1;
$userID = $_COOKIE['userID'];

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Orders</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png"/>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color:#f8f8f8;">
    <div class="container d-flex align-items-center justify-content-between" >

      <div class="logo">

         <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto" href="userhome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="userHome.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="userHome.php#statistics">Statistics</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="blogs.php">Blogs</a></li>
          <li><a class="nav-link scrollto active" href="userOrders.php">My Orders</a></li>
          <li><a class="getstarted scrollto" href="home.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
   <br>  <br>
    <section class="inner-page">
      <div class="container">
         <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>My Orders</h2>
        </div>



        <br>
        <div class="row portfolio-container services" data-aos="fade-up" data-aos-delay="400">

          <?php

          /*
          $servername = "localhost";
          $username = "root";
          $password = "12345678";
          $DB = "project";


          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $DB );
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          */
            #$userID = $_SESSION['userID'];

            $sql = "SELECT serviceId, category, orderDate, serviceorder.Id FROM serviceorder, service
             WHERE serviceorder.userId = $userID AND serviceorder.serviceId = service.Id ORDER BY date(orderDate) DESC";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-3 col-md-6 portfolio-item filter-web">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon"><i class="bx bxl-dribbble"></i></div>
                      <h4 class="title"><a href="">Order '.$row["Id"].'</a></h4>
                      <p class="description">'.$row["category"].' application</p>
                      <p class="description">Date: '.$row["orderDate"].'</p>

                    </div>
                  </div>';
              }
            } 
            
            /*else {
              echo "0 results";
            }*/

            #mysqli_close($conn);

           ?>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title" style= "font-size: 107px; text-align: center;"><a href="services.php">+</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container text-center">
      <div class="row d-flex align-items-center">

          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
