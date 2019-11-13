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
  
        <style type="text/css">
        body{
          background-color: #81c784;
        }
           input {
              width: 40%;
              padding: 8px;
              margin: 61px 0 35px 59px; 
              display: inline-block;
              margin-top: 0%;
              border: none;
              border-radius: 3px;
              border: 1px solid black;
            }
input:focus {
              background-color: #ddd;
              outline: none;
             }
    label{
              font-size: 1.3em;
              color: white;
              font-weight: 900;
          } 
          fieldset{
                    background:url("./images/set1.png")
                    center center fixed;
                    background-size: cover;
                  }

        </style>
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

<form action="event_backend.php" class="foo" method="post" enctype="multipart/form-data"> 
  <fieldset style="margin-right: 51%; 
    margin-left: 25%;
    margin-right: 25%;">
    <legend align="center"></legend>

  <label>Event name:</label>
  <input type="text" name="event_name"><br>

  <label>Event date:&nbsp;&nbsp;</label>
  <input type="date" name="event_date"><br>

 <label style="    position: absolute;
    top: 35%;">Description:</label>
  <textarea type="text" name="desc" rows="10" cols="50" style="border-radius: 4px;
    margin-left: 203px;
    border-color: black;">
  </textarea>

  <br><label style=""> Event Image:</label>
  <input style="border:none;background-color: #1b5e20;font-weight: 600;color: white;" type="file" name="event_image">

 <br><label> Event Head:</label>
  <input type="text" name="event_head">

  <br><label>Phone-no:&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="tel" name="head_phno">
  
  <input style="    margin-left: 32%;
    width: 20%;
    font-size: 21px;
    background-color: #2e7d32;
    color: white;
    font-weight: 700;" type="submit" value="Submit">
  </fieldset>
</form>
   <table cellspacing="10px" cellpadding="10px" border="1pt" style="border-collapse:collapse;color: black;border-color: black;margin:0 auto;">
       <br>
        <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Description</th>
            <th>Event Head</th>
            <th >Phone No.</th>
            <th>Delete</th>
         
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
            <td><a class="" style="color: black;" href="event_delete.php?id=<?php echo $res['event_id'];?>">Delete</a></td>
              </tr>
        <?php
            
        }
     
        ?>    
    </table> 
   
</body>
</html>