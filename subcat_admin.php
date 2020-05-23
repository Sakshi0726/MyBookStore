<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Add']))
{
$subcat_id=$_POST['subcat_id'];
$parent_id=$_POST['parent_id'];
$subcat_cat=$_POST['subcat_cat'];
$subcat_nm=$_POST['subcat_nm'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=Mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
$subcat_id=$_POST['subcat_id'];
$parent_id=$_POST['parent_id'];
$subcat_cat=$_POST['subcat_cat'];
$subcat_nm=$_POST['subcat_nm'];
$savedata=mysql_query("insert into subcat values('$subcat_id','$parent_id','$subcat_cat','$subcat_nm')");
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
<div id="content">
<h1 align="center" style="color:blue">Add Sub Category</h1>
<form action="subcat_admin.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Subcat ID:</td>
<td><input type="text" name="subcat_id" placeholder="Enter Subcat ID" required/></td>
</tr>
<tr>
<td>Parent ID:</td>
<td><input type="text" name="parent_id" placeholder="Enter Parent ID" required/></td>
</tr>
<tr>
<td>Category Name:</td>
<td><select name="subcat_cat">
<option></option>
<option>Arch</option>
<option>Art</option>
<option>For</option>
<option>Spo</option>
<option>Astro</option>
<option>Bus</option>
<option>Eco</option>
<option>Law</option>
<option>Tour</option>
<option>Yoga</option>
<option>Reli</option>
<option>Mgmt</option>
<option>Ter</option>
<option>Tra</option>
<option>Fic</option>
<option>Com</option>
<option>Comp</option>
<option>Cook</option>
<option>Sci</option>
<option>Exam</option>
</td>
</tr>
<tr>
<td>Subcat Name:</td>
<td><input type="text" name="subcat_nm" placeholder="Enter Subcat Name" required/></td>
</tr>
<tr>
<td colspan='2' align='center'>
<input type="submit" value="Add" name="Add"></td>
</tr>
</form>
</table>
</div>