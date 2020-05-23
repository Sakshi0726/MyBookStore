<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Show']))
{
	$num2=$_POST['num2'];
	$num3=$_POST['num3'];
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ebook";
$con=mysql_connect($host,$dbUsername,$dbPassword);
$dat=mysql_select_db($dbname,$con);
if($dat)
{
	$num2=$_POST['num2'];
	$num3=$_POST['num3'];
	$sql="select * from book where b_subcat='$num2' and b_cat='$num3'";
		$res=mysql_query($sql);																							
		if($res){
				while($row=mysql_fetch_array($res,MYSQL_ASSOC))
					echo "<table><tr><th>Name</th><th>Edition</th><th>Description</th><th>Price</th><th>Publisher</th><th>ISBN</th><th>Pages</th></tr><tr><td>".$row['b_nm']."</td><td>".$row['b_edition']."</td><td>".$row['b_desc']."</td><td>".$row['b_price']."</td><td>".$row['b_publisher']."</td><td>".$row['b_isbn']."</td><td>".$row['b_page']."</td><td><a href='payment.php'><input type='submit' value='Buy' style='background: blue;font-size: 15px;width:100px;color: white;border-radius:20px'></a></td></tr></table>";
		}
}
}
?>
