<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'db_web');

$name = $_POST['uname'];
$pass = $_POST['psw'];
    

$q = "select * from admin where admin_name = '$name' && admin_pwd = '$pass'";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);



if($num == 1)
{
    $_SESSION['admin'] = $name;
   $message = "login succesfull " .$_SESSION['admin'];
       echo "<script>alert('$message');
       window.location.replace(\"admin_dash.php\");</script>";
}
else {
    $message = "login unsuccesfull";
    echo "<script>alert('$message');
       window.location.replace(\"login.php\");</script>";
}
?> 