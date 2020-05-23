<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Submit']))
{
	$cname=$_POST['cname'];
	$cemail=$_POST['cemail'];
	$cquery=$_POST['cquery'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	$cname=$_POST['cname'];
	$cemail=$_POST['cemail'];
	$cquery=$_POST['cquery'];
	$savedata=mysql_query("insert into contact values('$cname','$cemail','$cquery')");
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
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.php");
						?>
					</div>
				</div>
<div id="content">
<h1 align="center" style="color:blue">Contact Us</h1>
<form action="contact_user.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Name</td>
<td><input type="text" name="cname" placeholder="Enter Your Name"/></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input type="email" name="cemail" placeholder="Enter Your E-Mail"/></td>
</tr>
<tr>
<td>Query</td>
<td><textarea name="cquery"placeholder="Enter Your Query"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="Submit" value="Submit"/></td>
</tr>
</form>
</table>
</div>
</div>
</body>