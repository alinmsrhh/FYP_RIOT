<html>


<body>
<center>
</br></br>
<form action="passgen.php" method="POST">
	Please enter the password to hash :&nbsp;<input type="text" id="pass" name="pass">
	<input type="submit" name="submit" value="Generate">
</form>


<?php
	if(isset($_POST['submit']))
	{
		echo password_hash($_POST['pass'], PASSWORD_DEFAULT);
	}
?>

</center>
</body>
</html>