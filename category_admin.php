<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['add']))
{
	$cat_id=$_POST['cat_id'];
	$cat_name=$_POST['cat_name'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
		$cat_id=$_POST['cat_id'];
		$cat_name=$_POST['cat_name'];
		$savedata=mysql_query("insert into category values('$cat_id','$cat_name')");
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
<h1 align="center" style="color:blue">Add Category</h1>
<form action="category_admin.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Category ID</td>
<td><input type="text" name="cat_id" /></td>
</tr>
<tr>
<td>Category Name</td>
<td><input type="text" name="cat_name" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="add" value="Add"></td>
</tr>
</form>
</table>
</div>
</div>
</body>