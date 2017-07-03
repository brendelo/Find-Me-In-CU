<?php session_start(); ?>
<?php require("connection.php"); ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ADMINISTRATOR</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Access Database</h1>
		
		<form class="form">
			<form name="adminform" method="post" action="admin.php">
			<label for="username"></label>
<input name="username" type="text" id="username" placeholder="username" required/>
<label for="password"></label>
<input name="password" type="password" id="password" placeholder="password" required/>

			<button name="submit1" id="submit1" type="submit">Sign In</button>
		</form>
	</div>

    
    
    
  </body>
</html>
