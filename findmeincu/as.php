<?php
if (isset($_REQUEST['email'])) {
	 $admin_email = "someone@example.com";
	 $email = $_REQUEST['email'];
	 $subject = $_REQUEST['subject'];
	 $comment = $_REQUEST['comment'];


	mail($admin_email, "$subject", $comment, "From:" . $email);
	echo "Thank you for contacting us";
}
?>

<form method="post">
email: <input name = "email" type="text"  /></br>
subject: <input name = "email" type="text"  /></br>
message: </br>
<textarea name = "comment" rows="15" cols="40"></textarea><br/>
<input type= "submit" value="Submit" />
</form>


</form>

<?php
?>