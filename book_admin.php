<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Submit']))
{
	$b_id=$_POST['b_id'];
	$b_nm=$_POST['b_nm'];
	$b_cat=$_POST['b_cat'];
	$b_subcat=$_POST['b_subcat'];
	$b_desc=$_POST['b_desc'];
	$b_publisher=$_POST['b_publisher'];
	$b_edition=$_POST['b_edition'];
	$b_isbn=$_POST['b_isbn'];
	$b_page=$_POST['b_page'];
	$b_price=$_POST['b_price'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="ebook";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
	$b_id=$_POST['b_id'];
	$b_nm=$_POST['b_nm'];
	$b_cat=$_POST['b_cat'];
	$b_subcat=$_POST['b_subcat'];
	$b_desc=$_POST['b_desc'];
	$b_publisher=$_POST['b_publisher'];
	$b_edition=$_POST['b_edition'];
	$b_isbn=$_POST['b_isbn'];
	$b_page=$_POST['b_page'];
	$b_price=$_POST['b_price'];	
	$savedata=mysql_query("insert into book values('$b_id','$b_nm','$b_cat','$b_subcat','$b_desc','$b_publisher','$b_edition','$b_isbn','$b_page','$b_price')");
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
<h1 align="center" style="color:blue">Add Book</h1>
<form action="book_admin.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Book ID:</td>
<td><input type="text" name="b_id" placeholder="Enter Book ID" required/></td>
</tr>
<tr>
<td>Book Name:</td>
<td><input type="text" name="b_nm" placeholder="Enter Book Name" required/></td>
</tr>
<tr>
<td>Category:</td>
<td><input type="text" name="b_cat" placeholder="Enter Category" required/></td>
</tr>
<tr>
<td>Sub-Category:</td>
<td><input type="text" name="b_subcat" placeholder="Enter Sub Category of Book" required/></td>
</tr>
<tr>
<td>Description:</td>
<td><textarea name="b_desc" placeholder="Enter Description of Book"></textarea></td>
</tr>
<tr>
<td>Publisher:</td>
<td><input type="text" name="b_publisher" placeholder="Enter Publisher of Book" required/></td>
</tr>
<tr>
<td>Edition:</td>
<td><input type="text" name="b_edition" placeholder="Enter Edition of Book" required/></td>
</tr>
<tr>
<td>ISBN:</td>
<td><input type="text" name="b_isbn" placeholder="Enter ISBN" required/></td>
</tr>
<tr>
<td>Page:</td>
<td><input type="text" name="b_page" placeholder="Enter Total Pages" required/></td>
</tr>
<tr>
<td>Price:</td>
<td><input type="text" name="b_price" placeholder="Enter Price" required/></td>
</tr>
<tr>
<td colspan='2' align='center'>
<input type="submit" value="Add" name="Submit"></td>
</tr>
</form>
</table>
</div>
</body>