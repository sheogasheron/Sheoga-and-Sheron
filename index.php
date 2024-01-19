<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
   // Your existing code here

    $to = "tatenda@gmail.com"; // Your email address
    $subject = "Wedding RSVP";
    
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = "Hello, Sheron and Sheoga. I will be attending the wedding with my family.";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    // Redirect after sending the email
    header("Location: thank-you.html");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wedding Invite</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  
  
  <style>
    body {
     /*  background-color: #B76E79; Replace with your preferred rose gold color code */
      
      background-image: url('assets/img/rose3.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      
      
    }
  </style>
  
  
  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Sheoga & Sheron <br></br> Wedding Invite</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
         
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Welcome</span></a></li>
          <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Sheoga</span></a></li>
        
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sheron</span></a></li>
         <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Details</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>RSVP</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Sheoga & Sheron</h1>
      <p>You're Invited to our <span class="typed" data-typed-items="Wedding, Wedlock, Ceremony, Celebration"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Bridegroom - Sheoga </h2>
          <p> <strong>The last son of the late Mr Henry Chikwanda and Mrs Lucia Chikwanda.</strong> </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/man.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
         
             
   
        <h2> Bible Verse</h2>
        
          
            <p class="fst-italic">
                   <br></br>
          <strong>  He who finds a wife finds a good thing and receives favor from the Lord
            
            </strong>
            </p>
         
            <div class="row">
              <div class="col-lg-6">
                
              </div>
              <div class="col-lg-6">
                
              </div>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End Facts Section -->

    
   <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <h2>Bride - Sheron</h2>
      <p><strong>The last daughter of the late Mr Amos Mawoni and Mrs Dorcas Mawoni.</strong></p>
    </div>
    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3> Bible Verse</h3>
        <p class="fst-italic"> <br></br>
         <strong>  I have found the one whom my soul loves.- Song of Solomon 3:4 </strong>
        </p>
        <br></br>
       

        <div class="row">
          <div class="col-lg-6">

          </div>
          <div class="col-lg-6">

          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

 <!--<div class="row">-->
 <!--   <h2> Dearly Beloved</h2>-->
 <!--       <p class="fst-italic">-->
 <!--         Sheoga & Sheron kindly request your presence at their wedding celebration <br></br>-->
 <!--       </p>-->
 <!--</div>-->


 <!-- ======= invite ======= -->
    <section id="invite" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Dearly Beloved </h2>
         <p class="fst-italic">
          <strong>Sheoga & Sheron kindly request your presence at their wedding celebration</strong> <br></br>
        </p>
        </div>
        </div> 
        </section>
        
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Wedding Details </h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Venue</a></h4>
            <p class="description"><strong>Umwinzii </strong>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href=""><strong>Colors</strong></a></h4>
            <p class="description"><strong>Champagne <br></br> Rose Gold  <br></br> Bright Navy Blue </strong>

              
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Directions</a></h4>
            <p class="description"><strong>Google maps Below</strong>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href=""><strong>Dress Code</strong></a></h4>
            <p class="description">
                           
              <b>Ladies:</b><br></br>
              
              <strong>Elegant evening gowns or cocktail dresses.</strong><br></br>
              
              <b>Gentlemen:</b><br></br>
              
             <strong> Tuxedos or dark suits.</strong><br></br>
          
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href=""><strong>Date</strong></a></h4>
            <p class="description"><strong> Saturday, April 13, 2024</strong></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href=""><strong>Time</strong></a></h4>
            <p class="description"><strong>Time: 14:00 PM</strong></p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

   

  <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-title">
      <h2>Contact</h2>
      <p><strong>Feel free to contact us with any questions or to share your excitement about the upcoming wedding. We look forward to hearing from you!</strong></p>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Harare, Zimbabwe</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>sheogasheron@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p> +263 774 092 878 / +263 77 565 3136</p>
          </div>

          <div class="whatsapp">
            <i class="bi bi-whatsapp"></i>
            <h4>WhatsApp:</h4>
            <p>Scan the QR code below or <a href="https://wa.link/zhh3gx" target="_blank">click here</a>.</p>
            <!-- Replace the src attribute with your actual QR code image link -->
            <img src="assets/img/sheoga.png" alt="WhatsApp QR Code" style="width: 200px; height: 200px;">
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.447318141146!2d31.027510914770944!3d-17.802687387162246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x195eacfb740ae5b7%3A0xed6a0d54f63e6ac9!2s298%2C%20Carrick%20Creagh%20Rd%2C%20Harare!5e0!3m2!1sen!2s!4v1642072923839!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

        </div>
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
       <!-- Your HTML document structure -->

<form action="sendemail.php" method="post" role="form" class="php-email-form">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="fullname">Your Full Name</label>
      <input type="text" name="fullname" class="form-control" id="fullname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Your Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" rows="6" readonly>Hello, Sheron and Sheoga. I will be attending the wedding with my family.</textarea>
  </div>
  <div class="text-center">
      <input type="hidden" name="submit" value="1">
  <div class="text-center">
    
    
    <a href="https://wa.link/zhh3gx" class="text-center">
  <button type="button" class="btn btn-primary text-center" >Send Message</button>
</a>
    
  </div>
      
    <!--<button type="submit" name ="submit">Send Message</button>-->
  </div>
</form>

<!-- The rest of your HTML document -->

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        <!--Designed by <a href="https://tatendamawayadev.github.io/website/">Tatenda Mawaya</a>-->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>