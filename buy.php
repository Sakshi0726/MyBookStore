<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['login']))
{
	$user1=$_POST['user1'];
	$pass1=$_POST['pass1'];
	$choice=$_POST['choice'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
		$user1=$_POST['user1'];
		$choice=$_POST['choice'];
		$sql="select * from register";
		$res=mysql_query($sql);																							
		if($res) {
		$row=mysql_fetch_array($res);
		if($_POST['pass1']==$row['password'])
		{
			if($choice=="Admin")
				{
				$savedata=mysql_query("insert into login values('$user1','$pass1','$choice')");
				header("location:index_admin.php");
				}
		}
		
	}
		$s="select * from uregister";
		$r=mysql_query($s);
		if($r){
		$row1=mysql_fetch_array($r);
		if($_POST['pass1']==$row1['password1'])
		{
			if($choice=="User")
			{
				$savedata=mysql_query("insert into login values('$user1','$pass1','$choice')");
				header("location:index_user.php");
			}
		}
		}
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
<div id="content">
<h1 align="center" style="color:blue">Welcome to Login</h1>
<form action="payment.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>User Name:</td>
<td><input type="text" name="user1" placeholder="Enter Your User Name" required/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass1" placeholder="Enter Your Password" required/></td>
</tr>
<tr>
<td>Login As:</td>
<td><select name="choice">
<option>Admin</option>
<option>User</option>
</select></td>
</tr>
<tr>
<td><input type="submit" name="login" value="Login"/></td>
<td><a href="register_user.php">Register</a></td>
</tr>
</table>
</form>
</div>
</div>