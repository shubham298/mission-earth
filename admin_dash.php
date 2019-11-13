
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

    <link rel="stylesheet" href="css/style.css">	
    <link rel="stylesheet" href="css/admin_dash.css">
      
 <style type="text/css">
 	
#nav ul {
    margin:0px;
    padding:0px;
    list-style:none;
    }
 #nav ul li {    
    float:left;
    font-family:Arial, Helvetica, sans-serif;
    font-size:20px;
    color:#8bc34a;
    background-color: black;
    padding:3px 50px 3px 50px;
    border-right:2px #76ff03 solid;
    margin:7px 0px 0px 0px;
  
    }   
#nav ul li:hover{
  border-bottom:2px solid #76ff03;
 
}

li a:hover{
  color: #76ff03;

}

a{
    text-decoration: none;
    color: white;
    font-size: 0.9em;
}
td{
    font-weight: 600;
    }
 </style>
}
</head>
<body style="">
<div id="nav" class="mydiv" style="width:35%;">
	<ul>
		  <li><a href="admin_dash.php"><h4>Home</h4></a></li>
	  <li><a href="event.php"><h4>Events</h4></a></li>
	<li style=""><a href="logout.php"><h4>logout</h4></a></li>
	</ul>
</div>

<br>
	<h2 style="margin-top: 10%;" align="center">Suggestion submitted by Users.</h2>
<table class="my-table" cellspacing="10" cellpadding="30px" border="1pt" style="border-collapse:collapse;color: black;border-color: black;margin:90px auto">
<tr>
         	<th>Username</th>
         	<th>Suggestion</th>
            <th>Delete</th>
</tr>
 <?php
        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con, 'db_web');
        $q = " SELECT * FROM `suggestion` ";
        $query = mysqli_query($con,$q);    
        while($res = mysqli_fetch_array($query)){
                ?>
         
         <tr >

            <td><?php echo $res['user_name'] ?></td>
            <td><?php echo $res['description'] ?></td>
            <td><a class="" style="color: black;" href="sugg_delete.php?id=<?php echo $res['sug_id'];?>">Delete</a></td>
              </tr>
        <?php
            
        }
        ?>
        </table>





</body>
</html>