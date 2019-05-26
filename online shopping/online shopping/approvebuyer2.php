<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="approvesellercss.css" type="text/css" rel="stylesheet" />

</head>

<body>
<div class="ab2" align="center">
<form method="post">
<table>
<?php
$d=$_GET['l'];
$abc=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$abc);
$sel="select * from customer_tb where id='$d'";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{
?>
<tr><td><h3><i>Name: </i></h3></td><td><input type="text" name="n" value="<?php echo $ar[1];?>" /></td></tr>
<tr><td><h3><i>Username: </i></h3></td><td><input type="text" name="u" value="<?php echo $ar[6];?>" /></td></tr>
<tr><td><h3><i>Password: </i></h3></td><td><input type="password" name="p" value="<?php echo $ar[7];?>" /></td></tr>
<tr><td></td><td><input type="submit" name="ap" value="Approve" class="xy"/></td></tr>
<tr><td></td><td><input type="submit" name="rej" value="Reject" class="yz"/></td></tr>
<?php
}
if(isset($_POST['ap']))
{
$ab="update customer_tb set status='approved' where id='$d'";
mysql_query($ab);
echo "approved";
}
if(isset($_POST['rej']))
{
$ab="update customer_tb set status='Rejected' where id='$d'";
mysql_query($ab);
echo "Rejected";
}
?>
</table>
</form>
</div>
</body>
</html>
