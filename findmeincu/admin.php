<?php if(isset($_POST['submit1'])){ $_SESSION['user_username'] = "francis";} ?>
<?php $_SESSION['user_username'] = "francis";// include 'components/authentication.php' ?>     
<?php include'components/session-check.php' //get_include_path(oid) 'components/session-check.php' ?>

<DOCTYPE Html>
<title>
	Covenant University
</title>
<style>
		body {
    font-family: 'corbel';
  
    background-image: url("dd.jpg");s
    margin-top: 50px;
}

.a{
	width:500px; margin-right:auto; margin-left:auto; padding: 10px; border: 10px solid #e3e3e3; border-radius: 5px; background-color: #d3d3d3; border-radius: 10px;
 padding: 20px 0;
  position: relative;
  z-index: 2;}

  form input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: purple;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: white;
  width: 300px;
  color: #53e3a6;
}
form button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #53e3a6;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;

}
.back{
  outline: 0;
  border: 1px solid purple;
  background-color: purple;
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  font-weight: 300;
  outline: 0;
  background-color: purple;
  border: 0;
  padding: 10px 15px;
  color: #53e3a6;
  border-radius: 3px;
  width: 100px;
  cursor: pointer;
  font-size: 20px;
  text-decoration: none;
  margin-left: 180px;
}

.backk{
  outline: 0;
  border: 1px solid purple;
  background-color: purple;
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  font-weight: 300;
  outline: 0;
  background-color: purple;
  border: 0;
  padding: 10px 15px;
  color: #53e3a6;
  border-radius: 3px;
  width: 100px;
  cursor: pointer;
  font-size: 20px;
  text-decoration: none;
  float: right;
}

</style>



<?php 
if(isset($_POST['submit1'])){
$_SESSION['user'] = $_POST['username'];


$_SESSION['pass'] = $_POST['password'];

}
$userid = $_SESSION['user'];
$userpass = $_SESSION['pass'] ;
$username = "francis";
$password = "ibiok";

$_SESSION['userusername'] = $userid;
$_SESSION['user_password'] = $userpass;?>
<a href="administrator.php?francis=<?php echo urlencode('ibiok'); ?>" class="backk">Records</a><?php
if(($_SESSION['userusername'] == $username)&&($_SESSION['user_password'] == $password)){
   $_SESSION['user_username'] = $username; }
   if (isset($_SESSION['user_username'])){
// include 'components/session-check.php' ;
	?>
<div class="a">
<form action= "" method="post">

<input type="text" name="title" placeholder= "Title">
<input type="text" name="fname" placeholder= "First Name">
<input type= "text" name="lname" placeholder= "Last Name">
<input type="text" name="email" placeholder= "E-mail">
<input type= "number" name="num1" placeholder= "Intercom Number">
<input type= "alphas" name="officern" placeholder= "Location">
<input type= "text" name="building" placeholder= "Building">
<input type= "text" name="role" placeholder= "Department">

<input type= "submit" name="submit" value="Submit">
&nbsp </br>
&nbsp </br>
&nbsp </br>
<a href="components/logout.php" class="back">Sign Out</a>

</form>
</div>
<?php

//Post data sent from form
if (isset($_POST['submit'])){
$title= $_POST['title'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$num1= $_POST['num1'];
$officern= $_POST['officern'];
$building= $_POST['building'];
$role= $_POST['role'];


//To prevent MySQL injections
// $title= mysqli_real_escape_string($conn, $title);
// $fname= mysqli_real_escape_string($conn, $fname);
// $lname= mysqli_real_escape_string($conn, $lname);
// $email= mysqli_real_escape_string($conn, $email);
// $num1= mysqli_real_escape_string($conn, $num1);
// $officern= mysqli_real_escape_string($conn, $officern);
// $building= mysqli_real_escape_string($conn, $building);
// $role= mysqli_real_escape_string($conn, $role);

 //Perform SQL Query
$sql= "INSERT INTO `findmeincu` (`title`, `first_name`, `last_name`, `e_mail`, `intercom_number`, `room_number`, `building`, `role`)
     VALUES ('$title', '$fname', '$lname', '$email', '$num1','$officern', '$building', '$role')";
if(mysqli_query($conn, $sql)) { 
    echo '<script language="javascript">';
    echo ' alert("Your record has been added to the Database! Congratulations!")';

    echo '</script>';
    
  //  header ("location :admin.php");
   
} else {
    echo "SQL Query not successful";
}     
}
?>

	<?php 
exit ;
} else {
	echo "please try again";
	exit;
}

 ?>



