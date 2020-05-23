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
				include("includes/menu.php");
			?>
		</div>                                  
	</div>
<center><div id="content">
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
	$sql="select * from category";
	echo '<table><tr><th>ID</th><th>Category Name</th></tr>';
	$res=mysql_query($sql);
	if($res)
	{
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			echo "<tr><td>".$row['cat_id']."</td><td>".$row['cat_name']."</td><td><a href='subcat_user.php'><input type='submit' value='View' style='background: blue;font-size: 15px;width:100px;color: white;border-radius:20px'></a></td></tr>";
		}
	}
}
?>
</center>
</div>
</div>
</body>
</html>