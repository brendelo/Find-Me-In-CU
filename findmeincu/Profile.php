<?php
session_start();
require("connection.php");
// $firstname = mysql_real_escape_string($conn,$_REQUEST['first_name']);
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
</head>
<style>
body {
    font-family: 'corbel';
    background-image: url("dd.jpg");
    background-repeat: repeat-x, repeat-y;
}


.back{
padding: 5px;
background-color: blue;
border: 1px solid blue;
text-decoration: none;
color: white;
width: 90px;
border-radius: 10px;
margin-top: 20px;
font-family: 'corbel';



}

.loool{
  padding: 5px;
background-color: blue;
border: 1px solid blue;
text-decoration: none;
color: white;
width: 100px;
border-radius: 10px;
margin-top: 20px;
font-family: 'corbel';
font-weight: bold;

}
</style>
<body>

  <div style="width:500px; margin-right:auto; margin-left:auto; padding: 10px; border: 10px solid #e3e3e3; border-radius: 5px; background-color: #d3d3d3; border-radius: 10px; ">
    <?php

    
    $sql = "SELECT * FROM findmeincu where first_name = '$firstname' and last_name = '$lastname'";
    
$results = mysqli_query($conn, $sql);
$number = mysqli_num_rows($results);

// if ($number > 1){
//    $message = "{$number} results  ";
// }
// elseif ($number = 1) {
//       $message =  "{$number} result ";
//  }
//  else {
//      $message = " {$number} result ";
// }

// $row = mysqli_fetch_array($results);
echo"</br>";
// ECHO $message;

while($row = mysqli_fetch_array($results)){ ?>

<div class="info">
  <img style="width: 200px; border: 10px solid #e3e3e3; border-radius: 10px; " src="avatar/<?php echo $row['avatar']?>" alt="staff photo"/>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Title: <?php echo $row['title']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>First Name: <?php echo $row['first_name']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Last Name: <?php echo $row['last_name']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Email: <a href="mailto:<?php echo $row['e_mail']; ?>"> <?php echo $row['e_mail']; ?> <div class="back">Send Mail</div> </a></h3> </div>
&nbsp </br>
&nbsp </br>

  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Intercom Number: <?php echo $row['intercom_number']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Location: <?php echo $row['room_number']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Building: <?php echo $row['building']?></h3></div>
  <div style="background-color: #e3e3e3; border-radius: 5px; height: 30px;"><h3>Department/Role: <?php echo $row['role']?></h3></div>
  
  &nbsp </br>
   &nbsp </br>
  
  <a href="search.php" class="loool">Home</a>

 

</div>
 
 <!--  <?php $fname = $row['first_name']?>
  <?php $lname = $row['last_name']?>
 --> 

   <?php }  exit; ?>

//


   




</div>
</body>
</html>
