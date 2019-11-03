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
        <link rel="stylesheet" href="css/user_event.css">
        <style type="text/css">
 
        </style>
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
    <li><a href="review.php">Review</a></li>
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>

   
        
        <?php
        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con, 'db_web');
        $q = " select * from events ";
        $query = mysqli_query($con,$q);  
        
        while($res = mysqli_fetch_array($query)){
        ?>
               <div class="card card-1">
                <img src="./images/planting.jpg" alt="Avatar" style="width:100%">
                <h3 align="center"><?php echo $res['event_name']?></h3>
        <div class="">
            <p><?php echo $res['event_desc'] ?></p>
        </div>
            
            <hr>
            <div class="container">
            Event Head:<?php echo $res['event_org'] ?><br>
            
            Date : <?php echo $res['event_date'] ?><br>
            
            <?php echo $res['org_phn'] ?>
                
            </div>
               </div>

            
           
        <?php
            
        }
   
            
        ?>    
</body>
</html>