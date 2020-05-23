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
<div id="content"> 
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
$sql="select * from book";
$res=mysql_query($sql);
if($res)
while($row=mysql_fetch_array($res))
	echo "<table><tr><th>ID</th><th>Name</th><th>Edition</th><th>Description</th><th>Price</th><th>Publisher</th></tr><tr><td>".$row['b_id']."</td><td>".$row['b_nm']."</td><td>".$row['b_edition']."</td><td>".$row['b_desc']."</td><td>".$row['b_price']."</td><td>".$row['b_publisher']."</td><td><a href='payment.php'><input type='submit' value='Buy' style='background: blue;font-size: 15px;width:100px;color: white;border-radius:20px'></a></td></tr></table>";
}
?>
</div>
</body>
</html>