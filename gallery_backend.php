<?php
session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_web");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
    //getting user id
    $admin = $_SESSION['user'];
    $sql="SELECT `user_id` FROM `user` WHERE user_name='$admin'";
    $rr = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($rr);
        $idd=$res['user_id'];
        
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);
  	$sql = "  INSERT INTO `gallery` (`gallery_id`, `image`, `user_id`, `image_text`) VALUES (NULL, '$image', '$idd', '$image_text')";
  	// execute query

  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
      echo "<script>alert('$msg');
       window.location.replace(\"gallery.php\");</script>";
  	}else{
  		$msg = "Failed to upload image";
      echo "<script>alert('$msg');
       window.location.replace(\"gallery.php\");</script>";
  	}
  }
 
?>