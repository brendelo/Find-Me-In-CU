<?php
session_start();
?>

<?php require("connection.php"); ?>
<?php include 'controllers/base/javascript.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>

.fibiok_button{
padding: 5px;
background-color: #362E80;
border: 1px solid black;
text-decoration: none;
color: white;

}
body {
    font-family: 'corbel';
  
    background-image: url("dd.jpg");
    
    
}
.page-header{
    text-align: center;
    font-size: 16px;
}

.info {
  width:500px; padding: 10px; border: 10px solid #d3d3d3; 
  border-radius: 10px; background-color: #d3d3d3; margin-left: auto; margin-right: auto; 
}
.infoo{
  float: right; border: 10px solid #e3e3e3; width: 200px; border-radius: 10px;
}
</style>
</head>
<body>

<div class="page-header">
    <h1>Search Results</h1>
</div>

<?php

//Post data sent from formh
$search= $_POST['search'];
$search = str_replace(' ','', $search);
// $search = str_replace('  ','', $search);



//To prevent MySQL injections

$search= mysqli_escape_string($conn, $search);

 //Perform SQL Query
$sql= "SELECT * FROM `findmeincu` where `first_name` LIKE '%$search%' OR `last_name` LIKE '%$search%' OR `title` LIKE '%$search%' order by id";
$results = mysqli_query($conn, $sql);
$number = mysqli_num_rows($results);

if ($number > 1){
   $message = "{$number} results for '$search'";
}
elseif ($number == 1) {
      $message =  "{$number} result for '$search'";
 }
 else {
     echo "<h1 style=\"text-align:center;\"> No result for '$search'</h1>";
     exit;
}




   


?>

<!-- User Details-->
  <h1 style="text-align:center;"|><?php echo $message ;?></h1>

<?php while($row = mysqli_fetch_array($results)){; ?>

<div class="info">

  <img style="width: 200px; border: 10px solid #e3e3e3; border-radius: 10px; float: right;  " src="avatar/<?php echo $row['avatar']?>" alt="staff photo"/>
  <h3>Title: <?php echo $row['title']?></h3>
  <h3>First Name: <?php echo $row['first_name']?></h3>
  <h3>Last Name: <?php echo $row['last_name']?></h3>

  <?php $fname = $row['first_name']?>
  <?php $lname = $row['last_name']?>
  
<a href="Profile.php?firstname=<?php echo $fname ?>&&lastname=<?php echo $lname ?>" class="fibiok_button">View</a>
  
  <!-- <h3>Email: <?php echo $row['e_mail']?></h3>
  <h3>Intercom Number : <?php echo $row['intercom_number']?> </h3>
  <h3>Room Number : <?php echo $row['room_number']?> </h3> 
  <h3>Building : <?php echo $row['building']?></h3>
  <h3>Role: <?php echo $row['role']?></h3> --> 
  <h1>_______________________________</h1>




</div>
<?php }?>


<?php exit; ?>
>