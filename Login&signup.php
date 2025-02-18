<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content=" Today in this blog you will learn how to create a responsive Login & Registration Form in HTML CSS & JavaScript. The blog will cover everything from the basics of creating a Login & Registration in HTML, to styling it with CSS and adding with JavaScript." />
    <meta name="keywords" content="Animated Login & Registration Form,Form Design,HTML and CSS,HTML CSS JavaScript,login & registration form,login & signup form,Login Form Design,registration form,Signup Form,HTML,CSS,JavaScript," />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Form HTML CSS</title>
    <link rel="stylesheet" href="css/Login&signupstyle.css"/>
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
<body style="background-color:black;">
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

    <section class="wrapper">
        <div class="form signup">
            <header>Signup</header>
            <form action="php/signup_login.php" method="POST">
                <input type="text" name="full_name" placeholder="Full name" required />
                <input type="text" name="email" placeholder="Email address" required />
                <input type="text" name="user_id" placeholder="Create your ID" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="retype_password" placeholder="Retype Password" required />
                <div class="checkbox">
                    <input type="checkbox" id="signupCheck" />
                    <label for="signupCheck">I accept all terms & conditions</label>
                </div>
                <input type="submit" name="signup" value="Signup" style= "background-color:white;" />
            </form>
        </div>

        <div class="form login">
            <header>Login</header>
            <form action="signup_login.php" method="POST">
                <input type="text" name="email" placeholder="Email address" required />
                <input type="text" name="user_id" placeholder="Create your ID" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot password?</a>
                <input type="submit" name="login" value="Login" />
            </form>
        </div>

        <script>
            const wrapper = document.querySelector(".wrapper"),
                signupHeader = document.querySelector(".signup header"),
                loginHeader = document.querySelector(".login header");

            loginHeader.addEventListener("click", () => {
                wrapper.classList.add("active");
            });
            signupHeader.addEventListener("click", () => {
                wrapper.classList.remove("active");
            });
        </script>
    </section>
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
