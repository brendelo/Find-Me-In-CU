<?php session_start(); ?>
<?php include 'controllers/base/head.php' ?>
<?php require("connection.php"); ?>


<html>
<head>
<title>Covenant University</title>
</head>

<style>
.a{
	width:500px; margin-right:auto; margin-left:auto; padding: 10px; border: 10px solid purple; border-radius: 5px; background-color: purple; border-radius: 10px;
	 padding: 20px 0;
  position: relative;
  z-index: 2;
margin-top: 5px;
}

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
  color: white;
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



.b{
	margin-left: 120px;


}

body {
    font-family: 'corbel';
  
    background-image: url("d.jpg");
    background-repeat: repeat-x, repeat-y;
    margin-top: 200px;
    }
</style>



<body>

	<div class= "a">
<form name="adminform" method="post" action="admin.php">
<label for="username"></label>
<input name="username" type="text" id="username" placeholder="username" required/> </br>
&nbsp </br>
<label for="password"></label>
<input name="password" type="password" id="password" placeholder="password" required/></br>
&nbsp </br>

<div class="b"> <button name="submit1" id="submit1" type="submit"> Sign In </button></div>



</form>

</div>


</body>


</html>