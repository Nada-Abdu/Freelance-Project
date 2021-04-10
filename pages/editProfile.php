<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
#include('config-DB.php');

$developerID = $_COOKIE['developerId'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile</title>
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

  
  <!-- JS Scripts -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.0.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

</style>

<?php
include "config-DB.php";
#include('config-DB.php');

?>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="background-color:#f8f8f8;">
    <div class="container d-flex align-items-center justify-content-between" >

      <div class="logo">
        
         <a href="home.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="DeveloperHome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="DeveloperHome.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="DeveloperHome.php#statistics">Statistics</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="DeveloperHome.php#services"> All Services</a></li>
              <li><a href="myServices.php">My Services</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="blogsDeveloper.php"> All Blogs</a></li>
              <li><a href="myBlogs.php">My Blogs</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="developerOrders.php">Orders</a></li>
          <li><a class="nav-link scrollto active" href="profile.php">Profile</a></li>
          <li><a class="getstarted scrollto" href="home.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Develper Profile</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" data-aos="fade-up" data-aos-delay="200">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper-container">
              <div class="align-items-center">

                <div class="swiper-slide align-items-center">
                <img src="assets/img/user.png" alt="" style="max-width: 50%; height: auto;">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


<?php
#include('config-DB.php');
include "config-DB.php";
#$develop_id = 1;
#Edited later
$profile_query = "SELECT * FROM developer WHERE Id='$developerID'";
#$profile_result = mysqli_query($conn, $profile_query);
//print($profile_result);
#$result = $conn->query($sql);

  // output data of each row$row = $result->fetch_assoc()
#$profile_info = mysqli_fetch_row($profile_result);

if($profile_result = mysqli_query($conn, $profile_query)){
  // Fetch one and one row
  $profile_info = mysqli_fetch_row($profile_result);
};

?>
          <div class="col-lg-8">
            <div class="portfolio-info">
            <div class=" d-flex align-items-left justify-content-left">
              <h3 style="width: 90%;"><?php print $profile_info[0]; ?></h3>
              <div class="float-right justify-content-right">
              <form method="POST" action="">
              <input type="submit" name="submit" class="img-fluid" value=""
              style="width: 32px; height: 32px; 
              background: url('assets/img/check-mark.png'); no-repeat; border: 0px;">
              </div>
              </div>
              <ul>
                <li><strong>Name</strong>: <input type='text' class="fadeIn second"  name='name' value= "<?php print $profile_info[0]; ?>" /> </li> 
                <li><strong>Phone</strong>: <input type='text' class="fadeIn second" name='phone' value= "<?php print $profile_info[1]; ?>" /></li>
                <li><strong>Email</strong>: <input type='text' class="fadeIn second" name='email' value= "<?php print $profile_info[2]; ?>" /> </a></li>
                <li><strong>Skills</strong>: <input type='text' class="fadeIn second" name='skills' value= "<?php print $profile_info[3]; ?>" /> </li>
                <li><strong>Specialist</strong>: <input type='text'class="fadeIn second"  name='specialist' value= "<?php print $profile_info[4]; ?>" /></li>
              </ul>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
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
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script>
  // error alert 
  async function errorAlert(msg) {
      return Swal.fire({
        icon: 'error',
        title: 'Something went wrong!',
        text: msg,
        showConfirmButton: true,
        confirmButtonColor: '#dc3545',
        timer: 10000
      });
    }

    // success alert 
    async function successAlert(msg) {
      return Swal.fire({
        icon: 'success',
        title: msg,
        showConfirmButton: false,
        timer: 2500
      });

    }


    async function redirectToProfile() {
      await successAlert("Profile updated successfully!");
      window.location.replace("http://localhost/Advanced%20Web%20UQU%20Course/Project/profile.php");
   }
    </script>

</html>


<?php

if(isset($_POST['submit'])) {

include('config-DB.php');
    
    #$developer_id = 1;

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $skills = $_POST['skills'];
    $specialist = $_POST['specialist'];
    


    $update_profile_query = "UPDATE developer SET name = '$name',
    phone = '$phone',
    email = '$email',
    skills = '$skills',
    specialist = '$specialist'
    WHERE Id = '$developerID';";


    if(mysqli_query($conn, $update_profile_query)){
        //echo "<script type='text/javascript'>successAlert('Profile updated successfully!');</script>";
        echo "<script type='text/javascript'>redirectToProfile();</script>";
        //$result="Success";
    
    }

    else {
        echo "<script type='text/javascript'>errorAlert('Could not update the profile');</script>";
        //$result= "ERROR: Could not able to execute " . mysqli_error($conn);
        #print("Could not update the profile because: ".mysqli_error($conn)."");
        return;
    }

    //$response['result'] = $result;
    //echo json_encode($response);
}
    ?>
