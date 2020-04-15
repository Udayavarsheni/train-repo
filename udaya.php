
<html>
<head>
<title>Login page</title>
</head>
<body >
	
	<form method="post" action="login.php">
		Username *<input type="text" name="username" placeholder="username" required  >
		<br><br>		
		Password *<input type="password" name="password" placeholder="password"  pattern="[A-Za-z0-9_]{8,15}" required>
		<br><br>
		<input type="submit" name="submit" value="Login">
			
	</form>
	<form method="post" action="login.php">
		<input type="submit" name="logout" value="Logout">
	</form>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$password="helloudaya";
	$username="udaya";
	if(isset($_POST['username']))
	{
		$pass=$_POST['password'];
		$user=$_POST['username'];
		
		if($pass==$password&&$user==$username)
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
{	session_start();
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


