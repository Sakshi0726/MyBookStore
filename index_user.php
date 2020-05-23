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
	<div id="logo"></div>
		<div id="head"><h1 align="center">My Bookshop.com</h1></div>
</div>
</div>
</body>
</html>