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
	$sql="select * from subcat ORDER BY `subcat`.`parent_id` ASC";
	echo '<table><tr><th>P_ID<th>Sub-Cat Name</th></tr>';
	$res=mysql_query($sql);
	if($res)
	{
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			echo "<tr><td>".$row['parent_id']."</td><td>".$row['subcat_nm']."</td><td><a href='user.php'><input type='submit' value='View' style='background: blue;font-size: 15px;width:100px;color: white;border-radius:20px'></a></td></tr>";
		}
	}
}
?>
</center>
</div>
</div>
</body>
</html>