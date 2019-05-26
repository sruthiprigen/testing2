<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />

</head>

<body>
<div class="apb" align="center">
<form method="get">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$con);
$sel="select * from customer_tb where status='pending'";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{
echo $ar[0];
?>
<a href="approvebuyer2.php?l=<?php echo $ar[0];?>"><h1><i>View</i></h1></a>
<br />
<?php
}?>
</form>
</div>
</body>
</html>
