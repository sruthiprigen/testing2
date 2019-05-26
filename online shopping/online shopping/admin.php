<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet"/>

</head>

<body>
<div class="j" align="center">
<img src="images/adm.png" height="400px" width="500px" />
<form method="post">
<table>
<tr><td><h3><i>Username: </i></h3></td><td><input type="text" name="u" /></td></tr>
<tr><td><h3><i>Password: </i></h3></td><td><input type="text" name="p" /></td></tr>
<tr><td></td><td><input type="submit" name="log" value="Login" class="sub"/></td></tr>
</table>

<?php
if(isset($_POST['log']))
{
if($_POST['u']=="admin" and $_POST['p']=="admin123")
{
header('location:adminhome.php');
}
else
{
echo "incorrect username or password";
}
}
?>
</form>
</div>
</body>
</html>
