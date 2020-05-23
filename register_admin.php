<?php
if(isset($_POST['Submit']))
{
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confpassword=$_POST['confpassword'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confpassword=$_POST['confpassword'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$savedata=mysql_query("insert into register values('$fullname','$username','$password','$confpassword','$gender','$email','$contact','$city')");
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
							include("includes/menu1.php");
						?>
					</div>
				</div>
<div id="content">
<h1 align="center" style="color:blue">Welcome to Admin Registration</h1>
<form action="register_admin.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Full Name:</td>
<td><input type="text" name="fullname" placeholder="Enter Your Name" required/></td>
</tr>
<tr>
<td>User Name:</td>
<td><input type="text" name="username" placeholder="Enter Your User Name" required/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Enter Your Password" id="pass" required/></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="confpassword" placeholder="Confirm Your Password" id="confpass" required/></td>
<td><span id="confpassword"></span></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr>
<td>E-Mail Address:</td>
<td><input type="email" name="email" placeholder="Enter Your E-Mail" onkeypress="return validation()" required/></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="text" name="contact" placeholder="Enter Your Contact Number" required/></td>
</tr>
<tr>
<td>City:</td>
<td><select name="city">
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