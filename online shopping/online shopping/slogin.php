<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="se" align="center">
<img src="images/click.jpg"  height="400px" width="500px" />
<form method="post">
<table>
<tr><td><h3><i>Name: </i></h3></td><td><input type="text" name="n" /></td></tr>
<tr><td><h3><i>Address: </i></h3></td><td><textarea name="ad"></textarea></td></tr>
<tr><td><h3><i>Phone: </i></h3></td><td><input type="text" name="ph" /></td></tr>
<tr><td><h3><i>Email: </i></h3></td><td><input type="text" name="em" /></td></tr>
<tr><td><h3><i>Username: </i></h3></td><td><input type="text" name="u" /></td></tr>
<tr><td><h3><i>Password: </i></h3></td><td><input type="text" name="p" /></td></tr>
<tr><td><h3><i>Status: </i></h3></td><td><input type="text" name="st" /></td></tr>
<tr><td><h3><i>Description: </i></h3></td><td><textarea name="d"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="save" value="Save" class="sa"/></td></tr>
</table>
<?php
$on=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$on);
if(isset($_POST['save']))
{
$ab="insert into seller_tb values('null','".$_POST['n']."','".$_POST['ad']."','".$_POST['ph']."','".$_POST['em']."','".$_POST['u']."','".$_POST['p']."','pending','".$_POST['d']."')";
mysql_query($ab);
echo "saved";
}
?>
</form>
</div>
</body>
</html>
