<?php
session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_web');

if($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['uname'];
$pass = $_POST['psw'];
    


$q = "INSERT INTO `user` (`user_id`, `user_name`, `user_pwd`) VALUES (NULL,'$name', '$pass')";
if (mysqli_query($con, $q)) {
    $message ="New record created successfully";
	 echo "<script>alert('$message');
       window.location.replace(\"user_login.php\");</script>";
    
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}


}

?> 