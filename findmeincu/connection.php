<?php
$servernmame= "localhost";
$username= "root";
$password="";
$db_name="findmeincu";

//create connection
$conn= mysqli_connect($servernmame, $username);
if(!$conn){
	echo "Connection not successful";
}

//Connect to database
$db_select=mysqli_select_db($conn, "findmeincu");
if(!$db_select){
	echo "Database connection not successful";
} 
?>