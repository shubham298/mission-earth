<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save earth</title>
    <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/admin_event.css">
</head>
<body>
<div id="nav" class="mydiv">
	<ul>
	  <li><a href="admin_dash.php">Home</a></li>
	  <li><a href="event.php">Events</a></li>
	<li style=""><a href="logout.php">logout</a></li>
	</ul>
</div>
<div class="hea">
<h1 align="center">EVENTS</h1>
   <h1><?php echo  $_SESSION['admin']?></h1>
</div>
<form action="event_backend.php" class="foo" method="post" enctype="multipart/form-data"> 
  <fieldset style="border-color: white;margin-right: 26%;">
    <legend align="center">Event Registration</legend>

  <label>Event name:</label>
  <input type="text" name="event_name"><br>

  <label>Event date:&nbsp;&nbsp;</label>
  <input type="date" name="event_date"><br>

 <label>Description:</label>
  <textarea type="text" name="desc" rows="10" cols="74" style="border-radius: 4px;">
  </textarea>

  <br><label> Event Image:</label>
  <input style="border:none;" type="file" name="event_image">

 <br><label> Event Head:</label>
  <input type="text" name="event_head">

  <br><label>Phone-no:&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="tel" name="head_phno">
  
  <input type="submit" value="Submit">
  </fieldset>
</form>
   <table cellspacing="10px" cellpadding="10px" border="1pt" style="border-collapse:collapse;color: black;border-color: black;">
       <br>
        <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Description</th>
            <th>Event Head</th>
            <th colspan="">Phone No.</th>
          <th></th>
        </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con, 'db_web');
        $q = " select * from events ";
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){
                ?>
         <tr >
            <td><?php echo $res['event_name'] ?></td>
            <td><?php echo $res['event_date'] ?></td>
            <td><?php echo $res['event_desc'] ?></td>
            <td><?php echo $res['event_org'] ?></td>
            <td><?php echo $res['org_phn'] ?></td>
            <td><a class="" href="event_delete.php?id=<?php echo $res['event_id'];?>">Delete</a></td>
              </tr>
        <?php
            
        }
   
            
        ?>    
    </table> 
   
</body>
</html>