<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
  /*--------------------------------------------------------------
  # Arwa CSS
  --------------------------------------------------------------*/
  div{
  posititon: relative;
  }
  .js-nametag{
  position: absolute;
  }
  .js-nametag:nth-child(1){
  animation-name: fade;
  animation-fill-mode: both;
  animation-iteration-count: infinite;
  animation-duration: 5s;
  animation-direction: alternate-reverse;  
  }


  .js-nametag:nth-child(2){
  animation-name: fade;
  animation-fill-mode: both;
  animation-iteration-count: infinite;
  animation-duration: 5s;
  animation-direction: alternate;
  }

  .js-nametag:nth-child(3){
  animation-name: fade;
  animation-fill-mode: both;
  animation-iteration-count: infinite;
  animation-duration: 5s;
  animation-direction: alternate;
  }

  @keyframes fade{
    0%,50% {
      opacity: 0;
  }
    100%{
      opacity: 1;
  }
  }
.counter{
    background: #fff;
    box-shadow: 0px 2px 12px rgb(0 0 0 / 8%);
    text-align: center;
    padding: 100px 0 30px;
    margin-top: 80px;
    /* margin-bottom: 70px; */
    position: relative;
    height:200px;
}
.counter .counter-value{
    width: 150px;
    height: 100px;
    line-height: 100px;
    background: #3498db;
    margin: 0 auto;
    /* box-shadow: 0 8px 6px -6px #4d485e; */
    /* text-shadow: 1px 1px 0 #4d485e, 2px 2px 0 #4d485e, 3px 3px 0 #4d485e, 4px 4px 0 #4d485e; */
    font-size: 50px;
    color: #fff;
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
}
.counter .counter-value:before,
.counter .counter-value:after{
    content: "";
    border-right: 20px solid #2373a9;
    border-left: 20px solid transparent;
    border-top: 20px solid transparent;
    position: absolute;
    top: 0;
    left: -40px;
}
.counter .counter-value:after{
    border-right: 20px solid transparent;
    border-left: 20px solid #2373a9;
    left: auto;
    right: -40px;
}
.counter .title{
    font-size: 32px;
    /* font-weight: 600; */
    color: #033a34;
    text-transform: uppercase;
    margin: 0;
    margin-top:17px;
}
.counter.yellow .counter-value{ background: #e8a83b; }
.counter.blue .counter-value{ background: #14cbdc; }
.counter.green .counter-value{ background: #22c662; }
.counter.yellow .counter-value:before{ border-right-color: #a27f43; }
.counter.yellow .counter-value:after{ border-left-color: #a27f43; }
.counter.blue .counter-value:before{ border-right-color: #478a91; }
.counter.blue .counter-value:after{ border-left-color: #478a91; }
.counter.green .counter-value:before{ border-right-color: #247151; }
.counter.green .counter-value:after{ border-left-color: #247151; }
@media only screen and (max-width: 990px){
    .counter{ margin-top: 40px; }
}

/* 00 */
#more{
  outline: 0;
  color: #3498db;
  border-color: #3498db;
  border-width:2px;
  padding: 8px 25px;
  border-radius: 50px;
}
#more:hover{
  outline: 0;
  border-color: #3498db;
  padding: 8px 25px;
  border-radius: 50px;
  color: #fff;
  background-color: #3498db;
}

.show-read-more .more-text{
        display: none;
    }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <a href="home.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#statistics">Statistics</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#blogs">Blogs</a></li>
          <li><a class="nav-link scrollto" href="userOrders.php">My Orders</a></li>
          <li><a class="getstarted scrollto" href="home.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" style='padding-bottom:20px'>
          <h1 data-aos="fade-up" class="js-nametag">We connect the world's <br> top talent with the world's <br> top organizations</h1>
          <h1 data-aos="fade-up" class="js-nametag">A whole world of <br> freelance talent at <br> your fingertips</h1>
          <br><br><br><br><br><br><br><br><br><br><br><br> <br>
          <h2 data-aos="fade-up" data-aos-delay="400" style="padding:0px ; margin:0px ; margin-bottom:20px">Find the perfect freelance services for your business</h2>
      </div>
          <!-- <h1 data-aos="fade-up" class="js-nametag">All You Need To Power <br> Your Business</h1> -->
          <!-- <h1 data-aos="fade-up" class="js-nametag">Find the perfect freelance <br> services for your business</h1> -->
          <!-- <h1 data-aos="fade-up" class="js-nametag">For developers <br> We'll make earning easy.</h1> -->
          <!-- <h2 data-aos="fade-up" data-aos-delay="400" style="padding-top:350px">Find the perfect freelance <br> services for your business</h2> -->
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <br><br><br><br>
    <section id="about">
      <div class="container">
        <header class="section-header">
          <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p>The #1 website to work remote, work from home to exploit expertise and skills to serve clients</p>
          </div>
        </header>
        <section id="portfolio-details" class="portfolio-details" data-aos="fade-up">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-6" data-aos="flip-left">
                <div class="portfolio-details-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                      <img src="assets/img/freelance-community.png" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/freelance-community2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/freelance-community3.png" alt="">
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="col-lg-6" data-aos="flip-left">
                <div class="portfolio-info" style="padding:21px">
                  <p style="text-align: justify;">
                    Freelancers can showcase finished projects to the public so potential clients 
                    can easily pick someone whose creation sparks their interest. It’s an alternative
                    that removes the need to contact workers one by one.What is more, OOO offers you 
                    blogs and services  to develop your skills.
                  </p>
                  <ul>
                  <li><i class="ri-check-double-line" style="color:#3498db"></i> Get matched with expert freelancers in minutes.</li>
                  <li><i class="ri-check-double-line" style="color:#3498db"></i> Dedicated 24/7 customer service team.</li>
                  <li><i class="ri-check-double-line" style="color:#3498db"></i> Money back guarantee and anti-fraud protection.</li>
                  <li><i class="ri-check-double-line" style="color:#3498db"></i> Allows you to upload a profile to looking for a job.</li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Statistics Section ======= -->
    <section id="statistics" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Statistics</h2>
          <p>The #1 site to work remote, work from home to exploit expertise and skills to serve clients</p>
        </div>
        
        <div class="row" data-aos="fade-up">
          <!-- / -->
        <div class="demo">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-6" data-aos="flip-up">
                      <div class="counter">
                          <div class="counter-value">567</div>
                          <h3 class="title">Developers</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6" data-aos="flip-up">
                      <div class="counter blue">
                          <div class="counter-value">793</div>
                          <h3 class="title">Clients</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6" data-aos="flip-up">
                      <div class="counter">
                          <div class="counter-value">327</div>
                          <h3 class="title">Blogs</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6" data-aos="flip-up">
                      <div class="counter blue">
                          <div class="counter-value">109</div>
                          <h3 class="title">Services</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>
          <!-- / -->
      </div>
    </div>
  </div>
    </section><!-- End Statistics Section -->

       <!-- ======= Services Section ======= -->
       <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>

          <p>See the list below to browse the developers' services to choose your desired order.</p>
        </div>

        <div class="row">

        <?php 
        ini_set('display_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE);
         include "config-DB.php";
         $services = mysqli_query($conn,"SELECT * FROM `service` ORDER BY 'date' DESC LIMIT 4");
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

            /*
            echo '<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">';
            echo '<div class="icon-box" data-aos="fade-up" data-aos-delay="100">';
            echo '<div class="icon"><i class="bx bxl-dribbble"></i></div>';
            echo '<h4 class="title"><a href="">'.$category.'</a></h4>';
            echo '<p class="description">'.$description.'</p>';
            echo '<p class="description">'.$price.' RS</p>';
            echo '</div> </div>';*/
            ?>
    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height :400px">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo  $title ?></a></h4>
              <p class="description"><?php echo $description ?></p>
              <p class="date" style="padding-top:15px;"> <b> By: </b> <?php echo "  $name" ?> 
                 <br> <b> Price: </b> <?php echo "  $price" ?> SR  </p>    <br>
  
                
            </div>
          </div>
            <?php
          };

        ?>
        <!--
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">HTML5 Developer</a></h4>
              <p class="description">
              Top companies and start-ups choose Toptal HTML5 freelancers for their mission-critical software projects.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Adobe Software Engineer</a></h4>
              <p class="description">
              Toptal is a marketplace for top Adobe Software Engineers. Top companies and start-ups choose Toptal Adobe freelancers for their mission-critical software projects.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Security Engineer</a></h4>
              <p class="description">
              Toptal is a marketplace for top Security Engineers. Top companies and start-ups choose Toptal Security Engineers freelancers for their mission-critical software projects.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Blockchain Developer</a></h4>
              <p class="description">
              Top companies work with Toptal blockchain engineers to launch ICOs, write smart contracts, create Dapps, and more.
              </p>
            </div>
          </div> -->
          <div data-aos="fade-up" style="padding-top:20px; text-align:center">
            <button type="button" id="more" class="btn btn-outline-info" onclick="window.location.href='sercives.php'">More Services</button>
          </div>
        </div>
        
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Blogs Section ======= -->
    <section id="blogs" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Blogs</h2>
          
          <p>The Toptal Engineering Blog is a hub for in-depth development tutorials <br> band new technology announcements created by br professional <br> software engineers in the Toptal network.</p>

        </div>

        <div class="row">

        <?php
        $blogs= mysqli_query($conn,"SELECT * FROM `blog` ORDER BY 'date' LIMIT 4");
        while ($blog = mysqli_fetch_assoc($blogs)) {
          $shortDescription=$blog['shortDescription'];
          $category=$blog['category'];
          $date=$blog['date'];
          $developerId=$blog['developerId'];
          $title=$blog['title'];
          $developer= mysqli_query($conn,"SELECT * FROM `developer` WHERE `Id`='$developerId'");
          $developer= mysqli_fetch_assoc($developer);
          $name=$developer['name'];
?>
        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height :450px">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo  $title ?></a></h4>
              <p class="description"><?php echo $shortDescription ?></p>
              <p class="date" style="padding-top:15px;"> <b> By: </b> <?php echo "  $name" ?> 
                <br> <b> Date: </b> <?php echo "  $date" ?>   </p>
            </div>
          </div>
          
          <?php
                  };
                  ?>
                  
            
        <!--
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="padding-bottom:0px">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Creating Live Dashboards With Airtable and React</a></h4>
              <p class="description">
              <p class="show-read-more">
                  Reporting and visualizing data is crucial to businesses of all sizes. Dashboards allow users to efficiently access and use this data for a range of business operations
                  In this article, Toptal Full-stack Engineer Dylan Golow demonstrates how he created a powerful dashboard for telemedicine using Airtable,
                   Typeform, and React
                  </p>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="padding-bottom:0px">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Adobe Software Engineer</a></h4>
              <p class="description">
              <p class="show-read-more">
                  Reporting and visualizing data is crucial to businesses of all sizes. Dashboards allow users to efficiently access and use this data for a range of business operations
                  In this article, Toptal Full-stack Engineer Dylan Golow demonstrates how he created a powerful dashboard for telemedicine using Airtable,
                   Typeform, and React
                  </p>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="padding-bottom:0px">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Building a Node.js/TypeScript REST API</a></h4>
              <p class="description">
              <p class="show-read-more">
                  Reporting and visualizing data is crucial to businesses of all sizes. Dashboards allow users to efficiently access and use this data for a range of business operations
                  In this article, Toptal Full-stack Engineer Dylan Golow demonstrates how he created a powerful dashboard for telemedicine using Airtable,
                   Typeform, and React
                  </p>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="padding-bottom:0px">
              <div class="icon">
              <i class="bx bx-world"></i>
              </div>
              <h4 class="title"><a href="">Machine Learning Number Recognition</a></h4>
              <p class="description">
              <p class="show-read-more">
                  Reporting and visualizing data is crucial to businesses of all sizes. Dashboards allow users to efficiently access and use this data for a range of business operations
                  In this article, Toptal Full-stack Engineer Dylan Golow demonstrates how he created a powerful dashboard for telemedicine using Airtable,
                   Typeform, and React
                  </p>
              </p>
            </div>
          </div>-->
          <div style="padding-top:20px; text-align:center;">
            <button type="button" id="more" class="btn btn-outline-info" onclick="window.location.href='bogs.php'">More Blogs</button>
          </div>
          
        </div>
      </div>
    </section><!-- End Blogs Section -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">
          <div data-aos="fade-up" data-aos-delay="300" style="align-content: center; width:80%">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="padding-left:26%; ">
              <div class="form-group" >
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container text-center">
      <div class="row d-flex align-items-center">
       
          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>

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

  <!-- Script -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $(document).ready(function(){
      // var n = 3 ; 
      // if (n == 2) {
        $('.counter-value').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            },{
                duration: 3500,
                easing: 'swing',
                step: function (now){
                    $(this).text(Math.ceil(now));
                }
            });
        }); 
      // }
    });

  </script>

  <script>
    $(document).ready(function(){
    var maxLength = 100;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append('<p style="display:inline" class="read-more">...</p>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>