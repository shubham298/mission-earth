<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save earth</title>
    <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/admin_event.css">
        <style type="text/css">
          body{
    background-color: #2e7d32;
    }
    fieldset{
       background:url("./images/set1.png")
    no-repeat center center fixed;
    background-size: cover;
    }
        </style>
</head>
<script type="text/javascript">
    function validateForm() {
  var x = document.forms["myForm"]["suggestion"].value;
  if (x == "") {
    alert("Suggestion must be filled out");
    return false;
  }
}
</script>
<body>
<div id="nav" class="mydiv">
  <ul>
    <li><a href="user_dash.php">Home</a></li>
    <li><a href="about_us.php">About&nbsp;us</a></li>
     <li><a href="user_event.php">Events</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="suggestion.php">Suggestion</a></li>
    <li><a href="contact_us.php">Contact us</a></li>
<!--     <li><a href="review.php">Review</a></li> -->
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>

<form action="suggestion_backend.php" class="foo" onsubmit="return validateForm()" method="post" name="myForm"> 
  <fieldset style="border-color: white;margin:120px auto;width:72%;margin-left: 0;
    opacity: 0.9;padding: 90px;">
    <legend style="color: black;" align="center"></legend>
 <label style="color: white;font-weight: 900;text-align: center;margin-left: 17%;padding-bottom: 4%;">Suggestion to admin</label><br>
 <textarea placeholder="Write ur suggestion" type="text" name="suggestion" rows="10" cols="74" style="    border-radius: 5px;
    width: 70%;
    height: 80px;
    font-weight: 800;
    font-size: 20px;">
</textarea>

  <input style="margin-left:5px;color:black;font-weight: 800;padding: 5px;" type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>