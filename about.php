<?php
include 'connection.php';
$query2 = "SELECT * FROM information";
$results = mysqli_query($conn, $query2);

if (mysqli_num_rows($results) > 0) {

  $row = mysqli_fetch_assoc($results);
  $mission = $row['mission'];
  $vision = $row['vision'];
} else {

  die("Error: Not found.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LXEVENTSPRO - About</title>
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

  <style>
    button {
      font-size: 14px;
      color: #ffffff;
      background: #d10707;
      padding: 10px 30px;
      box-shadow: #ffffff 0px 0px 0px 0px;
      border-radius: 50px;
      transition: 1000ms;
      transform: translateY(0);
      flex-direction: row;
      align-items: center;
      cursor: pointer;
      outline-style: none;
      text-decoration: none;
      margin-bottom: 30px;

    }

    button:hover {
      background-color: #a10606;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="admin.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/lxlogo.png" alt="">
        <!-- <i class="bi bi-camera"></i> -->
        <h1>LX EVENTS PRO</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="admin.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!-- Gallery Drop down -->

          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <!-- <li><a href="login.php">Manager</a></li> -->
          <li><a href="logout.php">Logout</a></li>
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

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p>LX Events Pro is an event solution company that provides Audio, Lighting, LED Wall, Trusses, Roofing</p>

            <!-- <a class="cta-btn" href="contact.html">INQUIRE</a> -->

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/lxlogo.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $editedmission = $_POST['mission'];
              $editedvision = $_POST['vision'];

              $kyuel = "UPDATE information SET mission = '$editedmission', vision = '$editedvision'";
              if (mysqli_query($conn, $kyuel)) {
                echo "updated successfully.";
              } else {
                echo "Error: " . mysqli_error($conn);
              }
            }
            ?>
            <h2>Our Mission & Vision</h2>
            <form method="post" action="infoupdate.php">
              <p class="fst-italic py-3">
                <!-- Trojan Darcen -->
              </p>

              <ul>
                <li>
                  <i class="aboutinfo"></i>
                  <div>
                    <h3>Mission</h3>
                    <label for="mission"></label>
                    <textarea class="editable" name="mission" style="width: 700px; height: 150px;"><?php echo $mission; ?></textarea>
                  </div>
                </li>
                <li>
                  <i class="aboutinfo"></i>
                  <div>
                    <h3>Vision</h3>
                    <label for="vision"></label>
                    <textarea class="editable" name="vision" style="width: 700px; height: 150px; "><?php echo $vision; ?></textarea>
                  </div>
                </li>
              </ul>
              <button class="save-button" onclick="saveChanges()">Save</button>
            </form>
          </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <!-- <div class="section-header">
          <h2>Reviews</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div> -->
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <!-- <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div> -->
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <!-- <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div> -->
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <!-- <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div> -->
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <!-- <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div> -->
      </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
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