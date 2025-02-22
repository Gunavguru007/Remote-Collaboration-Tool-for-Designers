<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif"/>
  <title>MG Collaboration</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>

</head>

<body>
<!-- header section start -->

  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a href="index.html" class="navbar-brand">
          <span>CMG Collaboration</span>
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
              <a href="index.PHP">Home</a>
              <a href="about.PHP">About</a>
              <a href="book.PHP">Contact US</a>
              <a href="testimonial.PHP">Testimonial</a>
              <a href="Login&signup.PHP">Login & Sign up</a>
            </div>
          </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
<!-- End of header section -->

 <!-- about section -->
 <section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">

        </div>
      </div>
      <div class="col-md-6"><div class="detail-box">
        <div class="heading_container">
          <h2>About Us</h2>
        </div>
        <p>360° value is at the heart of our business
          Every day, the people of MG Collaboration embrace change and create value for all our stakeholders, in every part of the world—we call it 360° value.

        </p>
        <a href="">Read More</a>
      </div></div>
    </div>
  </div>
</section>
<!-- End of about us page -->


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