<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
$developerId = $_COOKIE['developerId'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services</title>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
.date {
  font-size:12px;
  color: #484848;
  
}

.btn:hover{
  background-color:#fff;
  color:#000;

}
.btn-complate{

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

.date:hover{
  color:#fff;
}

</style>

<script type="text/javascript"> 
function ajaxCall(id){
  console.log(id);
$.ajax({  
    type: 'POST',  
    url: './addOrder.php', 
    data: {
    "id": id
  },
  success: function(response) {
    var msg=JSON.parse(response);
    msg= msg.result;
    console.log(msg);
    if(msg === 'Success adding the order'){
    successAlert(msg); }
    else {
    errorAlert(msg);
    }
    }

  
});


}

async function successAlert(msg) {
  return Swal.fire({
    icon: 'success',
    title: msg,
    showConfirmButton: false,
    timer: 2500
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
</script>

</head>
<?php
include "config-DB.php";
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
          <li><a class="nav-link scrollto" href="developerHome.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="developerHome.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="developerHome.php#statistics">Statistics</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="servicesDeveloper.php" class="active">All Services</a></li>
              <li><a href="myServices.php">My Services</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="blogsDeveloper.php">All Blogs</a></li>
              <li><a href="myBlogs.php">My Blogs</a></li>
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

   <br>  <br> 
     <!-- ======= Portfolio Section ======= -->
    
     <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>services</h2>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-UI">UI</li>
              <li data-filter=".filter-Mobile">Mobile</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <br>
        <div class="row portfolio-container services" data-aos="fade-up" data-aos-delay="400">

        <?php 
         include "config-DB.php";

         //echo "User id: ".$userId;

         
         $services= mysqli_query($conn,"SELECT * FROM `service` ");
          while ($service = mysqli_fetch_assoc($services)) {
            $description=$service['description'];
            $category=$service['category'];
            $date=$service['date'];
            $developerId=$service['developerId'];
            $title=$service['title'];
            $price=$service['price'];
            $ID=$service['Id'];
            $developer= mysqli_query($conn,"SELECT * FROM `developer` WHERE `Id`='$developerId'");
            $developer= mysqli_fetch_assoc($developer);
            $name=$developer['name'];

            #echo "ID: ".$ID; 

            #$date=date("Y-m-d");
            #echo "date: ".$date;

            //class="col-lg-3 col-md-6 portfolio-item filter-uncompleted" style="margin-left: 100px;"> <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 320px; width: 400px;"> 

          if(strcasecmp($category, "Web") == 0){ 
            ?>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100"style="height: 320px; width: 300px;">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo  $title ?></a></h4>
              <p class="description"><?php echo $description ?></p>
              <?php echo "<p class='date' style='padding-top:15px;'> <b> By: <a href='profileUser.php?developerId=".$developerId."'> </b>".$name." </a>";?>
                 <br> <b> Price: </b> <?php echo "  $price" ?> SR  </p>    <br>

                
            </div>
          </div>
            
            <?php
          }

          if(strcasecmp($category, "UI") == 0){
            ?>
            <div class="col-lg-3 col-md-6 portfolio-item filter-UI" >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 320px; width: 300px;">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo  $title ?></a></h4>
              <p class="description"><?php echo $description ?></p>
              <?php echo "<p class='date' style='padding-top:15px;'> <b> By: <a href='profileUser.php?developerId=".$developerId."'> </b>".$name." </a>";?>
              <br> <b> Price : </b> <?php echo "  $price" ?> SR   </p>    <br>
            </div>
          </div>
          <?php
          }

          if(strcasecmp($category, "Mobile") == 0){
            
          ?>

            <div class="col-lg-3 col-md-6 portfolio-item filter-Mobile">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 320px; width: 300px;">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo  $title ?></a></h4>
              <p class="description"><?php echo $description ?></p>
              <?php echo "<p class='date' style='padding-top:15px;'> <b> By: <a href='profileUser.php?developerId=".$developerId."'> </b>".$name." </a>";?>
              <br> <b> Price : </b> <?php echo "  $price" ?> SR    </p>
              <br>
            </div>
           
          </div>

          
            
           <?php 
          }

          
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</body>

</html>