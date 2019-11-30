<html>
<head>
<title>record deletion</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<?php include('connection.php');
?>
<?php 
$u=$_GET['d'];
$q="delete from sign_up where email='$u'";
$a=mysql_query($q); 
if($a)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u1=$_GET['d1'];
$q1="delete from available_property_for_buy where name_of_property='$u1'";
$a1=mysql_query($q1); 
if($a1)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u2=$_GET['d2'];
$q2="delete from available_property_on_renr where name_of_property='$u2'";
$a2=mysql_query($q2); 
if($a2)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u3=$_GET['d3'];
$q3="delete from available_property_on_sell where name_of_property='$u3'";
$a3=mysql_query($q3); 
if($a3)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u4=$_GET['d4'];
$q4="delete from buy_property where u_id=$u4";
$a4=mysql_query($q4); 
if($a4)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u5=$_GET['d5'];
$q5="delete from property_for_sell where u_id=$u5";
$a5=mysql_query($q5); 
if($a5)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>
<?php 
$u6=$_GET['d6'];
$q6="delete from property_on_rent where u_id=$u6";
$a6=mysql_query($q6); 
if($a6)
{
	echo "<script>window.open('admin.php?name=record deleted','_self')</script>";
	exit();
}
?>

</html>
