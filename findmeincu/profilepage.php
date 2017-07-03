<?php require("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>


body {
    font-family: 'arial';
  
    background-image: url("C:/wamp/www/findmeincu/dd.jpg");
    margin-top: 100px;
    background-repeat: repeat-x, repeat-y;
    
}
.page-header{
    text-align: center;
}

.info {
  width:500px; padding: 10px; border: 10px solid #d3d3d3; 
  border-radius: 5px; background-color: #d3d3d3; opacity: 0.8; margin-left: auto; margin-right: auto; 
}
</style>
</head>
<body>

<div class="page-header">
    <h1>Search Results</h1>
</div>

<?php

//Post data sent from form
$search= $_POST['search'];



//To prevent MySQL injections

$search= mysqli_escape_string($conn, $search);

 //Perform SQL Query
$sql= "SELECT * FROM `findmeincu` where first_name like '%$search%' or last_name like '%$search%' or title like '%$search%'  order by id";
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

  <img src="avatar/<?php echo $row['avatar']?>" style="width : 200px; padding-left:150px;" alt="staff photo"/>
  <h3>Title: <?php echo $row['title']?></h3>
  <h3>First Name: <?php echo $row['first_name']?></h3>
  <h3>Last Name: <?php echo $row['last_name']?></h3>
  <h3>Email: <?php echo $row['e_mail']?></h3>
  <h3>Intercom Number : <?php echo $row['intercom_number']?> </h3>
  <h3>Room Number : <?php echo $row['room_number']?> </h3> 
  <h3>Building : <?php echo $row['building']?></h3>
  <h3>Role: <?php echo $row['role']?></h3> 
  <h1>___________________________</h1>




</div>
<?php }?>


<?php exit; ?>