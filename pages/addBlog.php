
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
#session_start();
#$_SESSION['developerID'] = 1;
$developerID = $_COOKIE['developerId'];

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>add Blog</title>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style media="screen">
.center {
margin: auto;
width: 50%;
padding: 90px;
}
.btn-complate{
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 90px;
  border-color: #3498db;
  background: #3498db;
  padding: 8px 25px;
  border-radius: 50px;
  color: #fff;
  font-size: 15px;
  font-weight: 600;
}
.icon-box:hover .btn-complate, .btn-complate:hover{
  border-color: #fff;
  background: #fff;
  color: #3498db;
}
</style>
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
          <li><a class="nav-link scrollto" href="DeveloperHome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="DeveloperHome.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="DeveloperHome.php#statistics">Statistics</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="servicesDeveloper.php"> All Services</a></li>
              <li><a href="myServices.php">My Services</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="blogsDeveloper.php"> All Blogs</a></li>
              <li><a href="myBlogs.php" class="active">My Blogs</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="developerOrders.php">Orders</a></li>
          <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
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
          <h2>Add a Blog</h2>

        </div>
        <section id="portfolio-details" class="portfolio-details">
          <div class="container ">

            <div class="row gy-4">

                <div class="portfolio-info">
<img src="assets/img/blog.png" alt="" class="img-fluid"width="59" height="50">
<br><br>
                     <form class="" action="addBlog.php" method="post">

                        <h4> <strong>Select the category:</strong> </h4>
                       <div>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="category" id="UI" value="UI">
                         <label class="form-check-label" for="UI">
                           UI
                         </label>
                         </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="category" id="Web" value="Web">
                       <label class="form-check-label" for="Web">
                       Web
                       </label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="category" id="mobile" value="mobile">
                       <label class="form-check-label" for="mobile">
                       Mobile
                       </label>
                       </div></div>
                       <br>
                       <h4> <strong>Add title: </strong> </h4>
                         <div class="form-group">
                       <input type="text" class="form-control" name="title" id="title" rows="2" cols="2"></textarea>
                       </div>
                       <br>
                          <h4> <strong>Add short description: </strong> </h4>
                         <div class="form-group">
                       <textarea class="form-control" name="txtarea" id="txtarea" rows="2" cols="2"></textarea>
                       </div>
                       <br>
                       <h4> <strong> Blog content: </strong> </h4>
                         <div class="form-group">
                       <textarea class="form-control" name="txtarea1" id="txtarea1" rows="4" cols="4"></textarea>
                       </div>
                       <br>
                       <button type="submit" name="submit" onclick="addblog(this)" class="btn-complate" style="float: right; width: 10%;">Add</button>


      </form>

                </div>

              </div>

            </div>
     </div>
     </section>
    </section><!-- End Portfolio Section -->
      </div>
    </section>

  </main><!-- End #main -->


  <?php
    include('config-DB.php');
  if(isset($_POST['submit'])) {
    #$developerID = $_SESSION['developerID'];
    $category = $_POST['category'];
    $description = $_POST['txtarea'];
    $content =  $_POST['txtarea1'];
    $title = $_POST['title'];
    // date type should be in my sql 	datetime	. and the id auto and i add a new column for the content of the blog its name "content"
  //  $sql = "INSERT INTO blog (developerId, category, shortDescription, date, content)
    //VALUES ($developerID, '$category', '$description', now(), '$content')";

    mysqli_query($conn, "INSERT INTO blog (Id, developerId, title, category, shortDescription, date)
    VALUES (0, '$developerID', '$title', '$category', '$description', now())");



    // Print auto-generated id

  $id =  mysqli_insert_id($conn);
  #mysqli_close($conn);



  $myfile = fopen("../blogs/".$id.".txt", "w") or die("Unable to open file!");
  fwrite($myfile, $content);
  fclose($myfile);
  }
   ?>

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
  <script>
    async function addblog(event) {

            await successAlert(" The blog added successfully");
            location.reload();


    // success alert
    async function successAlert(msg) {
      return Swal.fire({
        icon: 'success',
        title: msg,
        showConfirmButton: false,
        timer: 25000
      });

    }}
  </script>



</body>

</html>
