<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_web');


$name = $_POST['event_name'];
$date= $_POST['event_date'];

$desc = $_POST['desc'];

$event_head = $_POST['event_head'];  
$head_phno = $_POST['head_phno'];  

$image = $_FILES['event_image']['name'];


$admin = $_SESSION['admin'];
    $sql="SELECT `admin_id` FROM `admin` WHERE admin_name='$admin'";
    $rr = mysqli_query($con, $sql);
$res = mysqli_fetch_array($rr);
        $idd=$res['admin_id'];
$target = "images/".basename($image);
       $qy = "INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_desc`, `event_org`, `org_phn`,`event_image`, `admin_id`) VALUES (NULL, '$name', '$date', '$desc', '$event_head', '$head_phno','$image', '$idd')";
    $result = mysqli_query($con, $qy); 

if (move_uploaded_file($_FILES['event_image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
      echo "<script>alert('$msg');
       window.location.replace(\"event.php\");</script>";
    }
   if($result){
  $message = "event is added succesfully ";
       echo "<script>alert('$message');
       window.location.replace(\"event.php\");</script>";
   } else{
       $message = "event not added";
       echo "<script>alert('$message');
       window.location.replace(\"event.php\");</script>";
   }


?>