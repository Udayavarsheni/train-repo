<?php
require "connection.php"
?>
<html>
<head>
<title>Login page</title>
</head>
<body >
	<form method="post" action="login.php" style="float:right;">
		<input type="submit" name="logout" value="Logout">
	</form>
	<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
	<center>
	<h3><b>Login</b></h3>
	</center>

	<form method="post" action="login.php">
		
		<tr>
    	<td align='center'>Username *</td>
    	<td><input type="text" name="username" placeholder="username" required ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
    	<td align='center'>Password *</td>
    	<td><input type="password" name="password" placeholder="password"  pattern="[A-Za-z0-9_]{8,15}" required></td>
		</tr>	
		<tr> <td>&nbsp;</td> </tr>
		<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
		<tr>

    	<td align='center'><input type="submit" name="submit" value="Login"></td>
		</tr>
		</table>			
	</form>
</table>
	

</body>
</html>


<?php
if(isset($_POST['submit']))
{
	
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		$pass=md5($_POST['password']);
		$user=$_POST['username'];
		$sql="SELECT name,password FROM usermaster where name='$user' AND password='$pass'" ;
		$result=$conn->query($sql);
		if($result)
		{
			echo "Welcome!!. ".$user;
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['logged_in']="TRUE";
		}
		else
		{
			echo "Username or Password is incorrect!!.";
		}
	}
}
?>
<?php

if(isset($_POST['logout']))
{	
	session_start();
	if(isset($_SESSION['user']))	
	{	
		session_destroy();
		echo "Logout successfully!!.";	
	}
	else
	{
		echo "Log in First!!.";
	}	
}
?>