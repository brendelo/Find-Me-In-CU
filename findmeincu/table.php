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
$sql = 'title, fname, lname, email, num1, officern, building, role';
mysql_select_db('findmeincu');
$retval = mysql_query($sql, $conn );
 if (! $conn){
 	die ('could not connect:'. mysql_error());

 }
while ($row = mysql_fetch_assoc($retval)) {
 echo "title : {$row['title']} <br>";
 	"fname : {$row['fname']} <br>";
 	"lname : {$row['lname']} <br>";
 	"emal : {$row['email']} <br>";	
 	"num1 : {$row['num1']} <br>";
 	"officern : {$row['officern']} <br>";
 	"building : {$row['building']} <br>";
 	"role : {$row['role']} <br>";
}

echo "fetched data successfully\n";

mysql_close($conn);

?>