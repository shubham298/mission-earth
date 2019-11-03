
<!DOCTYPE html>
<html lang="zxx">
<head>
	<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/login.css">
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
<form action="user_reg.php" method="post">
  <div class="container">
      <h2 align="center">User Signup</h2>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <input type="password" placeholder="Enter Password" name="psw" required>    
    <button type="submit">SIGN IN</button>
  </div>
</form>
</body>
</html>
