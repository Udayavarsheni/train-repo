<?php
require "connection.php"
?>
<html>
<head>
<title>Registration page</title>
</head>
<body>
	<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
	<center><tr>
	<td><h3><b>Registeration Form</b></h3></td>
	</tr></center>
	<form method="post" action="reg.php">
		<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
		<tr>
    	<td align='center'>Username *</td>
    	<td><input type="text" name="username" placeholder="username" required="Enter the username" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
    	<td align='center'>Emailid *</td>
    	<td><input type="email" name="emailid" placeholder="emailid" required></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
    	<td align='center'>Password *</td>
    	<td><input type="password" name="password" placeholder="password" required pattern="[A-Za-z0-9_]{8,15}" title="Password can contain alphabets,numbers,underscore.It contain minimum of 8 and maximum of 15 characters."></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
		<tr>
    	<td align='center'><input type='submit' name='submit' value="register"></td>
		</tr>
		</table>
		<hr>		
		<center><tr>
		<td ><p>Already have an account?<a href="login.php">Sign in</a></p></td>
		</tr></center>
		</table>
	</form>
	</table>
</body>
</html>
<?php
if(isset($_POST['username'])&&isset($_POST['emailid'])&&isset($_POST['password']))
{
	$user=$_POST['username']; 
	$email=$_POST['emailid'];
	$password=md5($_POST['password']);

	$sql="INSERT INTO usermaster (name,email,password) VALUES ('$user','$email','$password')";
	$result=$conn->query($sql);
	if($result)
	{
		echo "Registration successful!! ".$user;
	}
	else
	{
		echo "There is an error.";
	}
	
}
?> 

