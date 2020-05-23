<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Show']))
{
$num=$_POST['num'];
$num1=$_POST['num1'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
	$num=$_POST['num'];
	$num1=$_POST['num1'];
	$sql="select * from book where b_subcat='$num' and b_cat='$num1'";
		$res=mysql_query($sql);																							
		if($res)
				while($row=mysql_fetch_array($res,MYSQL_ASSOC))
				echo "<table><tr><th>Name</th><th>Edition</th><th>Description</th><th>Price</th><th>Publisher</th></tr><tr><td>".$row['b_nm']."</td><td>".$row['b_edition']."</td><td>".$row['b_desc']."</td><td>".$row['b_price']."</td><td>".$row['b_publisher']."</td></tr></table>";
		else
			echo "You have given Wrong Subcat ID or Category Name";
	}
}

?>