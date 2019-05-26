<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="cu" align="center">
<img src="images/cart.jpg" height="400px" width="500px" />
<form method="post">
<table>
<tr><td><h3><i>Name: </i></h3></td><td><input type="text" name="na" /></td></tr>
<tr><td><h3><i>Address: </i></h3></td><td><textarea name="add"></textarea></td></tr>
<tr><td><h3><i>Phone: </i></h3></td><td><input type="text" name="pho" /></td></tr>
<tr><td><h3><i>Gender: </i></h3></td><td><input type="radio" name="gen" value="male" /><h3><i>Male</i></h3>
<input type="radio" name="gen" value="female" /><h3><i>Female</i></h3></td></tr>
<tr><td><h3><i>Email: </i></h3></td><td><input type="text" name="ema" /></td></tr>
<tr><td><h3><i>Username: </i></h3></td><td><input type="text" name="ur" /></td></tr>
<tr><td><h3><i>Password: </i></h3></td><td><input type="text" name="po" /></td></tr>
<tr><td><h3><i>Status: </i></h3></td><td><input type="text" name="sta" /></td></tr>
<tr><td></td><td><input type="submit" name="save" value="Save" claSS="sav"/></td></tr>
</table>
<?php
$n=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$n);
if(isset($_POST['save']))
{
$ac="insert into customer_tb values('null','".$_POST['na']."','".$_POST['add']."','".$_POST['pho']."','".$_POST['gen']."','".$_POST['ema']."','".$_POST['ur']."','".$_POST['po']."','pending')";
mysql_query($ac);
echo "saved";
}
?>
</form>
</div>
</body>
</html>
