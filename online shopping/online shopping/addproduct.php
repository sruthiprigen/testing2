<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="ap" align="center">
<img src="images/bag.jpg" height="400px" width="500px" />
<form method="post" enctype="multipart/form-data">
<table>
<tr><td><h3><i>Pname: </i></h3></td><td><input type="text" name="pn" /></td></tr>
<tr><td><h3><i>Description: </i></h3></td><td><textarea name="d"></textarea></td></tr>
<tr><td><h3><i>Quantity: </i></h3></td><td><input type="text" name="q" /></td></tr>
<tr><td><h3><i>Price: </i></h3></td><td><input type="text" name="pr" /></td></tr>
<tr><td><h3><i>Picture: </i></h3></td><td><input type="file" name="pic" /></td></tr>

<tr><td></td><td><input type="submit" name="save" value="Save" class="s"/></td></tr>
</table>
<?php
session_start();
$de=$_SESSION['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$con);
if(isset($_POST['save']))
{
$oldpath=$_FILES['pic']['tmp_name'];
$newpath="pictures/".$_FILES['pic']['name'];
move_uploaded_file($oldpath,$newpath);
$ab="insert into product_tb values('null','".$_POST['pn']."','".$_POST['d']."','".$_POST['q']."','".$_POST['pr']."','".$_FILES['pic']['name']."','$de')";
mysql_query($ab);
echo "saved";
}
?>
</form>
</div>
</body>
</html>
