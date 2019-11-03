
<?php
session_start();
if(!isset($_SESSION['user'])){
	$message = "not logged in";
    echo "<script>alert('$message')";
    header('location:user_login.php');
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
<div id="nav" class="mydiv">
	<ul>
	  <li><a href="user_dash.php">Home</a></li>
	  <li><a href="about_us.php">About&nbsp;us</a></li>
	  <li><a href="user_event.php">Events</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href="suggestion.php">Suggestion</a></li>
	  <li><a href="contact_us.php">Contact us</a></li>
	  <li><a href="review.php">Review</a></li>
	  <li><a href="logout.php">logout</a></li>
	</ul>
</div>
<div class="hea">
<h1 align="center">USER DASHBOARD</h1>
<h1>SAVE <span style="background-color: green;color: white;">PLANT TREE</span>EARTH </h1>
</div>
</body>
</html>