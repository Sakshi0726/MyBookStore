<?php
if(isset($_POST['Submit']))
{
	$fullname1=$_POST['fullname1'];
	$username1=$_POST['username1'];
	$password1=$_POST['password1'];
	$confpassword1=$_POST['confpassword1'];
	$gender1=$_POST['gender1'];
	$email1=$_POST['email1'];
	$contact1=$_POST['contact1'];
	$city1=$_POST['city1'];
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbusername,$dbpassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
	$fullname1=$_POST['fullname1'];
	$username1=$_POST['username1'];
	$password1=$_POST['password1'];
	$confpassword1=$_POST['confpassword1'];
	$gender1=$_POST['gender1'];
	$email1=$_POST['email1'];
	$contact1=$_POST['contact1'];
	$city1=$_POST['city1'];
	$savedata=mysql_query("insert into uregister values('$fullname1','$username1','$password1','$confpassword1','$gender1','$email1','$contact1','$city1')");
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
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.php");
						?>
					</div>
				</div>
<div id="content">
<h1 align="center" style="color:blue">Welcome to User Registration</h1>
<form action="register_user.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Full Name:</td>
<td><input type="text" name="fullname1" placeholder="Enter Your Name" required/></td>
</tr>
<tr>
<td>User Name:</td>
<td><input type="text" name="username1" placeholder="Enter Your User Name" required/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password1" placeholder="Enter Your password" id="pass" required/></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="confpassword1" placeholder="Confirm Your password" id="confpass" required/></td>
<td><span id="confpassword"></span></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender1" value="Male">Male
<input type="radio" name="gender1" value="Female">Female</td>
</tr>
<tr>
<td>E-Mail Address:</td>
<td><input type="email" name="email1" placeholder="Enter Your E-Mail" onkeypress="return validation()" required/></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="text" name="contact1" placeholder="Enter Your contact Number" required/></td>
</tr>
<tr>
<td>City:</td>
<td><select name="city1">
<option>Lucknow</option>
<option>Kanpur</option>
<option>Unnao</option>
<option>Hardoi</option>
<option>Shajahanpur</option>
<option>Bareilly</option>
<option>Allahabad</option></td>
</tr>
<tr>
<td><input type='submit' value="Submit" name="Submit"></td>
<td><a href="login.php">Login</a></td>
</tr>
</form>
</table>
</div>
</div>
<script type="text/javascript">
function validation(){
	var pass=document.getElementById('pass').value;
	var confpass=document.getElementById('confpass').value;
	if(pass!=confpass){
		document.getElementById('confpassword').innerHTML="Password does not Match";
	}
	else
	{
		return false;
	}
}

</script>
</body>
</html>