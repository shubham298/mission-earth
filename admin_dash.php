
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save earth</title>
    <link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/nav.css">
</head>
<body>
<div id="nav" class="mydiv" style="width:35%;">
	<ul>
		  <li><a href="admin_dash.php">Home</a></li>
	  <li><a href="event.php">Events</a></li>
	<li style=""><a href="logout.php">logout</a></li>
	</ul>
</div>
<div class="hea">
<h1 align="center">ADMIN DASHBOARD</h1>
   <h1><?php echo  $_SESSION['admin']?></h1>
</div>
   
   
</body>
</html>