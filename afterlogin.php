<!doctype html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>How to Build a Website using HTML CSS | Responsive Web Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <style>
        body {
	margin: 0;
	padding: 0;
	background-color: black;
}
.home {
	
	background-size: cover;
	background-position: center center;
	height: 100vh;
}
nav {
	text-align: center;
	padding-top: 2%;
}
.logo {
	display: inline-block;
	color: #fff;
	text-transform: capitalize;
	font-weight: bold;
	font-size: 40px;
	font-family: 'Cookie', cursive;
}
nav a {
	text-decoration: none;
	color: #fff;
	font-size: 18px;
	text-transform: uppercase;
	margin: 0 25px;
	letter-spacing: 3px;
}
.banner-area {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	width: 100%;
}
.banner-area h3 {
	font-size: 100px;
	text-transform: capitalize;
	color: #fff;
	margin: 0 0 40px 0;
	font-family: cookie;
}
.banner-area h2 {
	margin: 0;
	padding: 0;
	color: #fff;
	font-size: 3em;
	line-height: 0;
}
.banner-area h2 span {
	color: deepskyblue;
}
.banner-area a {
	display: inline-block;
	margin-top: 50px;
	text-decoration: none;
	color: #fff;
	background: deepskyblue;
	padding: 10px 30px;
	font-size: 20px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
@media (max-width:800px) {
	nav a {
		font-size: 11px;
		margin: 0 10px;
	}
	.banner-area h2 {
		font-size: 1.7em;
	}
	.banner-area h3 {
		margin: 0 0 20px 0;
		font-size: 70px;
	}
}  
</style>
</head>
<body>
   <div class="home">
       <nav>
       <a href="Imageeditor.php">Edit Your Image Here</a>
       <a href="afterloginaboutus.php">About Us</a>
       <span class="logo">MG collaboration</span>
       <a href="data.php">See you Art</a>
       <a href="Contact Us.php">contact</a>
	   <a href="createyourprofile.php">Profile</a>
   </nav>
    <div class="banner-area">
       <h3>MG collaboration</h3>
        <h2>I am a <span class="typed2"></span></h2>
        <a href="upload.php">Upload Your Work</a>
    </div>
   </div>
    <script src="js/typed.js"></script>
    <script>
        var typed = new Typed(".typed2", {
            strings: [
                "Photographer",
                "Marketer",
                "Designer"
            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });
    </script>
</body>
</html>

