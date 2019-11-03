<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_web');


$suggestion =mysqli_real_escape_string($_POST['suggestion']);
 
$user = $_SESSION['user'];
    $sql="SELECT `user_id` FROM `user` WHERE user_name='$user'";
    $rr = mysqli_query($con, $sql);
$res = mysqli_fetch_array($rr);
        $idd=$res['user_id'];
//        echo $idd;
        
       $qy = "INSERT INTO `suggestion` (`sug_id`, `user_id`, `description`) VALUES (NULL, '$idd', '$suggestion ')";
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