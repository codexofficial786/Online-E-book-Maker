<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online E-Book Maker</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />

<style>
body {
  background-image: url('images/i.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  
}
</style>
</head>

<body>
<div id="">
<span class="head"><center style="color:purple;">Online E-Book Maker</center></span><br />
<!--<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Create E-Books For Free!!</marquee>-->
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<table border="0" class="hometable" cellpadding="10" cellspacing="10">
<tr><td><a href="addBooks.php" class="Command">Approve/Reject Authors</a></td></tr>
<tr><td><a href="ebookmaker/index.php" class="Command">View Published E-book's</a></td></tr>
<td><a href="changePasswordAdmin.php" class="Command">Change Password</a></td></tr>
<tr><td><a href="logout.php" class="Command">Logout</a></td></tr>
</table>
<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>