<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$postal=$_POST['postal'];
	$mobile=$_POST['mobile'];
	$payment=$_POST['payment'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$postal=$_POST['postal'];
	$mobile=$_POST['mobile'];
	$payment=$_POST['payment'];
	$savedata=mysql_query("insert into shipping values('$name','$address','$postal','$mobile','$payment')");
	}
}
?>
<!DOCTYPE html>
<head>
<?php
	include("includes/head.inc.php");
?>
</head>
<body>
<div id="outer">
	<div id="header">
		<div id="menu">
			<?php
				include("includes/menu.php");
			?>
		</div>
	</div>
	<div id="content">
	<h1 align="center" style="color:blue">Order Details</h1>
	<form action="order.php" method="POST">
	<table align="center" cellspacing="15px" cellspacing="15px">
	<tr>
<td>Name</td>
<td><input type="text" name="name" required/></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" required></textarea></td>
</tr>
<tr>
<td>Postal Code</td>
<td><input type="text" name="postal" required/></td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobile" required/></td>
</tr>
<tr>
<td>Payment Method</td>
<td><select name="payment"><option></option>
<option>Cash On Delivery</option></select>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Order" name="Submit"></td>
</tr>
	</table>
	</form>
	</div>
	</div>
	</body>
	</html>