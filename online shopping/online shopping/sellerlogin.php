<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="sl" align="center">
<img src="images/shopping-online.jpg"  height="400px" width="355px" />
<form method="post">
<table>
<tr><td><h3><i>Username: </i></h3></td><td><input type="text" name="us" /></td></tr>
<tr><td><h3><i>Password: </i></h3></td><td><input type="text" name="pw" /></td></tr>
<tr><td></td><td><input type="submit" name="log" value="Login" class="slo"/></td></tr>
<tr><td></td><td><a href="slogin.php"><h3><i>Create an Account</i></h3></a></td></tr>
</table>
<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$con);
if(isset($_POST['log']))
{
$d="select * from seller_tb where username='".$_POST['us']."' and password='".$_POST['pw']."'";
$res=mysql_query($d);
if($ar=mysql_fetch_array($res))
{
$_SESSION['id']=$ar[0];
header('location:sellerhome.php');
}
else
{
echo "incorrect email or password";
}
}
?>
</form>
</div>
</body>
</html>
