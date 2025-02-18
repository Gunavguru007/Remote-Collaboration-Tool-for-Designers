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
  <title> MG Collaboration </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
</head>
<style>
      #video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        width: auto; 
        height: auto;
        z-index: -1000; /* Place the video behind everything */
        overflow: hidden;
    }
    #video-background video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
    }
    body{
      color: white;
    }
</style>

<body>
  
  <!-- header section start -->

  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a href="index.php" class="navbar-brand">
          <span style="margin-right: -100%; margin-left:30%; font-size: 100px; margin-top : -100%;font-size: 50px;">MG Collaboration</span>
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

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box" id="video-background">
      <video autoplay loop muted>
        <source src="images/1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-6 ml-auto">
        <div class="detail-box">
          <h1>Welcome To <br>MG Collaboration</h1>
          <p>One of the top consulting firms in India – we are powered by ingenuity and incredible diversity combining innovation, intelligence and expertise.

          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- End of slider section -->

  <!-- Special section -->
  <section class="spcl_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="detail-box">
              <img src="images/s1.png" alt="">
              <h5>Our Cloud Services</h5>
              <p>Cloud services are application and infrastructure resources that exist on the Internet. Third-party providers contract with subscribers for these services, allowing customers to leverage powerful computing resources without having to purchase or maintain hardware and software.

              </p>
            </div>
            <div class="detail-box">
              <img src="images/s2.png" alt="">
              <h5>Our security services</h5>
              <p>Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. These cyberattacks are usually aimed at accessing, changing, or destroying sensitive information; extorting money from users via ransomware; or interrupting normal business processes. Implementing effective cybersecurity measures is particularly challenging today because there are more devices than people, and attackers are becoming more innovative.


              </p>
            </div>
            <div class="detail-box">
              <img src="images/s3.png" alt="">
              <h5>Our Ai services</h5>
              <p>Commit to new vectors of growth as well as supporting long-term digital transformation with Avenga AI services. Tapping into our extensive tech expertise, you can create, maintain, and scale up your Artificial Intelligence (AI) and Machine Learning (ML) solutions while augmenting human capacity and increasing business value.  

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ml-auto">
          <div class="img-box">
            <img src="images/spcl-img.jpg" alt="">
          </div> </div>
      </div>
    </div>
  </section>
  <!-- End of special section -->

  <!-- about section -->
  <section class="about_section layout_padding-bottom">
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
                <h4>Minim Valett</h4>
                <p>If your client has recently transitioned to remote working in the midst of the COVID-crisis, there’s an opportunity to share some of your knowledge around remote working (providing that you’ve been a remote worker for an extended period of time). 

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