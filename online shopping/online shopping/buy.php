<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="bu">
<form method="post">

<?php
session_start();
$c=$_SESSION['i'];
$d=$_GET['k'];
$abc=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$abc);
$sel="select * from product_tb where pid='$d'";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{
$s=$ar[6];
$p=$ar[4];
$q=$ar[3];
?>
<table>
<tr><td>
<img src="pictures/<?php echo $ar[5]?>" height="400px" width="700px" alt="no image"/></td></tr></table>
<table>
<tr><td><h3><i>Quantity: </i></h3></td><td><input type="text" name="qu" /></td></tr>
<tr><td></td><td><input type="submit" name="order" value="Order" class="ord"/></td></tr>
</table>
<?php
}
$con=mysql_connect("localhost","root","");
mysql_select_db("ratul",$con);
if(isset($_POST['order']))
{
$qua=$_POST['qu'];
if($qua<=$q)
{
$n=$q-$qua;
$kk="update product_tb set quantity='$n' where pid='$d'";
mysql_query($kk);
$xy="insert into booking_tb values('null','$s','$d','$qua','$p','pending','$c')";
mysql_query($xy);
}

else
{
echo"Not available";
}
}
?>

</form>
</div>
</body>
</html>
