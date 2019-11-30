<?php include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>sell</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="css/style1.css">

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
		
		
				setTimeout(function() {
  if (location.hash) {
    window.scrollTo(0, 0);
  }
}, 1);

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
<body class="index-1">
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
					<h1><a href="index.php" style="font-family:Agency FB; font-size:90px;">AASHIYANA.COM<span>Real Estate Company</span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.php" style="font-size:35px;color:white;">Home</a></li>
							<li class="current" style="font-size:35px;color:white;"><a href="index-1.php">SERVICES</a>
							<ul>
											<li><a href="buy.php" style="font-size:20px;color:white;">BUY</a></li>
											<li><a href="rent.php" style="font-size:20px;color:white;">RENT</a></li>
											<li><a href="sell.php" style="font-size:20px;color:white;">SELL</a></li>
							</ul>
							</li>
							<li><a href="index-2.php" style="font-size:35px;color:white;">PROJECT</a></li>
							<li><a href="index-3.php" style="font-size:35px;color:white;">LOGIN</a></li>
							<li><a href="index-4.php" style="font-size:35px;color:white;">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->
<h1 align="center" style="font-weight:bold; font-family:LEHN086; color:rgb(143,57,90);font-size:50px;margin-top:60px;">PROPERTY FOR SELL</h1>
<form action="" method="post">
<div class="buy_body" style="width:100%;height:450px;background-color:grey;margin-top:100px;">
<div id="images-box">
<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:-280px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-1" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image02.jpg" alt="earth!">
			<a class="expand" href="#image-1"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Fulki House</h1></div>
	<div><h1 align="center" style="margin-top:5px;">Rs.50,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="buy on" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-2" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image05.jpg" alt="earth!">
			<a class="expand" href="#image-2"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Aalayam House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.55,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-3" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image07.jpg" alt="earth!">
			<a class="expand" href="#image-3"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Alakpuri House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.68,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:right;margin-top:-40px;margin-right:-250px;border-radius:10px;">
	<div class="holder">
		<div id="image-4" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image11.jpg" alt="earth!">
			<a class="expand" href="#image-4"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Esha House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.70,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
</div>

</div>
<div class="buy_body"  style="width:100%;height:500px;background-color:grey;margin-top:100px;">>
<div id="images-box">
<div id="image_background"  style="width:300px;height:400px;background-color:white;margin-left:-280px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-5" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image15.jpg" alt="earth!">
			<a class="expand" href="#image-5"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Kadamba House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.55,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-6" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image16.jpg" alt="earth!">
			<a class="expand" href="#image-6"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Jagat House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.50,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:left;margin-top:-45px;border-radius:10px;">
	<div class="holder">
		<div id="image-7" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image17.jpg" alt="earth!">
			<a class="expand" href="#image-7"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Glass House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.60,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
	<div id="image_background" style="width:300px;height:400px;background-color:white;margin-left:60px;float:right;margin-top:-40px;margin-right:-250px;border-radius:10px;">
	<div class="holder">
		<div id="image-8" class="image-lightbox">
			<span class="close"><a href="buy.php">X</a></span>
			<img src="images/rsz_image51.jpg" alt="earth!">
			<a class="expand" href="#image-8"></a>
		</div>
	</div>
	<div><h1 align="center" style="margin-top:270px;">Iyla House</h1></div>
		<div><h1 align="center" style="margin-top:5px;">Rs.75,00,000</h1></div>
	<div><h1 align="center"><a href="selldetail.php">Details</a></h1></div>
	<div><input type="submit" value="BUY NOW" name="sell" style="background-color:red;border:none;width:90px;height:35px;margin-left:105px;border-radius:5px;" ></div>
	</div>
</div>
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
if(isset($_POST['sell']))
{
	echo "<script>window.open('form_sell.php?sell=you can add you property to sell now','_self')</script>";
	exit();
}?>