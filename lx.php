<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LX EVENTS PRO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/lxlogo.png" rel="icon">
  <link href="assets/img/lxlogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="lx.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/lxlogo.png" alt=""> 
        <!-- <i class="bi bi-camera"></i> -->
        <h1>LX EVENTS PRO</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="lx.php" class="active">Home</a></li>
          <li><a href="about2.php">About</a></li>
          <!-- Gallery Drop down -->
          <li><a href="services2.php">Services</a></li>
          <li><a href="contact2.php">Contact</a></li>
          <li><a href="login.php">Manager</a></li>
          <!-- <li><a href="logout.php">Logout</a></li> -->
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://www.facebook.com/lxeventspro" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/lxeventspro/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><span>LX EVENTS PRO</span></h2>
          <p>Audio - Lighting - Video - Stage - Riggings</p>
          <a href="contact.php" class="btn-get-started">Inquire</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <?php

$sql = "SELECT * FROM services";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
  // Loop through the rows and display the data
  while ($row = mysqli_fetch_assoc($result)) {
    $sID = $row['sID'];
    $photo = $row['photo'];
 
          echo '<div class="col-xl-3 col-lg-4 col-md-6">';
           echo '<div class="gallery-item h-100">';
           echo "<img src='assets/img/$photo' class='img-fluid' alt='Product Photo'>";
             echo '<div class="gallery-links d-flex align-items-center justify-content-center">';
               echo "<a href='assets/img/$photo' title='$photo' class='glightbox preview-link'><i class='bi bi-arrows-angle-expand'></i></a>";
              //  echo '<a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>';
               echo '</div>';
               echo '</div>';
               echo '</div>';
  }
  mysqli_free_result($result);
      } else {
        // Handle the error if the query fails
        echo "Error: " . mysqli_error($conn);
      }

      // Close the database connection
      // mysqli_close($conn);
            ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LX EVENTS PRO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>