<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
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
<h1 align="center" style="color:blue">Show Book</h1>
<form action="show_admin.php" method="POST">
<table align="center" cellpadding="5px" cellspacing="5px">
<tr>
<td>Book Subcat</td>
<td><input type="text" name="num"/></td>
</tr>
<tr>
<td>Book Category</td>
<td><input type="text" name="num1"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Show" name="Show"/></td>
</tr>
</form>
</table>
</div>
</html>