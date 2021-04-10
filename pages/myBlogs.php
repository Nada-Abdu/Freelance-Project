<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
#session_start();
// The next Line should be deleted
#$_SESSION['developerID'] = 1;
$developerID = $_COOKIE['developerId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Blogs</title>
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
  <style>
    .add {
      cursor: pointer;
      display: inline-block;
      padding: 8px 15px 10px 15px;
      font-size: 14px;
      font-weight: 600;
      line-height: 1;
      text-transform: uppercase;
      margin-bottom: 5px;
      transition: all 0.3s ease-in-out;
      border-radius: 3px;
    }

    .btn-complate {
      margin-top: 20px;
      margin-left: 40px;
      border-color: #3498db;
      background: #3498db;
      padding: 8px 25px;
      border-radius: 50px;
      color: #fff;
      font-size: 15px;
      font-weight: 600;
    }

    .icon-box:hover .btn-complate,
    .btn-complate:hover {
      border-color: #fff;
      background: #fff;
      color: #3498db;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color:#f8f8f8;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">

        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="DeveloperHome.php">Home</a></li>
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
    <br> <br>
    <section class="inner-page">
      <div class="container">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Blogs</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-UI">UI</li>
                  <li data-filter=".filter-Mobile">Mobile</li>
                  <li data-filter=".filter-web">Web</li>
                  <a class="add" href="addBlog.php"> Add Blog </a>
                </ul>
              </div>
            </div>

            <br>
            <div class="row portfolio-container services" data-aos="fade-up" data-aos-delay="400">

              <?php

            if (isset($developerID)) {
              addDeveloperBlogs($developerID);
            }

              /*
              if (isset($_SESSION['developerID'])) {
                addDeveloperBlogs($_SESSION['developerID']);
              }
              */

              function addDeveloperBlogs($developerID)
              {
                include('config-DB.php');
                $sql = "SELECT  `developerId`, blog.Id, `name`, `category`, `title`, `shortDescription`, `date`
                 FROM `blog`,`developer`
                  WHERE `developerId`=". $developerID.'
                   AND developer.Id='. $developerID." ORDER BY date(date) DESC";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    if (strcasecmp($row["category"], "UI") == 0) {
                      addUI($row["title"], $row["shortDescription"], $row["date"], $row["name"], $row["Id"]);
                    } elseif (strcasecmp($row["category"], "Mobile") == 0) {
                      addMobile($row["title"], $row["shortDescription"], $row["date"], $row["name"], $row["Id"]);
                    } elseif (strcasecmp($row["category"], "Web") == 0) {
                      addWeb($row["title"], $row["shortDescription"], $row["date"], $row["name"], $row["Id"]);
                    }
                  }
                } 
                /*else {
                  echo "0 results";
                }*/
              }
              function addUI($title, $description, $date, $name, $blogID)
              {
                $htmlCode = '<div class="col-lg-3 col-md-6 portfolio-item filter-UI"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 450px;"> <div class="icon"><i class="bx bx-columns"></i></div> <h4 class="title"><a href="">' . $title . '</a></h4> <p class="description">' . $description . '</p><p class="date" style="padding-top:15px;"> <b> By : </b> ' . $name . ' <br> <b> Date : </b> ' . $date . '   </p>
                 <div style="position: fixed; bottom: 7px;"> <button class="btn-complate" id="' . $blogID . '" onclick="removeBlog(this)">Delete the Blog</button> </div>
                </div> </div>';
                echo $htmlCode;
              }
              function addWeb($title, $description, $date, $name, $blogID)
              {
                $htmlCode = '<div class="col-lg-3 col-md-6 portfolio-item filter-web"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 450px;"> <div class="icon"><i class="bx bx-laptop"></i></div> <h4 class="title"><a href="">' . $title . '</a></h4> <p class="description">' . $description . '</p><p class="date" style="padding-top:15px;"> <b> By : </b> ' . $name . '<br> <b> Date : </b> ' . $date . '   </p>
                <div style="position: fixed; bottom: 7px;"> <button class="btn-complate" id="' . $blogID . '" onclick="removeBlog(this)">Delete the Blog</button> </div>
                </div> </div>';
                echo $htmlCode;
              }
              function addMobile($title, $description, $date, $name, $blogID)
              {
                $htmlCode = '<div class="col-lg-3 col-md-6 portfolio-item filter-Mobile"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 450px;"> <div class="icon"><i class="bx bx-mobile-alt"></i></div> <h4 class="title"><a href="">' . $title . '</a></h4> <p class="description">' . $description . '</p><p class="date" style="padding-top:15px;"> <b> By : </b> ' . $name . ' <br> <b> Date : </b> ' . $date . '   </p>
                 <div style="position: fixed; bottom: 7px;" > <button class="btn-complate" id="' . $blogID . '" onclick="removeBlog(this)">Delete the Blog</button> </div>
                </div> </div>';
                echo $htmlCode;
              }
              ?>

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
  <script>
    function removeBlog(event) {
      var blogID = event.id;
      console.log("blogID ", blogID);
      const sendBlogID = new FormData();
      sendBlogID.set('blogID', blogID);

      fetch('./removeBlog.php', {
          method: 'POST',
          redirect: 'follow',
          body: sendBlogID
        })
        .then(async function(response) {
          let res = await response.json();
          let message = await res["result"];
          if (message == "Success") {
            await successAlert("Blog Removed Successfully");
            location.reload();
          } else {
            await errorAlert("ERROR: Could not remove the blog");
            location.reload();
          }
        })
        .catch(async function(error) {
          await errorAlert(error);
          location.reload();
        });
    }

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
  </script>
</body>

</html>