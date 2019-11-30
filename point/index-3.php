<?php include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Jquery slideshow" />
	
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact-form.css">
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
	<style>
	.body {
  background: #e9e9e9;
  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height:1200px;
}

/* Pen Title */
.pen-title {
  padding: 50px 0;
  text-align: center;
  letter-spacing: 2px;
}
.pen-title h1 {
  margin: 0 0 20px;
  font-size: 48px;
  font-weight: 300;
}
.pen-title span {
  font-size: 12px;
}
.pen-title span .fa {
  color: #ed2553;
}
.pen-title span a {
  color: #ed2553;
  font-weight: 600;
  text-decoration: none;
}

/* Rerun */
.rerun {
  margin: 0 0 30px;
  text-align: center;
  
}
.rerun a {
  cursor: pointer;
  display: inline-block;
  background: #ed2553;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  padding: 10px 20px;
  color: #ffffff;
  text-decoration: none;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
 
}
.rerun a:hover {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

/* Scroll To Bottom */
#codepen, #portfolio {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: #363636;
  width: 56px;
  height: 56px;
  border-radius: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  color: #ffffff;
  text-align: center;
}
#codepen i, #portfolio i {
  line-height: 56px;
}
#codepen:hover, #portfolio:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}

/* CodePen */
#portfolio {
  bottom: 96px;
  right: 36px;
  background: #ed2553;
  width: 44px;
  height: 44px;
  -webkit-animation: buttonFadeInUp 1s ease;
  animation: buttonFadeInUp 1s ease;
}
#portfolio i {
  line-height: 44px;
}

/* Container */
.container {
  position: relative;
  max-width: 460px;
  width: 100%;
  margin: 0 auto 100px;
}
.container.active .card:first-child {
  background: #f2f2f2;
  margin: 0 15px;
}
.container.active .card:nth-child(2) {
  background: #fafafa;
  margin: 0 10px;
}
.container.active .card.alt {
  top: 20px;
  right: 0;
  width: 100%;
  min-width: 100%;
  height: auto;
  border-radius: 5px;
  padding: 60px 0 40px;
  overflow: hidden;
}
.container.active .card.alt .toggle {
  position: absolute;
  top: 40px;
  right: -70px;
  box-shadow: none;
  -webkit-transform: scale(10);
  transform: scale(10);
  -webkit-transition: -webkit-transform .3s ease;
  transition: -webkit-transform .3s ease;
  transition: transform .3s ease;
  transition: transform .3s ease, -webkit-transform .3s ease;
}
.container.active .card.alt .toggle:before {
  content: '';
}
.container.active .card.alt .title,
.container.active .card.alt .input-container,
.container.active .card.alt .button-container {
  left: 0;
  opacity: 1;
  visibility: visible;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.container.active .card.alt .title {
  -webkit-transition-delay: .3s;
          transition-delay: .3s;
}
.container.active .card.alt .input-container {
  -webkit-transition-delay: .4s;
          transition-delay: .4s;
}
.container.active .card.alt .input-container:nth-child(2) {
  -webkit-transition-delay: .5s;
          transition-delay: .5s;
}
.container.active .card.alt .input-container:nth-child(3) {
  -webkit-transition-delay: .6s;
          transition-delay: .6s;
}
.container.active .card.alt .button-container {
  -webkit-transition-delay: .7s;
          transition-delay: .7s;
}

/* Card */
.card {
  position: relative;
  background: #ffffff;
  border-radius: 5px;
  padding: 60px 0 40px 0;
  box-sizing: border-box;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-transition: .3s ease;
  transition: .3s ease;
  /* Title */
  /* Inputs */
  /* Button */
  /* Footer */
  /* Alt Card */
}
.card:first-child {
  background: #fafafa;
  height: 10px;
  border-radius: 5px 5px 0 0;
  margin: 0 10px;
  padding: 0;
}
.card .title {
  position: relative;
  z-index: 1;
  border-left: 5px solid #ed2553;
  margin: 0 0 35px;
  padding: 10px 0 10px 50px;
  color: #ed2553;
  font-size: 32px;
  font-weight: 600;
  text-transform: uppercase;
}
.card .input-container {
  position: relative;
  margin: 0 60px 50px;
}
.card .input-container input {
  outline: none;
  z-index: 1;
  position: relative;
  background: none;
  width: 100%;
  height: 60px;
  border: 0;
  color: #212121;
  font-size: 24px;
  font-weight: 400;
}
.card .input-container input:focus ~ label {
  color: #9d9d9d;
  -webkit-transform: translate(-12%, -50%) scale(0.75);
          transform: translate(-12%, -50%) scale(0.75);
}
.card .input-container input:focus ~ .bar:before, .card .input-container input:focus ~ .bar:after {
  width: 50%;
}
.card .input-container input:valid ~ label {
  color: #9d9d9d;
  -webkit-transform: translate(-12%, -50%) scale(0.75);
          transform: translate(-12%, -50%) scale(0.75);
}
.card .input-container label {
  position: absolute;
  top: 0;
  left: 0;
  color: #757575;
  font-size: 24px;
  font-weight: 300;
  line-height: 60px;
  -webkit-transition: 0.2s ease;
  transition: 0.2s ease;
}
.card .input-container .bar {
  position: absolute;
  left: 0;
  bottom: 0;
  background: #757575;
  width: 100%;
  height: 1px;
}
.card .input-container .bar:before, .card .input-container .bar:after {
  content: '';
  position: absolute;
  background: #ed2553;
  width: 0;
  height: 2px;
  -webkit-transition: .2s ease;
  transition: .2s ease;
}
.card .input-container .bar:before {
  left: 50%;
}
.card .input-container .bar:after {
  right: 50%;
}
.card .button-container {
  margin: 0 60px;
  text-align: center;
}
.card .button-container button {
  outline: 0;
  cursor: pointer;
  position: relative;
  display: inline-block;
  background: 0;
  width: 240px;
  border: 2px solid #e3e3e3;
  padding: 20px 0;
  font-size: 24px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  overflow: hidden;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.card .button-container button span {
  position: relative;
  z-index: 1;
  color: #ddd;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.card .button-container button:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  background: #ed2553;
  width: 30px;
  height: 30px;
  border-radius: 100%;
  margin: -15px 0 0 -15px;
  opacity: 0;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.card .button-container button:hover, .card .button-container button:active, .card .button-container button:focus {
  border-color: #ed2553;
}
.card .button-container button:hover span, .card .button-container button:active span, .card .button-container button:focus span {
  color: #ed2553;
}
.card .button-container button:active span, .card .button-container button:focus span {
  color: #ffffff;
}
.card .button-container button:active:before, .card .button-container button:focus:before {
  opacity: 1;
  -webkit-transform: scale(10);
  transform: scale(10);
}
.card .footer {
  margin: 40px 0 0;
  color: #d3d3d3;
  font-size: 24px;
  font-weight: 300;
  text-align: center;
}
.card .footer a {
  color: inherit;
  text-decoration: none;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.card .footer a:hover {
  color: #bababa;
}
.card.alt {
  position:absolute;;
  top: 40px;
  right: -70px;
  z-index: 5;
  width: 140px;
  height: 140px;
  background: none;
  border-radius: 100%;
  box-shadow: none;
  padding: 0;
  -webkit-transition: .3s ease;
  transition: .3s ease;
  /* Toggle */
  /* Title */
  /* Input */
  /* Button */
}
.card.alt .toggle {
  position: relative;
  background: #ed2553;
  width: 140px;
  height: 140px;
  border-radius: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  color: #ffffff;
  font-size: 58px;
  line-height: 140px;
  text-align: center;
  cursor: pointer;
}
.card.alt .toggle:before {
  content: '\f040';
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
}
.card.alt .title,
.card.alt .input-container,
.card.alt .button-container {
  left: 100px;
  opacity: 0;
  visibility: hidden;
}
.card.alt .title {
  position: relative;
  border-color: #ffffff;
  color: #ffffff;
}
.card.alt .title .close {
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 60px;
  display: inline;
  color: #ffffff;
  font-size: 58px;
  font-weight: 400;
}
.card.alt .title .close:before {
  content: '\00d7';
}
.card.alt .input-container input {
  color: #ffffff;
}
.card.alt .input-container input:focus ~ label {
  color: #ffffff;
}
.card.alt .input-container input:focus ~ .bar:before, .card.alt .input-container input:focus ~ .bar:after {
  background: #ffffff;
}
.card.alt .input-container input:valid ~ label {
  color: #ffffff;
}
.card.alt .input-container label {
  color: rgba(255, 255, 255, 0.8);
}
.card.alt .input-container .bar {
  background: rgba(255, 255, 255, 0.8);
}
.card.alt .button-container button {
  width: 100%;
  background: #ffffff;
  border-color: #ffffff;
}
.card.alt .button-container button span {
  color: #ed2553;
}
.card.alt .button-container button:hover {
  background: rgba(255, 255, 255, 0.9);
}
.card.alt .button-container button:active:before, .card.alt .button-container button:focus:before {
  display: none;
}

/* Keyframes */
@-webkit-keyframes buttonFadeInUp {
  0% {
    bottom: 30px;
    opacity: 0;
  }
}
@keyframes buttonFadeInUp {
  0% {
    bottom: 30px;
    opacity: 0;
  }
}

	</style>
	</head>
<body class="index-3" style="background-color:transparent;margin:auto">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container" style="margin-right:700px;">
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
							<li ><a href="index-4.php" style="font-size:35px;color:white;">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->
<!-- Mixins-->
<!-- Pen Title-->
<div class="body"><img src="images/image97.jpeg" style="width:100%;height:1200px;" />
<div class="pen-title" style="margin-top:-1200px;" >
  <h1 style="font-weight:bold; font-family:LEHN086; color:rgb(143,57,90);"><u>Login Form</u></h1>
</div>
<div class="rerun"><a href="adminlogin.php">Go to admin login</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="index-3.php" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="email"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="login"><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="index-3.php" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="username"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="email"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
	        <div class="input-container">
        <input type="password" id="#{label}" required="required" name="password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="c_password"/>
        <label for="#{label}">confirm Password</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <select type="#{type}" id="#{label}" required="required" name="menu" style="width:350px;height:60px;"/>
        <label for="#{label}"  style="font-size:20px;">I am</label>
		<option style="font-size:20px;">I am</option>
		<option value="female" style="font-size:20px;">Female</option>
		<option value="male" style="font-size:20px;">Male</option>
		</select>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="mobile_no"/>
        <label for="#{label}">Mobile no</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="register"><span>Next</span></button>
      </div>
    </form>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	</div>
	<hr style="width:119%; margin:20px 0px 0px -255px; height:3px;">
     <div style="height:300px;width:50%;background-color::#ffd;" ></div>
	 </height>
								<header style="margin-top:0px;">
							<div style="background-color:#fff; height:55px;margin-top:-300px;"><h4 style="margin-top:30px;">OUR TEAM EXPERTS</h4></div>
							<hr></hr>
						</header>			
                        <div class="img_block"><img style="height:250px; width:200px;margin-top:20px;" src="images/rsz_2arti1.png" alt></div>
						<p class="first" style="margin-left:215px; margin-top:-200px;">Hello Everyone,</p>
						<h5 class="second" style="margin-left:320px; margin-top:20px;">My View:The industry works with some of society's largest assests but is constantly challenged by limited access to liquidity and fluctuating profitability levels.Other industry hurdles include an increasingly recognised need for readjustment and development,and-particularly within building and construction-a need for optimisation towards industriation to reduce the scope for errors and defects,and increase earnings.</h5>
						<p class="third" style="margin-left:320px; margin-top:-6px;">Our Real Estate and construction law group includes some denmark's leading legal advisers in this area,who draw on extensive experience to deliver industry-oriented,holistic advice.We have been involved in both small and large matters to create solutions for clients.While many have an opinion on real estate,we have knowledge about all aspects of it-including buying and selling,leasing,development projects,and the public rules restricting the use of real estate.
                             
Building and construction projects,includeng infrastruction projects,generally struggle to satisfy the need for adaption and face difficulties in generating adequate returns,often as a result of the complex conditions in the industry. Our team of highly experienced lawyers can guide clients through the complexicities and provide useful advice tailored to their specific needs.Some of the challenges typically faced in this industry arice from a lack of preparation ,difficult tenders,unclear contracts,and poor risk management.We can help our clients reach sensible,well-reasoned solutions in collaboration with their other advisers and their own staff.</p>
   <div class="img_block"><img style="height:200px; width:200px;margin-top:10px;" src="images/manu1.jpg" alt></div>
						<p class="first" style="margin-left:215px; margin-top:-200px;">Hello Everyone,</p>
						<h5 class="second" style="margin-left:320px; margin-top:20px;">My View: What REITs mean for Indian real estate</h5>
						<p class="third" style="margin-left:320px; margin-top:-6px;">he real estate sector in India has been lucrative for savvy investors over the last decade, but it has not been without accompanying uncertainties. The introduction of REITs (Real Estate Investment Trusts) will open up a platform that will allow all kinds of investors – even those with smaller budgets - to make safe and rewarding investments into the Indian real estate market. The best thing about REIT is that investors can start with as small a sum as Rs. 2 lakh to secure units in exchange.
                             
The REIT platform has already been approved by the Securities and Exchange Board of India (SEBI) and like mutual funds, it will pool the money from all investors across the country. The money collected from the REIT funds will subsequently be invested in commercial properties to generate income.</p>
					                     
<!--=======footer=================================-->
	<footer id="footer">
		<div class="container" >
			<div class="row" style="margin-top:100px;">
				<div class="grid_12" style="margin-left:-300px;  height:20px;">
					<div class="copyright" style="margin-top:100px; width:111.8%;">
						<pre style="font-weight:bold;">© <span id="copyright-year"></span> |  Privacy Policy</pre>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bottom" style="background-color:white;"><a href="http://www.csaist.org" rel="nofollow"><img src="images/logo1.png" alt="logo"></a></div>
	</footer>	
</body>
</html>
	<?php
	session_start();
if(isset($_POST['login']))
{
	$email=$_SESSION['email']=$_POST['email'];
$password=$_POST['password'];
$query="select * from sign_up where email='$email' and password='$password'";
	$run1=mysql_query($query);
	if(mysql_num_rows($run1)>0)
	{
		echo "<script>window.open('buy.php?login=user login','_self')</script>";
		exit();
	}
	else
	{
		echo "<script>alert('login failed')</script>";
	}
}
?>
<?php 


if(isset($_POST['register']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	$i_am=$_POST['menu'];
	$mobile_no=$_POST['mobile_no'];
	if($username=='')
{
	echo "<script>window.open('index-3.php?username=username is required','_self')</script>";
	exit();
}
if($email=='')
{
	echo "<script>window.open('index-3.php?email=email is required','_self')</script>";
	exit();
}
if($password=='')
{
	echo "<script>window.open('index-3.php?password=password is required','_self')</script>";
	exit();
}
if($c_password=='')
{
	echo "<script>window.open('index-3.php?c_password=c_password is required','_self')</script>";
	exit();
}
if($i_am=='null')
{
	echo "<script>window.open('index-3.php?i_am=i_am is required','_self')</script>";
	exit();
}
if($mobile_no=='null')
{
	echo "<script>window.open('index.php?mobile_no=mobile_no is required','_self')</script>";
	exit();
}

	$q="insert into sign_up(username,email,password,c_password,i_am,mobile_no)values('$username','$email','$password','$c_password','$i_am','$mobile_no')";
	$run=mysql_query($q);
 if($run)
 {
	 echo "<script>window.open('index-3.php?login=user login','_self')</script>";
	exit();
 }
}
?>