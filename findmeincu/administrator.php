<?php session_start(); ?>

<?php  $_SESSION['user_username'] = "fibiok";// include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php 
extract($_GET); 
if(!isset($_GET['francis']) && !isset($_POST['submit2'])){
        header("location:adminlogin.php?session=notset");}

        ?>
<?php
 
  $sql = "SELECT id, title, first_name, last_name, e_mail, intercom_number, room_number, building, role FROM findmeincu";
  $result = $conn->query($sql);
?>


<!DOCTYPE html>

  <head>

    <title>Administrator</title>
  </head>

<body>

<style>
body {
    font-family: 'corbel';
  
    background-image: url("dd.jpg");
    
}


.back{
padding: 5px;
background-color: #362E80;
border: 1px solid black;
text-decoration: none;
color: white;
width: auto;
float: right;
margin-top: -40px;



}

.navv{
padding: 5px;
background-color: #362E80;
border: 1px solid black;
text-decoration: none;
color: white;
width: auto;
float: left;
margin-top: -40px;



}

button{
  color: #FFF;
  background-color: black;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: auto;
  height: 50px;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
  float: right;
  margin-top: -80px;
  margin-right: 50px;
}

.as{
  background-color: purple;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 1600px;
  height: auto;
  border: 1px solid purple;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 purple inset;
  margin-bottom: 10px;
  
}


</style>
<div class="as"><h1>Administrator</h1>
<a href="components/logout.php" class="back">Sign Out</a>
<a href="admin.php" class="navv">Back Home</a>

</div>


  <div style="width: 1400px; height: auto; margin-right:auto; margin-left:50px; padding: 10px; border: 10px solid #e3e3e3; border-radius: 5px; background-color: #d3d3d3; border-radius: 10px; ">
    <table>
      <thead>
        <tr>
          <td>Title</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Intercom No</td>
          <td>Location</td>
          <td>Building</td>
          <td>Role</td>
        </tr>
      </thead>

      <tbody>
        <?php
          if($result->num_rows > 0) {
          
          while ($row=$result->fetch_assoc()) {
              echo "<tr>"; ?>
              
              <form name="form1" method="post" action="administrator.php">
              <input type="hidden" name="id[]" value="<?php  echo  $row["id"];  ?>" />
              <td> <input type="text" name="title[]" placeholder="<?php  echo  $row["title"]; ?>" value="<?php  echo  $row["title"];  ?>" />
              <td> <input type="text" name="fname[]" placeholder="<?php  echo  $row["first_name"]; ?>" value="<?php  echo  $row["first_name"]; ?> "/>
              <td> <input type="text" name="lname[]" placeholder="<?php  echo  $row["last_name"]; ?>" value="<?php  echo  $row["last_name"]; ?> "/>
              <td> <input type="text" name="email[]" placeholder="<?php  echo  $row["e_mail"]; ?>" value="<?php  echo  $row["e_mail"]; ?> "/>
              <td> <input type="text" name="intnum[]" placeholder="<?php  echo  $row["intercom_number"]; ?>" value="<?php  echo  $row["intercom_number"]; ?> "/>
              <td> <input type="text" name="rnum[]" placeholder="<?php  echo  $row["room_number"]; ?>" value="<?php  echo  $row["room_number"]; ?> "/>
              <td> <input type="text" name="building[]" placeholder="<?php  echo  $row["building"]; ?>" value="<?php  echo  $row["building"]; ?> "/>
              <td> <input type="text" name="role[]" placeholder="<?php  echo  $row["role"]; ?>" value="<?php  echo  $row["role"]; ?>" />
            

        
              <?php
              echo "</tr>"; 
            }  ?>

            <button type="submit" name="submit2" id="submit2" value="update">UPDATE</button>
             </form>
            <?php
          }
      if(isset($_POST['submit2'])){

        extract($_POST); ?> 
<div style="text-align: center; font-family : ariel; font-size: 20px; font-decoration: bold; color: blue;">
        <?php

        echo " " . count($_POST['fname']) . " Entries";
        for($i = 0 ; $i < count($_POST['fname']); $i++)
        {
          $UPDATE = mysqli_query($conn, "UPDATE findmeincu SET title ='$title[$i]',  first_name='$fname[$i]',  last_name = '$lname[$i]',  e_mail ='$email[$i]',  intercom_number='$intnum[$i]',  room_number='$rnum[$i]', building= '$building[$i]', role= '$role[$i]'  WHERE id = '$id[$i]' ") or die(mysqli_error());
        } if(isset($UPDATE)){
          echo " Updated Successfuly";
       //$_GET['francis']= "ibiok";
        }
      } ?>
      </div> 
       <?php
          $conn->close();
        ?>  
      </tbody>
    </table>

  </div>

</div>

</body>

</html>
