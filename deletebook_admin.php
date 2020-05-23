<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Delete']))
{
$del=$_POST['del'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
	$del=$_POST['del'];
	$sql="delete from book where b_id='$del'";
	mysql_query($sql);
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
				include("includes/menu1.php");
			?>
		</div>
	</div>
	<div id ="content">
<h1 align="center" style="color:blue">Delete Book</h1>
<form action="deletebook_admin.php" method="POST">
<table align="center" cellpadding="5px" cellspacing="5px">
<tr>
<td>Book ID</td>
<td><input type="text" name="del"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Delete" name="Delete"/></td>
</form>
</table>
</div>
</html>