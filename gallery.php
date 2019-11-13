<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/gallery.css">

</script>
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
  <!--     <li><a href="review.php">Review</a></li> -->
      <li><a href="logout.php">logout</a></li>
    </ul>
</div>

 <!-- <div id="pagewrap">
  <div class="gallery">
   <article class="image">
    <img src="https://res.cloudinary.com/dnroxbmjk/image/upload/v1462049388/img01_wqwpnu.jpg"/>
    <p>Text</p> -->

</article>
<div id="content">
  <div class='grid-container'>
  <?php
  $db = mysqli_connect("localhost", "root", "", "db_web");
   $result = mysqli_query($db, "SELECT * FROM gallery");
      while ($row = mysqli_fetch_array($result)) {
      echo "<div class='grid-item'>";
      echo "<div id='pagewrap'>";
      echo "<div id='gallery'>";
      echo "<div class='image'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      
    }

  ?>
</div>
  <form method="POST" action="gallery_backend.php" enctype="multipart/form-data" name="myForm">
  	<div align="center">
      <span style="color:black;font-size: 15px;font-weight: 800;">Upload Image</span>
  	  <input type="file" name="image" id="file1" required>

  	</div>
    <br>
  	<div>
      <textarea 
      	id="text"cols="40"	rows="4" name="image_text" style="background-color: #81c784;
    width: 52%;
    color: black;
    font-size: 20px;
    font-weight: 800;border: 4px solid green;" placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" style="padding: 20px;
    border-radius: 8px;
    background-color: black;
    color: white;
    width:12%;
    font-size: 20px;" name="upload" >POST</button>
  	</div>
  </form>
</div>
</body>
</html>