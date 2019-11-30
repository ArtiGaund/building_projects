<?php include('connection.php');
?>
<?php
$edit_record=@$_GET['e5'];
$query="select * from property_for_sell where u_id=$edit_record";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$u_id=$row[0];
	$username=$row[1];
	$name_of_property=$row[2];
	$mobile_no=$row[3];
	$property_location=$row[4];
    $property_cost=$row[5];	
?>
<!DOCTYPE html>
<html lang="en"  class="no-js">
	<head>
			<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>UPDATING SELL PROPERTY DETAIL</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
    <meta name="description" content="Creative Link Effects: Subtle and modern effects for links or menu items" />
		<meta name="keywords" content="link effect, css transition, style, inspiration, css3, menu item, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom1.js"></script>
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
			<style>
	.body
	{
		background-color:   #0e83cd;
		width:100%;
		height:1200px;
	}
	.data
{
	width:1000px;height:300px;border:1px solid white;
	margin-top:50px;
		border-radius:10px;
}
.heading
{
	font-size:24px;
	background-color:rgba(0,0,0,0.70);
	color:white;
	border-color:rgba(1,1,1,0.70);
	padding:0px;
	
}
h4
{
	color:white;
	margin-top:50px;
	align:center;
}
input{
	margin-top:50px;
	width:300px;
	height:30px;
	border-radius:5px;
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
					<h1><a href="index.php" style="font-family:Agency FB; font-size:90px;">AASHIYANA.COM<span>Real Estate Company</span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.php" style="font-size:35px;color:white;margin-top:-6px;">HOME</a></li>
							<li><a href="index-1.php" style="font-size:35px;color:white;margin-top:-6px;">SERVICES</a>
							<ul>
											<li><a href="buy.php" style="font-size:20px;color:white;">BUY</a></li>
											<li><a href="rent.php" style="font-size:20px;color:white;">RENT</a></li>
											<li><a href="sell.php" style="font-size:20px;color:white;">SELL</a></li>
							</ul>
							</li>
							<li><a href="index-2.php" style="font-size:35px;color:white;margin-top:-6px;">PROJECT</a></li>
							<li><a href="index-3.php" style="font-size:35px;color:white;margin-top:-6px;">LOGIN</a></li>
							<li><a href="index-4.php" style="font-size:35px;color:white;margin-top:-6px;">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->
<div class="body">
		<div class="container" style="width:100%;">
			<section class="color-4">
				<nav class="cl-effect-2">
					<a href="#"><span data-hover="Updating">Updating</span></a>
					<a href="#"><span data-hover="Sell">Sell</span></a>
					<a href="#"><span data-hover="Property">Property</span></a>
					<a href="#"><span data-hover="Detail">Detail</span></a>
				</nav>
			</section>
<form action='edit.php ?edit_form=<?php echo $edit_record ?>' method="post" enctype="multipart/form-data" >
<center>
<table border="2" class="data" align="center">
<tr width="300">
<td height="70"  class="heading">
<h4>USERNAME</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="username1" value='<?php echo $username;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>NAME OF PROPERTY</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="name_of_property1" value='<?php echo $name_of_property;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>MOBILE NO</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="mobile_no1" value='<?php echo $mobile_no;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>PROPERTY LOCATION</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="property_location1" value='<?php echo $property_location;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>PROPERTY COST</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="property_cost1" value='<?php echo $property_cost;?>'>
</td>
</tr>
<tr width="300">
<td colspan="2" align="center" height="70"  class="heading">
<input type="submit" name="update5" value="update" style="width:90px;background-color:blue;color:white;border:none;margin-bottom:30px;">
</td>
</tr>
<?php 
}
?>
</table>
</center>
</form>
</div>
<?php 
if(isset($_POST['update5']))
{
	$edit_id=$_GET['edit_form'];
	$ed_username=$_POST['username1'];
	$ed_name_of_property=$_POST['name_of_property1'];
	$ed_property_location=$_POST['property_location1'];
	$ed_mobile_no=$_POST['mobile_no'];
	$ed_property_cost=$_POST['property_cost1'];
	$query1="update property_for_sell set username='$ed_username',name_of_property='$ed_name_of_property',property_location='$ed_property_location',mobile_no='$ed_mobile_no',property_cost='$ed_property_cost'
	where u_id=$edit_id";
	if(mysql_query($query1))
	{
		echo "<script>window.open('admin.php?name=record updated','_self')</script>";
	exit();
	}
}
?>
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
