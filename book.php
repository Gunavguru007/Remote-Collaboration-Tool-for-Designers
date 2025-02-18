<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Us Form in  Html Css</title>
      <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <title>MG Collaboration</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="css/Contact Us.css">
</head>
<body>

<!-- header section start -->
 <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a href="index.php" class="navbar-brand">
          <span>MG Collaboration</span>
        </a>
        <div class="" id="">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
            <span class="s-1"></span>
            <span class="s-2"></span>
            <span class="s-3"></span>
          </button>
          <div class="overlay" id="myNav">
            <div class="overlay-content">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="book.php">Contact US</a>
              <a href="testimonial.php">Testimonial</a>
              <a href="Login&signup.php">Login & Sign up</a>
            </div>
          </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- End of header section -->
    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Contact Us</h2>
                    <form action="php/Contactus.php" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="email" placeholder="Your email">
                        <textarea name="message" placeholder="Your Message"></textarea>                   
             <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="images/bg1.png" alt="">
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
<!DOCTYPE html>
<html>

<!-- start of footer -->
<footer class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-col">
        <div class="footer_content">
          <h4>Reach at...</h4>
          <div class="contact_link_box">
            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>Location</span></a>
            <a href=""><i class="fa fa-phone" aria-hidden="true"></i>
            <span>Call +11 123456789</span></a>
            <a href=""><i class="fa fa-envelop" aria-hidden="true"></i>
            <span>MG Collaboration@gmail.com</span></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 footer-col">
        <div class="footer_detail">
          <a href="" class="footer-logo">
            MG Collaboration
          </a>
          <p>360° value is at the heart of our business Every day, the people of MG Collaboration embrace change and create value for all our stakeholders, in every part of the world—we call it 360° value. 

          </p>
          <div class="footer_social">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 footer-col">
        <div class="map_container">
          <div class="map">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <p>&copy; <span id="displayYear"></span>All Rights Reserved By
      <a href="#">MG Collaboration</a></p>
    </div>
  </div>
</footer>
<!-- end of footer section -->
  

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


</body>

</html>