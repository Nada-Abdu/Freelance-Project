<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
#session_start();
// The next Line should be deleted
//$_SESSION['developerID'] = 1;
$developerID = $_COOKIE['developerId'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orders</title>
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
    .date {
      font-size: 12px;
      color: #484848;
    }

    .btn-complate {
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

    .icon-box:hover .btn-complate,
    .btn-complate:hover {
      border-color: #fff;
      background: #fff;
      color: #3498db;
    }

    .portfolio-item {
      margin: 20px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color:#f8f8f8;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">

        <a href="home.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto" href="developerHome.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="developerHome.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="developerHome.php#statistics">Statistics</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="servicesDeveloper.php">All Services</a></li>
              <li><a href="myServices.php">My Services</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="blogsDeveloper.php">All Blogs</a></li>
              <li><a href="myBlogs.php">My Blogs</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="developerOrders.php">Orders</a></li>
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
              <h2>My Orders</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-uncompleted">Uncompleted</li>
                  <li data-filter=".filter-completed">Completed</li>
                </ul>
              </div>
            </div>

            <br>
            <div class="row portfolio-container services" data-aos="fade-up" data-aos-delay="400">

              <?php


            if (isset($developerID)) {
              addDeveloperOrders($developerID);
            }

              /*if (isset($_SESSION['developerID'])) {
                addDeveloperOrders($_SESSION['developerID']);
              }*/

              function addDeveloperOrders($developerID)
              {
                include('config-DB.php');
                $sql = "SELECT service.description, service.category , user.name , user.email , 
                serviceOrder.orderDate , serviceOrder.state, serviceOrder.serviceId
                 FROM service, user, serviceOrder 
                 WHERE serviceOrder.userId=user.Id AND serviceOrder.serviceId=service.Id AND service.developerId=$developerID";
                $result = $conn->query($sql);

                //print($result->fetch_assoc()["state"]);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    if ($row["state"] == "uncompleted") {
                      addUncompletedOrders($row["category"], $row["description"], $row["name"], $row["email"],  $row["orderDate"], $row["serviceId"]);
                    } elseif ($row["state"] == "completed") {
                      addCompletedOrders($row["category"], $row["description"], $row["name"], $row["email"],  $row["orderDate"]);
                    }
                  }
                } 
                /*else {
                  echo "0 results";
                }*/
              }
              function addUncompletedOrders($category, $description, $name, $email,  $orderDate, $serviceId)
              {
               
                $htmlCode = '<div class="col-lg-3 col-md-6 portfolio-item filter-uncompleted" style="margin-left: 100px;"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 320px; width: 400px;"> ';
                if (strcasecmp($category, "mobile") == 0) {
                  $htmlCode .= '<div class="icon"><i class="bx bx-mobile-alt"></i></div>';
                } elseif (strcasecmp($category, "web") == 0) {
                  $htmlCode .= '<div class="icon"><i class="bx bx-laptop"></i></div>';
                } else {
                  $htmlCode .= '<div class="icon"><i class="bx bx-columns"></i></div>';
                }
                $htmlCode .= ' <h4 class="title"><a href="">' . $description . '</a></h4> <p class="description"> <b> User Name: </b> ' . $name . ' </p> <p class="description"> <b> User Email: </b> ' . $email . ' </p> <p class="description"> <b> Order Date: </b> ' . $orderDate . ' </p> <div> <button class="btn-complate" id="' . $serviceId . '" onclick="updateOrderState(this)">Completed</button> </div> </div> </div>';
               
                echo $htmlCode;
              }
              function addCompletedOrders($category, $description, $name, $email,  $orderDate)
              {
                $htmlCode = '<div class="col-lg-3 col-md-6 portfolio-item filter-completed" style="margin-left: 100px;"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 320px; width: 400px;"> ';


                if (strcasecmp($category, "mobile") == 0) {
                  $htmlCode .= '<div class="icon"><i class="bx bx-mobile-alt"></i></div>';
                } elseif (strcasecmp($category, "web") == 0) {
                  $htmlCode .= '<div class="icon"><i class="bx bx-laptop"></i></div>';
                } else {
                  $htmlCode .= '<div class="icon"><i class="bx bx-columns"></i></div>';
                }
                $htmlCode .= '<h4 class="title"><a href=""> ' . $description . ' </a></h4> <p class="description"> <b> User Name: </b> ' . $name . ' </p> <p class="description"> <b> User Email: </b> ' . $email . ' </p> <p class="description"> <b> Order Date: </b> ' . $orderDate . ' </p> <p class="description"> <b> Order State: </b> completed </p> </div> </div>';
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
    async function updateOrderState(event) {
      var orderID = event.id;
      console.log(orderID);
      const sendOrderID = new FormData();
      sendOrderID.set('orderID', orderID);

      fetch('./updateOrderState.php', {
          method: 'POST',
          redirect: 'follow',
          body: sendOrderID
        })
        .then(async function(response) {
          let res = await response.json();
          let message = await res["result"];
          if (message == "Success") {
            await successAlert("Order state was updated successfully");
            location.reload();
          } else {
            await errorAlert(message);
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