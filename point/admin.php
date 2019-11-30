<?php 
session_start();
if(!$_SESSION['email'])
{
	header('location:adminlogin.php');
}
?>
<?php
 include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<title>Admin panel</title>
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
.body{
	background-color:grey;
	margin-top:-50px;
}
.data
{
	width:1400px;height:300px;border:1px solid white;
	margin-top:50px;
	margin-left:30px;
}
.heading
{
	font-size:24px;
	background-color:rgba(0,0,0,0.70);
	color:white;
	border-color:rgba(1,1,1,0.70);
	padding:0px;
}
.content{
	font-size:20px;
	background-color:rgba(0,0,0,0.70);
	color:white;
	border-color:rgba(1,1,1,0.70);
	padding:0px;
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
<div class="body">
<div style="width:98%;background-image:url(images/image95.jpg);margin-left:20px;margin-top:50px;margin-bottom:50px;border-radius:15px;">
<table>
<tr>
<td>
<b style="font-size:30px;color:white;margin-left:5px;margin-top:30px;">WELCOME:</b>&nbsp;&nbsp;
<?php echo $_SESSION['email'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<a href="logout.php" style="font-size:30px;">LOG OUT</a>
</td>
</tr>
</table>
<h1 align="center" style="font-size:60px;color:blue;margin-top:50px;">Admin Panel</h1>
<table border="2" align="center" class="data" >
<?php
$q="select * from sign_up";
$a=mysql_query($q); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);border:1px solid white;">
<td colspan="7" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Registration detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center" class="heading"><u style="color:white;">Customer name</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Email</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Password</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">I am</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">mobile no.</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row=mysql_fetch_array($a))
{
	?>
	<tr>
	<td align="center" class="content">
	<?php
	echo $row[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row[4];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row[5];
?>
	</td>
	<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d=<?php echo $row[1];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit.php?e=<?php echo $row[1];?>'>edit</a></h4>
</td>
	</tr>
<?php }
	?>
</table>

<table border="2" align="center" class="data">
<?php 
$q1="select * from available_property_for_buy";
$a1=mysql_query($q1); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="6" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Property of buy detail</h3.</td>
</tr>
<tr width="900" >
<td height="50" align="center" class="heading"><u style="color:white;">Name of property</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Property location</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Description</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row1=mysql_fetch_array($a1))
{
	?>
	<tr>
	<td align="center" class="content">
	<?php
	echo $row1[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row1[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row1[2];
	?>
	</td>
     <td align="center" class="content"> 
	<?php
	echo $row1[3];
	?>
	</td align="center" class="content">
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d1=<?php echo $row1[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit1.php?e1=<?php echo $row1[0];?>'>edit</a></h4>
</td>
<?php } ?>
</table>
<table border="2" align="center" class="data" >
<?php 
$q2="select * from available_property_on_rent";
$a2=mysql_query($q2); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="6" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Property on rent detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center"  class="heading"><u style="color:white;">Name of property</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property location</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Description</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row2=mysql_fetch_array($a2))
{
	?>
	<tr>
	<td align="center" class="content">
	<?php
	echo $row2[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row2[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row2[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row2[3];
	?>
	</td>
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d2=<?php echo $row2[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit2.php?e2=<?php echo $row2[0];?>'>edit</a></h4>
</td>

	</tr>
<?php } ?>
</table>
<table border="2" align="center" class="data" >
<?php 
$q3="select * from available_property_on_sell";
$a3=mysql_query($q3); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="6" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Property on sell detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center"  class="heading"><u style="color:white;">Name of property</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property location</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Description</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row3=mysql_fetch_array($a3))
{
	?>
	<tr>
	<td align="center"  class="content">
	<?php
	echo $row3[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row3[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row3[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row3[3];
	?>
	</td>
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d3=<?php echo $row3[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit3.php?e3=<?php echo $row3[0];?>'>edit</a></h4>
</td>
	</tr>
<?php } ?>
</div>
</table>
<table border="2" align="center" class="data" >
<?php 
$q4="select * from buy_property";
$a4=mysql_query($q4); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="9" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Buy Property detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center"  class="heading"><u style="color:white;">U_Id</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Username</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Email</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Name Of Property</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Mobile no</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property Location</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row4=mysql_fetch_array($a4))
{
	?>
	<tr>
	<td align="center"  class="content">
	<?php
	echo $row4[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row4[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row4[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row4[3];
	?>
	</td>
	<td align="center" class="content">
	<?php
	echo $row4[4];
	?>
	</td>
		<td align="center" class="content">
	<?php
	echo $row4[5];
	?>
	</td>
	<td align="center"  class="content">
	<?php
	echo $row4[6];
	?>
	</td>
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d4=<?php echo $row4[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit4.php?e4=<?php echo $row4[0];?>'>edit</a></h4>
</td>
	</tr>
<?php } ?>
</div>
</table>
<table border="2" align="center" class="data" >
<?php 
$q5="select * from property_for_sell";
$a5=mysql_query($q5); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="9" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Sell Property detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center"  class="heading"><u style="color:white;">U_Id</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Username</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Email</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Name Of Property</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Mobile no</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property Location</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row5=mysql_fetch_array($a5))
{
	?>
	<tr>
	<td align="center"  class="content">
	<?php
	echo $row5[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row5[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row5[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row5[3];
	?>
	</td>
	<td align="center" class="content">
	<?php
	echo $row5[4];
	?>
	</td>
		<td align="center" class="content">
	<?php
	echo $row5[5];
	?>
	</td>
	<td align="center"  class="content">
	<?php
	echo $row5[6];
	?>
	</td>
		
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d5=<?php echo $row5[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit5.php?e5=<?php echo $row5[0];?>'>edit</a></h4>
</td>
	</tr>
<?php } ?>
</div>
</table>
<table border="2" align="center" class="data" >
<?php 
$q6="select * from property_on_rent";
$a6=mysql_query($q6); 
?>
<tr width="900" style="background-color:rgba(0,0,0,0.70);color:white;">
<td colspan="9" align="center" height="70"><h3 style="margin-top:13px;color:white;font-size:50px;">Rent Property detail</h3></td>
</tr>
<tr width="900" >
<td height="50" align="center"  class="heading"><u style="color:white;">U_Id</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Username</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Email</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Name Of Property</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Mobile no</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property Location</u></td>
<td height="50" align="center"  class="heading"><u style="color:white;">Property cost</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">Delete</u></td>
<td height="50" align="center" class="heading"><u style="color:white;">edit</u></td>
</tr>
<?php
while($row6=mysql_fetch_array($a6))
{
	?>
	<tr>
	<td align="center"  class="content">
	<?php
	echo $row6[0];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row6[1];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row6[2];
	?>
	</td>
     <td align="center" class="content">
	<?php
	echo $row6[3];
	?>
	</td>
	<td align="center" class="content">
	<?php
	echo $row6[4];
	?>
	</td>
		<td align="center" class="content">
	<?php
	echo $row6[5];
	?>
	</td>
      <td align="center"  class="content">
	<?php
	echo $row6[6];
	?>
	</td>
		<td align="center" class="content">
<h4 style="color:blue;"><a href='delete.php?d6=<?php echo $row6[0];?>'>delete</a></h4>
</td>
<td align="center" class="content">
<h4 style="color:blue;"><a href='edit6.php?e6=<?php echo $row6[0];?>'>edit</a></h4>
</td>
	</tr>
<?php } ?>
</div>
</table>
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