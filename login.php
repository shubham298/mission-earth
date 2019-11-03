<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/nav.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {}
</style>
</head>
<body>
  <div id="nav">
  <ul>
      <li><a href="start.php">first</a></li>
      <li><a href="user_login.php">login</a></li>
      <li style=""><a href="#">signin</a></li>
  </ul>
</div>
 <div class="imgcontainer">
    <img src="./images/Plant.gif" alt="Avatar" class="avatar">
  </div>
<form action="super_login.php" method="post">
  <div class="container">
    <h2 align="center">Admin Login</h2>
    <!-- <label for="uname"><b>Username</b></label> -->
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <!-- <label for="psw"><b>Password</b></label> -->
    <input type="password" placeholder="Enter Password" name="psw" required>   
    <button type="submit">Login</button>
  </div>
</form>


</body>
</html>
