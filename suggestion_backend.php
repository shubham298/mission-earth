<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_web');


$suggestion =$_POST['suggestion'];
 
$user = $_SESSION['user'];
    $sql="SELECT `user_id` FROM `user` WHERE user_name='$user'";
    $rr = mysqli_query($con, $sql);
$res = mysqli_fetch_array($rr);
        $idd=$res['user_id'];        
       $qy = "INSERT INTO `suggestion` (`sug_id`, `user_id`,`user_name`, `description`) VALUES (NULL, '$idd','$user', '$suggestion ')";
    $result = mysqli_query($con, $qy); 

   if($result){
  $message = "success ";
       echo "<script>alert('$message');
       window.location.replace(\"suggestion.php\");</script>";
   } else{
       $message = "Error";
       echo "<script>alert('$message');
       window.location.replace(\"suggestion.php\");</script>";
   }


?>