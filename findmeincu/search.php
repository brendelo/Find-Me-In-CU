
<?php require("connection.php"); ?>
<?php include 'controllers/base/head.php' ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covenant University</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>
    
    

<div id="page">
    <h1>Covenant University</h1>
    
    <form id="searchForm"  method="post" role="search" action="searchresults.php">
        
		<fieldset>
           	<input id="search" class="search form-control" name="search" type="text" required>
            &nbsp</br>
            <div id="display"></div>
            
            <input type="submit" value="Submit" id="submit" />
            
        </fieldset>
    </form>


    
</div>



</body>
</html>
