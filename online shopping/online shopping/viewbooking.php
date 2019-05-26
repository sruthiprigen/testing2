<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="vb" align="center">
<img src="images/contactus.jpg" height="400px" width="500px" />
<form method="post">
<?php
$dd=$_GET['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$con);
$d="select * from booking_tb where bid='$dd'";
$res=mysql_query($d);
while($ar=mysql_fetch_array($res))
{ 
?>
<table>
<tr><td><h3><i>Pid: </i></h3></td><td><input type="text" name="p" value="<?php echo $ar[2];?>" /></td></tr>
<tr><td><h3><i>Quantity: </i></h3></td><td><input type="text" name="q" value="<?php echo $ar[3];?>" /></td></tr>
<tr><td><h3><i>Cid: </i></h3></td><td><input type="text" name="c" value="<?php echo $ar[6];?>" /></td></tr>
<tr><td></td><td><input type="submit" name="ap" value="Approve" class="v"/></td></tr>
<tr><td></td><td><input type="submit" name="rej" value="Reject" class="v"/></td></tr>
<?php
}
if(isset($_POST['ap']))
{
$ab="update booking_tb set status='approved' where bid='$dd'";
mysql_query($ab);
echo "approved";
}
if(isset($_POST['rej']))
{
$ab="update booking_tb set status='Rejected' where bid='$dd'";
mysql_query($ab);
echo "Rejected";
}
?>
</table>
</form>
</div>
</body>
</html>
