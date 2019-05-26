<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="v" align="center">
<form method="post">
<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("online shopping",$con);
$d="select * from product_tb";
$res=mysql_query($d);
while($ar=mysql_fetch_array($res))
{ 
?>
<table>
<tr><td>
<img src="pictures/<?php echo $ar[5]?>" height="200px" width="500px" alt="no image"/></td></tr>
<tr><td><h3><i><?php echo $ar[1];?></i></h3></td></tr>
<tr><td><h3><i><?php echo $ar[2];?></i></h3></td></tr>
<tr><td><a href="buy.php?k=<?php echo $ar[0];?>"><input type="button" name="buy" value="Buy" class="buy"/></a></td></tr>
</table>
<?php
}
?>
</form>
</div>
</body>
</html>
