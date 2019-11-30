<?php include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Jquery slideshow" />
	
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact-form.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/TMForm.js"></script>
	<script src="js/modal.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<style>
.body {
  font-family: "Roboto";
 
}

.back {
  background: -webkit-linear-gradient(342deg, #643986, #98aed5);
  background: linear-gradient(120grad, #643986, #98aed5);
  position: absolute;
  width: 100%;
   height:500px;
   margin-top:0px;
}

.registration-form {
  width: 400px;
  margin-top:500px;
  position: absolute;
  left: 50%;
  -webkit-transform: translate(-50%, 0%);
          transform: translate(-50%, 0%);
  top: 15%;
  background: transparent;
}
.registration-form header {
  position: relative;
  z-index: 4;
  background: white;
  padding: 20px 40px;
  border-radius: 15px 15px 0 0;
}
.registration-form header h1 {
  font-weight: 900;
  letter-spacing: 1.5px;
  color: #333;
  font-size: 23px;
  text-transform: uppercase;
  margin: 0;
}
.registration-form header p {
  word-spacing: 0px;
  color: #9facb6;
  font-size: 17px;
  margin: 0;
  margin-top: 5px;
}
.registration-form form {
  position: relative;
}
.registration-form .input-section {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.registration-form .input-section.folded {
  width: 95%;
  margin-top: 10px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
.registration-form .input-section.folded input {
  background-color: #e9e2c0;
}
.registration-form .input-section.folded span {
  background-color: #e9e2c0;
}
.registration-form .input-section.folded + .folded {
  width: 90%;
  margin-top: 20px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 0;
}
.registration-form .input-section.folded + .folded input {
  background-color: #e1bcef;
}
.registration-form .input-section.folded + .folded span {
  background-color: #e1bcef;
}
.registration-form .input-section.fold-up {
  margin-top: -75px;
}
.registration-form form input {
  background: white;
  color: #8f8fd6;
  width: 80%;
  border: 0;
  padding: 20px 40px;
  margin: 0;
}
.registration-form form input:focus {
  outline: none;
}
.registration-form form input::-webkit-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::-moz-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input:-ms-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::placeholder {
  color: #8f8fd6;
  font-weight: 100;
}

.animated-button {
  width: 20%;
  background-color: #d4d4ff;
}
.animated-button span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  line-height: 75px;
  text-align: center;
  height: 75px;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.animated-button span i {
  font-size: 25px;
  color: #9999f8;
}
.animated-button .next-button {
  background: transparent;
  color: #9999f8;
  font-weight: 100;
  width: 100%;
  border: 0;
}

.next {
  margin-top: -75px;
}

.success {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  background: limegreen;
  margin-top: -75px;
}
.success p {
  color: white;
  font-weight: 900;
  letter-spacing: 2px;
  font-size: 18px;
  width: 100%;
  text-align: center;
}

 </style> 
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie-8.css">
	<![endif]-->
	</head>
<body class="index-4" style="background-color:transparent;margin:auto">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">
						<a href="https://www.facebook.com/"><span class="bd-ra fa fa-facebook"></span></a>
						<a href="https://twitter.com/signup?lang=en"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/up/?continue%3Dhttps://plus.google.com/explore%26gpsrc%3Dgplp0"><span class="bd-ra fa fa-google-plus"></span></a>
					</div>
					<h1><a href="index.html" style="font-family:Agency FB; font-size:90px;">AASHIYANA.COM<span>Real Estate Company</span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.php" style="font-size:35px;color:white;">HOME</a></li>
							<li><a href="index-1.php" style="font-size:35px;color:white;">SERVICES</a>
							<ul>
											<li><a href="buy.php" style="font-size:20px;color:white;">BUY</a></li>
											<li><a href="rent.php" style="font-size:20px;color:white;">RENT</a></li>
											<li><a href="sell.php" style="font-size:20px;color:white;">SELL</a></li>
							</ul>
							</li>
							<li><a href="index-2.php" style="font-size:35px;color:white;">PROJECTS</a></li>
							<li class="current"><a href="index-3.php" style="font-size:35px;color:white;">LOGIN</a></li>
							<li><a href="index-4.php" style="font-size:35px;color:white;">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->
<div class="body">
<div class="back"></div>
<div class="registration-form">
<h1 style="font-size:50px;margin-bottom:90px;">Admin Login Form</h1>
  <header>
    <h1>Sign Up</h1>
    <p>Fill in all informations</p>
  </header>
  <form action="adminlogin.php" method="post">
    <div class="input-section email-section">
      <input class="email" type="text" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off" name="email"/>
      <div class="animated-button"><span class="icon-paper-plane"><i class="fa fa-envelope-o"></i></span><span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section password-section folded">
      <input class="password" type="password" placeholder="ENTER YOUR PASSWORD HERE" name="password"/>
      <div class="animated-button"><span class="icon-lock"><i class="fa fa-lock"></i></span><span class="next-button password"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section repeat-password-section folded">
      <input class="repeat-password" type="password" placeholder="REPEAT YOUR PASSWORD HERE" name="c_password"/>
      <div class="animated-button"><span class="icon-repeat-lock"><i class="fa fa-lock"></i></span><span class="next-button repeat-password"><i class="fa fa-paper-plane"></i></span></div>
    </div>
    <div class="success"> 
      <p><button style="width:400px;height:70px;font-size:25px;background-color:green;border:none;color:white;" name="login">Login To Admin Page</button></p>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>
	</div>
	<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="copyright">
					<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom" style="margin-top:9px; background-color:white;"><a href="http://www.csaist.org" rel="nofollow"><img src="images/logo1.png" alt="logo"></a></div>
</footer>
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>
	</body>
	</html>
	<?php
if(isset($_POST['login']))
{
	$email=$_SESSION['email']=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$query="select * from login where email='$email' and password='$password' and c_password='$c_password'";
	$run=mysql_query($query);
	if(mysql_num_rows($run)>0)
	{
		echo  "<script>window.open('admin.php?login=user login','_self')</script>";
		exit();
	}
	else
	{
		echo "<script>alert('login failed')</script>";
	}
}
?>
	
