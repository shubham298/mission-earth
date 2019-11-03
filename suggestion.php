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
    <li><a href="review.php">Review</a></li>
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>

<form action="suggestion_backend.php" class="foo" onsubmit="return validateForm()" method="post" name="myForm"> 
  <fieldset style="border-color: white;margin-right: 26%;">
    <legend align="center">Suggestion</legend>
 <label>Description:</label><br>
 <textarea type="text" name="suggestion" rows="10" cols="74" style="border-radius: 4px;">
</textarea>

  <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>