<?php session_start();  ?>
<?php if ($_POST['submit']){$_SESSION['user_username'] = "francis";}// include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>

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
    
    header ("location :admin.php");
   
} else {
   	echo "SQL Query not successful";
}     
}
?>


