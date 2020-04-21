<?php
require "connection.php";


if(isset($_POST['email'])&&isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT `password` FROM `usermaster` WHERE `email`= '$email'";

	$result = $conn->query($sql);

	$fetch = $result->fetch_assoc();

	$db_password = $fetch['password'];

	if(md5($password)==$db_password){
		session_start();
		$_SESSION['user'] = $email;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
</head>
<body>
<?php
if(isset($_SESSION['user'])){
?>
	<form action="details.php" method="post">
		<table>
			<tr><td><label>Enter Your Qualification :</label></td><td><input type="text" 
				name="qualification" required=""></td></tr>
			<tr><td>Area of Interest : </td><td><textarea name="area_of_interest"></textarea></td></tr>
			<tr><td></td><td><input type="submit" name="submit"></td></tr>
		</table>
	</form>
	<?php
}
else{
	echo "<a href='login.php'>Click Here to Login</a>";
}
?>
</body>
</html>