<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_web');

$id = $_GET['id'];
echo $id;
$q = "DELETE FROM `suggestion` WHERE sug_id = $id;" ;

mysqli_query($con, $q);
    
header('location:admin_dash.php');   

?>s