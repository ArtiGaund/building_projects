<?php include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>PROPERTY FOR RENT</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/booking.css">

	<script src="js/jquery.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
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
	</head>
<body class="index-2">
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
					<h1><a href="index.php">Point<span>Design Studio</span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.php" style="font-size:35px;color:white;">HOME</a></li>
							<li class="current"><a href="index-1.php" style="font-size:35px;color:white;">SERVICES</a>
							<ul>
											<li><a href="buy.php" style="font-size:20px;color:white;">BUY</a></li>
											<li><a href="rent.php" style="font-size:20px;color:white;">RENT</a></li>
											<li><a href="sell.php" style="font-size:20px;color:white;">SELL</a></li>
							</ul>
							</li>
							<li><a href="index-2.php" style="font-size:35px;color:white;">PROJECTS</a></li>
							<li><a href="index-3.php" style="font-size:35px;color:white;">LOGIN</a></li>
							<li><a href="index-4.php" style="font-size:35px;color:white;">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div class="body-content">
<div class="module">
<h1>PROPERTY ON RENT</h1>
<form class="form" action="form_buy.php" method="post" enctype="multipart/form-data">
<div class="register-input">
<input type="text" placeholder="enter customer name" name="username">
</div>
<div class="register-input">
<input type="text" placeholder="enter email" name="email">
</div>
<div class="register-input">
<select name="name_of_property" class="selection">
<option value="select property name" class="selection" >select property name</option>
<option value="coconut tree cottage" class="selection">coconut tree cottage</option>
<option value="diamond hill cottage" class="selection">diamond hill cottage</option>
<option value="white cottage" class="selection">white cottage</option>
<option value="esha nagar cottage" class="selection">esha nagar cottage</option>
<option value="santi bhawan colony" class="selection">santi bhawan colony</option>
<option value="rose bank colony" class="selection">rose bank cottage</option>
<option value="woodland cottage" class="selection">woodland cottage</option>
<option value="stony field cottage" class="selection">stony field cottage</option>
</select>
</select>
</select>
</select>
</select>
</select>
</select>
</select>
</div>
<div class="register-input">
<input type="text" placeholder="enter customer contact no." name="mobile_no">
</div>
<div class="register-input">
<select name="address" class="selection">
<option value="select property location" class="selection" >select property location</option>
<option value="shivpuri highway" class="selection">shivpuri highway</option>
<option value="orcha highway" class="selection">orcha highway</option>
<option value="medical" class="selection">medical</option>
<option value="kanpur road" class="selection">kanpur road</option>
<option value="near banker colony" class="selection">near banker colony</option>
</select>
</select>
</select>
</select>
</select>
</div>
<div class="register-input">
<input type="text" placeholder="enter property cost" name="property_cost">
</div>
<div class="register-input">
<label>Select property picture:</label>
<input type="file" name="image">
</div>
<input type="submit" value="Take It On Rent" name="rent_now" class="buy_now">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="CANCEL" name="cancel" class="cancel">
</div>
</form>
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
if(isset($_POST['rent_now']))
{
	$customer_name=$_POST['username'];
	$email=$_POST['email'];
	$name_of_property=$_POST['name_of_property'];
	$mobile_no=$_POST['mobile_no'];
	$address=$_POST['address'];
	$property_cost=$_POST['property_cost'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
 
	if($customer_name=='')
{
	echo "<script>window.open('form_rent.php?customer name=customer name is required','_self')</script>";
	exit();
}
if($email=='')
{
	echo "<script>window.open('form_rent.php?email=email is required','_self')</script>";
	exit();
}
if($name_of_property=='NULL')
{
	echo "<script>window.open('form_rent.php?name of property=name is required','_self')</script>";
	exit();
}
if($mobile_no=='')
{
	echo "<script>window.open('form_rent.php?mobile_no=mobile_no is required','_self')</script>";
	exit();
}
if($address=='NULL')
{
	echo "<script>window.open('form_rent.php?address=address is required','_self')</script>";
	exit();
}
if($property_cost=='')
{
	echo "<script>window.open('form_rent.php?address=address is required','_self')</script>";
	exit();
}
$q="select * from sign_up where email='$email'";
$r=mysql_query($q);
if($row=mysql_num_rows($r)>0)
{
	$query1="insert into property_on_rent(username,email,name_of_property,mobile_no,property_location,property_cost,image)values('$customer_name','$email','$name_of_property','$mobile_no','$address','$property_cost','$image')";
	$run1=mysql_query($query1);
	if($run1)
	{
		echo "<script>window.open('rent.php?booking=booking completed!','_self')</script>";
	exit();
	}
	
    else{
	echo  "<script>alert('booking failed')</script>";
	exit();
     }
}
else{
	echo "<script>window.open('index-3.php?register=customer is not registered!','_self')</script>";
	exit();
}
}
?>