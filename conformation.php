<?php
session_start();
include("connect.php");

if(ISSET($_POST['sub']))
$_SESSION['id']=$p['hotel_id'];
$id=$_SESSION['id'];
$ml=mysqli_query($conn,"select * from hotel INNER JOIN booking on hotel.hotel_id=booking.id where email='$id'");


  ($p=mysqli_fetch_assoc($ml));
  {
    
  }






 ?>
 

<html lang="en">

<head>
<body background="co.jpg">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KASTURI INN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- =======================================================
  * Template Name: Bethany - v4.10.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
.button {
  position: relative;
  background-color: #009970;
  border: none;
  font-size: 18px;
  color: #FFFFFF;
  padding: 10px;
  width: 150px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  border-radius:20px;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s;
  border-radius:20px;
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>Kausturi INN</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>

            <li><a class="nav-link scrollto " href="index.php#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
            <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Bar</a></li>
                <li><a href="#">Resturant</a></li>
                <li class="dropdown"><a href="#"><span>More Services</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Swimming Pool</a></li>
                    <li><a href="#">Jakuzi</a></li>
                    <li><a href="#">Gym</a></li>
                    <li><a href="#">Tour Guide</a></li>

                  </ul>
                </li>
                <!--<li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>-->
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="logout.php">LOG OUT</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">






    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

          <br><br><br><br>

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic">
                  <center>
                        <img src="./image/<?php echo $p['filename']; ?>" class="img-fluid" alt="" style="border-radius: 70%" height="300px" width="200px">
                        </center>
                  </div>
              </div>
                <br>
                <center><h4><?php echo $p['name']; ?></h4></center>
                  <center><span><?php echo $p['email']; ?></span></center>

            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                  <div class="col-xl-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">


                      <center>
          <table border="0" width="" cellpadding="10px" cellspacing="10px">
             <tr>

             <style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>
<body>
<form action="book_backend.php" method="post" enctype="multipart/form-data">
  <h2><font size="9"> Booking Confirmed</font></h2>
  <br>
  <h2><font size="2">We are placed to inform you that your reservistion request has been recived and confirmed.</font></h2>
<br>
<h2><font size="2">Your booking is comfirmed. THANK YOU!</font> </h2>
  <br>
<h2> Booking Detalis</h2>

<table>
<tr>
 <th>Booking Id </th>
 <th>Check In</th>
 <th>Check Out</th>
 <th>Total Amount</th>
 <th>Status</th>

</tr>
<tr>
   <td>   <?php print_r($p['id']);?>  </td>
   <td>    <?php print_r($p['cin']);?>  </td>
   <td>   <?php print_r($p['cout']);?>   </td>
   <td>   <?php print_r($p['price']);?>  </td>
   <td>   DONE </td>

 </tr>
 <tr>
 <td>   <?php print_r($p['id']);?>  </td>
   <td>    <?php print_r($p['cin']);?>  </td>
   <td>   <?php print_r($p['cout']);?>   </td>
   <td>   <?php print_r($p['price']);?>  </td>
   <td>   DONE </td>

 </tr>
 <tr>
 <td>   <?php print_r($p['id']);?>  </td>
   <td>    <?php print_r($p['cin']);?>  </td>
   <td>   <?php print_r($p['cout']);?>   </td>
   <td>   <?php print_r($p['price']);?>  </td>
   <td>   DONE </td>

 </tr>
 <tr>
   <td> </td>
   <td>     </td>
   <td></td>
   <td>     </td>
   <td>      </td>

 </tr>


          </table>
           </center>

                  </div>
                  </div>


                </div> <!--div class row -->


            </div><!-- End .content-->

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Kausturi INN</h3>
            <p>
              Nimtard <br>
              Mission Road<br>
              Purulia <br>
              West Bengal<br>    <br>
              <strong>Phone:</strong> +91 7980021869<br>
              <strong>Email:</strong> kausturi@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
