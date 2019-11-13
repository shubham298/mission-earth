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
      <li><a href="login.php">admin_login</a></li>
      <li><a href="user_login.php">user_login</a></li>
      <li style=""><a href="signin.php">user_signup</a></li>
  </ul>
</div>
  <div class="imgcontainer">
    <img src="./images/Plant.gif" alt="Avatar" class="avatar">
  </div>
<form action="user_back.php" method="post">
  <div class="container">
    <h2 align="center">User Login</h2>
    <!-- <label for="uname"><b>Username</b></label> -->
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <!-- <label for="psw"><b>Password</b></label> -->
    <input type="password" placeholder="Enter Password" name="psw" required>   
    <button type="submit">Login</button>
</form>
</div>

</body>
</html>
