<!DOCTYPE html>
<html lang="en">
	<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="css/camera.css">
    <style>
	.img_block img:hover
	{
		height:165px;
		width:200px;
	}
	
	.img_block1 img:hover
	{
		
		border-radius:50% 50%;
		-moz-border-radius:50% 50%;
		-webkit-border-radius:50% 50%;
		height:250px;
		width:250px;
		position:relative;
	}
	.paragraph
	{
		color:#33001a;
		padding-left:20px;
	}
	</style>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
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
	</head>
<body class="index">
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
					<h1><a href="index.php" style="font-family:Agency FB;font-size:90px;">AASHIYANA.COM<span>Real Estate Company</span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li class="current"><a href="index.php">HOME</a></li>
							<li><a href="index-1.php">SERVICES</a>
							<ul>
											<li><a href="buy.php">BUY</a></li>
											<li><a href="rent.php">RENT</a></li>
											<li><a href="sell.php">SELL</a></li>
							</ul>
							</li>
							<li><a href="index-2.php">PROJECT</a></li>
							<li><a href="index-3.php">LOGIN</a></li>
							<li><a href="index-4.php">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>


<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/index_img_slider-1.jpg">
					<div class="camera_caption fadeIn">
						<h3>We’ll make you noticeable</h3>
					</div>
				</div>
				<div class="item" data-src="images/index_img_slider-1.jpg">
					<div class="camera_caption fadeIn">
						<h3>We work for Your Relax</h3>
					</div>
				</div>
				<div class="item" data-src="images/index_img_slider-1.jpg">
					<div class="camera_caption fadeIn">
						<h3>Best Design</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Our Works In Process</span></h2>
					</header>
					<div class="isotope clearfix">
						<a href="images/rsz_image75.jpg" class="item-1 w-1"><div class="img_block" style="width:350px;height:300px;"><img src="images/rsz_image75.jpg" alt="img"  style="width:350px;height:300px;"></div><i>+</i></a>
						<a href="images/construction1.jpg" class="item-2 w-2"><div class="img_block" style="width:350px;height:300px;"><img src="images/construction1.jpg" alt="img" style="width:350px;height:300px;"></div><i>+</i></a>
						<a href="images/construction2.jpg" class="item-3 w-1"><div class="img_block" style="width:350px;height:300px;"><img src="images/construction2.jpg" alt="img" style="width:350px;height:300px;"></div><i>+</i></a>
						<a href="images/construction3.jpg" class="item-4 w-2"><div class="img_block" style="width:350px;height:300px;"><img src="images/construction3.jpg" alt="img" style="width:350px;height:300px;"></div><i>+</i></a>
						<a href="images/construction7.jpg" class="item-5 w-1"><div class="img_block" style="width:350px;height:300px;"><img src="images/construction7.jpg" alt="img" style="width:350px;height:300px;"></div><i>+</i></a>
						<a href="images/construction5.jpg" class="item-6 w-1"><div class="img_block" style="width:350px;height:300px;"><img src="images/construction5.jpg" alt="img" style="width:350px;height:300px;"></div><i>+</i></a>
					</div>
					<a href="index-2.php" class="btn" style="font-family:Broadway; border:3px solid grey; border-radius:92px; ">more</a>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width-container block-4  parallax-block" data-stellar-background-ratio="0.5">
		<span class="el-1">Our best</span>
		<span class="el-2">projects</span>
		<a href="index-2.php" class="btn" style="font-family:Broadway; border:3px solid royalblue; border-radius:92px;">more</a>
	</div>
	<div style="height:1100px; background-color:#e2e2e2;">
	    <header>
	        <hr>
	        <h3 align="center" style="text-decoration:underline; font-family:Blackadder ITC; color:#804d4d;">About Us</h3>
	    </header>
	           <div id="touch_gallery" style="margin-top:25px;">
					<div class="grid_4" style="margin-top:-20px;">
						<div class="img_block1" style="margin-left:120px;margin-top:20px;"><a href="images/rsz_image60.jpg"><img src="images/rsz_image60.jpg" height="250px" width="250px"></a></div>
						
					</div>
					<div class="grid_4" style="margin-left:55px;">
						<div class="img_block1" style="margin-left:120px;"><a href="images/rsz_1image20.jpg"><img src="images/rsz_1image20.jpg" height="250px" width="250px"></a></a></div>
						
					</div>
					<div class="grid_4" style="margin-top:-20px; margin-left:5px;">
						<div class="img_block1" style="margin-top:20px;margin-left:150px;"><a href="images/rsz_image25.jpg"><img src="images/rsz_image25.jpg" height="250px" width="250px"></a></div>
						
					</div>
					<div class="grid_4" style="margin-top:350px; margin-left:-906px;">
						<div class="img_block1" style="margin-left:-150px;margin-top:-30px;"><a href="images/rsz_image29.jpg"><img src="images/rsz_image29.jpg" height="270px" width="250px"></a></div>
						
					</div>
					<div class="grid_4" style="margin-top:288px; margin-left:-606px;">
						<div class="img_block1" style="margin-left:-20px;margin-top:30px;"><a href="images/rsz_image36.jpg"><img src="images/rsz_image36.jpg" height="250px" width="250px"></a></div>
					</div>
					<div class="grid_4" style="margin-top:250px; margin-left:-301px;">
						<div class="img_block1" style="margin-left:80px;margin-top:70px;" ><a href="images/rsz_image79.jpg"><img src="images/rsz_image79.jpg" height="250px" width="250px"></a></div>
						
					</div>
			   </div>
			<div class="para" style="margin-top:600px; height:400px;">   
			<p class="paragraph">AASHIYANA.COM is a high-end property portal that caters to a global maarket with its unique services and novel online features. Having been launched in the year 2017 by CSAIST Group, AASHIYANA has quickly risen to being the No. 1 Property Portal in Jhansi.</p>  
			<br>
			<p class="paragraph">The AASHIYANA.COM design is based on rigorous research, unique product developements, and innovative initiative which has been readily accepted by users. In an attempt to best serve the users, features on the AASHIYANA.COM really portal are constantly invented, evaluated and upgraded.</p>
			<br>
			<p class="paragraph">The AASHIYANA.COM achieved the status of being the No. 1 property portal in JHANSI. With its revolutionary next-gen services customized specifically to adderess the real state industry it has consolidated its position as the leader in the sector. AASHIYANA.COM provides a common plateform for all users, and provides a space for property buyers and sellers to locate properties of interest and source information about all property related issues in a transparent and unambiguous process.</p>
			<br>
			<p class="paragraph">AASHIYANA.COM also conducts Property Fairs, branded as "AASHIYANA.COM Property Bazaars", which serve as a one-stop-shop for property-seekers to interact face-to-face with developers, agents and financing instituions, all at a single venue.</p>
			</div>   
	</div>
	<div class="full-width-container block-5">
	    <header>
	   <h3 style="font-family:Blackadder ITC;">Our Adviser</h3>
	    </header>
		<div class="container">
			<div class="row">
				<div class="item-1 clearfix">
					<div class="grid_2">
						<div class="img_block"><img src="images/nisha.jpg" alt=""></div>
					</div>
					<div class="grid_10">
						<div class="text">"If you're looking for top quality house for your family look no further.Aashiyana has remove the barrier and raised bar..." <br><br>Bringing the online and real world together,Aashiyana has set the new dawn in real estate with launch of experiance center in Jhansi. Property search gets re-imagined with state of the art technology combined with creativity at Aashiyana,Jhansi.</div>
					</div>
				</div>
				<div class="item-2 clearfix">
					<div class="grid_10">
						<div class="text">"Aashiyana cater the need of home buyer..." <br><br>Aashiyana has come up with a never before to search a property in Jhansi.We have exposed our database created in the past year to help you know all about a locality.Now buyer can visualize every corner of their new home without visiting it physically.</div>
					</div>
					<div class="grid_2">
						<div class="img_block"><img src="images/bipin.jpg" alt=""></div>
					</div>
				</div>
				<div class="item-1 clearfix">
					<div class="grid_2">
						<div class="img_block"><img src="images/akansha.jpg" alt=""></div>
					</div>
					<div class="grid_10">
						<div class="text">"Now user can go through our collection of projects from top developers in Jhansi...." <br><br>You can go through the complete details of projects,check out all specifications of the property you are interested in.Explore through the upcoming projects,picture of sample flats,and price list along with complete developer info.At our experience center buyers can simply give a call and our executives will find a perfect home for you.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-6">
		<div class="google-map-api"> 
			<div id="map-canvas" class="gmap"></div> 
		</div> 
	</div>
</section>


<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row" style="margin-top:-550px;">
			<div class="grid_12">
				<div class="copyright">
					<pre style="font-weight:bold;margin-top:-250px;">© <span id="copyright-year"></span> |  Privacy Policy</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom" style="margin-top:-750px; background-color:white;"><a href="http://www.csaist.org" rel="nofollow"><img src="images/logo1.png" alt="logo"></a></div>
</footer>

<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '68.125%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "975px",
		});
	});
</script>
<!--script>
	var $container = $('.isotope');
	// init
	$container.on( 'click', '.iso-item', function( event ) {
	  // change size of item via class
	  $( event.target ).toggleClass('gigante');
	  // trigger layout
	  $container.packery();
	  /*$container.packery({
		  itemSelector: 'iso-.item',
		  gutter: 10*/

	});
</script-->
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.6894388), parseFloat(-73.9036233,10)); 

			var styleArray = [
				{"featureType":"water","stylers":[{"color":"#021019"}]},
				{"featureType":"landscape","stylers":[{"color":"#08304b"}]},
				{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},
				{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
				{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
				{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},
				{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},
				{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},
				{"featureType":"transit","stylers":[{"color":"#146474"}]},
				{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}
				]
			 
			function initialize() { 
			  var mapOptions = { 
				zoom: 12, 
				center: coordData, 
				scrollwheel: false, 
				styles: styleArray 
			  } 
 
			  var contentString = "<div></div>"; 
			  var infowindow = new google.maps.InfoWindow({ 
				content: contentString, 
				maxWidth: 200 
			  }); 
			   
			  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); 


			google.maps.event.addDomListener(window, 'resize', function() {

			  map.setCenter(coordData);

			  var center = map.getCenter();
			});
		}

			google.maps.event.addDomListener(window, "load", initialize); 

		}
</script>
<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script>

</body>
</html>