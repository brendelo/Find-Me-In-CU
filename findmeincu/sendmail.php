<DOCTYPE Html>
<title>
	Send Mail
</title>
<style>
		body {
    font-family: 'corbel';
  
    background-image: url("C:/wamp/www/findmeincu/dd.jpg");
    background-repeat: repeat-x, repeat-y;
    margin-top: 50px;
}

.a{
	width:700px; margin-right:auto; margin-left:auto; padding: 10px; border: 10px solid #e3e3e3; border-radius: 5px; background-color: #d3d3d3; border-radius: 10px;
	 display: block;
  margin-bottom: 8px;
}
  input[type="text"], input[type="text"], input[type="text"], input[type="text"], input[type="textarea"]
  {
    background: none repeat scroll 0% 0% #E8EEEF;
    border: medium none;
    font-size: 16px;
    height: auto;
    margin: 0px 0px 30px;
    outline: 0px none;
    padding: 15px;
    width: 100%;
    color: #8A97A0;
    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.03) inset;

}

label {
    display: block;
    margin-bottom: 8px;
}


.send{
background-color: gray;
border: 1px solid black;
text-decoration: none;
color: white;
}

button{
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: auto;
  height: auto;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}


</style>


<div class="a">
<form name="contactform" method="post" action="send_form_email.php"> 
	<table width="450px"> <tr> <td valign="top"> 
		
		<label for="first_name">First Name</label> </td> <td valign="top"> 
		<input type="text" name="first_name" maxlength="50" size="30"> </td> </tr> <tr> <td valign="top"">
		
		<label for="last_name">Last Name</label> </td> <td valign="top"> 
		<input type="text" name="last_name" maxlength="50" size="30"> </td> </tr> <tr> </tr> <tr> </tr> <tr> <td valign="top"> 
		
		<label for="email">Email Address</label> </td> <td valign="top"> <input type="text"  name="email" maxlength="80" size="30"> </td>  </tr> <tr> </tr> <tr> </tr> <tr>
		<td valign="top"> 


		
		<label for="comments">Comments</label> </td> <td valign="top"> <textarea name="comments" maxlength="5000" cols="50" rows="15"></textarea> </td> </tr> <tr> </tr> <tr> <td colspan="2" 
		
		<input type="submit" value="Submit"> <a href="send_form_email.php">Email Form</a> </td> </tr> </table> </form>

		<button name="submit1" id="submit1" type="submit">Send</button>

	</tr></td> </tr>
	</table> 
	</form>

</div>

