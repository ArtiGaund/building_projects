<?php include('connection.php');
?>
<?php
$edit_record=@$_GET['e'];
$query="select * from sign_up where email='$edit_record'";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$username=$row[0];
	$email=$row[1];
	$password=$row[2];
	$c_password=$row[3];
	$i_am=$row[4];
	$mobile_no=$row[5];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<title>UPDATING REGISTRATION DETAIL</title>
			<meta charset="UTF-8" />
			<meta name = "format-detection" content = "telephone=no" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="description" content="Creative Link Effects: Subtle and modern effects for links or menu items" />
           <meta name="keywords" content="link effect, css transition, style, inspiration, css3, menu item, web design" />
		     <meta name="author" content="Codrops" />			 
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
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
				<script type="text/javascript" src="engine1/jquery.js"></script>
		        <script src="js/modernizr.custom1.js"></script>
	          <script src="js/packery.pkgd.min.js"></script>
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
		background-color: #cd4436;
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
textarea{
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
					<h1><a href="index.php" style="font-family:Agency FB;font-size:90px;">AASHIYANA.COM<span>Real Estate Company</span></a></h1>
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
<div class="body">
		<div class="container" style="width:100%;">
<section class="color-5">
				<nav class="cl-effect-19">
					<a href="#"><span data-hover="Update">Update</span></a>
					<a href="#"><span data-hover="Registration">Registration</span></a>
					<a href="#"><span data-hover="Detail">Detail</span></a>
				</nav>
			</section>
<form action='edit.php ?edit_form=<?php echo $edit_record ?>' method="post" >
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
<h4>EMAIL</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="email1" value='<?php echo $email;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>PASSWORD</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="password1" value='<?php echo $password;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>CONFIRM PASSWORD</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="c_password1" value='<?php echo $c_password;?>'>
</td>
</tr>
<tr width="300">
<td height="70"  class="heading">
<h4>I AM</h4>
</td>
<td height="70"  class="heading">
<input type="text" name="i_am1" value='<?php echo $i_am;?>'>
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
<td colspan="2" align="center" height="70"  class="heading">
<input type="submit" name="update" value="update" style="width:90px;background-color:blue;color:white;border:none;margin-bottom:30px;">
</td>
</tr>
<?php 
}
?>
</table>
</center>
</form>
</div>
</div>
<?php 
if(isset($_POST['update']))
{
	$edit_id=$_GET['edit_form'];
	$ed_username=$_POST['username1'];
	$ed_email=$_POST['email1'];
	$ed_password=$_POST['password1'];
	$ed_c_password=$_POST['c_password1'];
	$ed_i_am=$_POST['i_am'];
	$ed_mobile_no=$_POST['mobile_no1'];
	$query2="update sign_up set username='$ed_username',email='$ed_email',password='$ed_password',c_password='$ed_c_password',i_am='$ed__i_am',mobile_no='$ed_mobile_no'
	where email='$edit_id'";
	if(mysql_query($query2))
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
