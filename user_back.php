<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'db_web');

$name = $_POST['uname'];
$pass = $_POST['psw'];
    

$q = "select * from user where user_name = '$name' && user_pwd = '$pass'";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);



if($num == 1)
{
    $_SESSION['user'] = $name;
   $message = "login succesfull " .$_SESSION['user'];
       echo "<script>alert('$message');
       window.location.replace(\"user_dash.php\");</script>";
}
else {
    $message = "login unsuccesfull";
    echo "<script>alert('$message');
       window.location.replace(\"user_login.php\");</script>";
}
?>