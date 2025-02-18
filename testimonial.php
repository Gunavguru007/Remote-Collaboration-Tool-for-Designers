<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <title> Cafeesa| PRAROZ </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  
  <!-- header section start -->

  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a href="index.php" class="navbar-brand">
          <span>Cafeesa</span>
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
              <a href="testimonial.PHP">Testimonial</a>
              <a href="Login&signup.php">Login & Sign up</a>
            </div>
          </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- End of header section -->

  <!-- Testimonial section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>What says our client</h2>
      </div>
      <div class="carousel slide" id="carouselExampleControls" data-ride:="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>Minim Valett</h4>
                <p>Since mid-March, companies all over the world have moved to remote work to help prevent the spread of Covid-19. To understand how teams are continuing to bridge the distance, we’ve been interviewing organisations that collaborate with their clients via Slack Connect, the secure way to work with multiple organisations in the same Slack channel and Slack workspace.

                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.png" alt="">
              </div>
              <div class="detail-box">
                <h4>Élisabeth Borne</h4>
                <p>Since 2010, our global team of researchers has been studying MG Collaboration Finacle MG Collaboration around the world, aggregating massive amounts of data points that form the basis of our forecast assumptions and perhaps the rise and fall of certain vendors and their products on a quarterly basis.

                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a href="#carouselExampleControls" class="carousel-control-prev" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#carouselExampleControls" class="carousel-control-next" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of client section -->


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