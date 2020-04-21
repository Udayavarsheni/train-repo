<?php
require "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form action="main.php" method="post">
	<input type="email" name="email" placeholder="Enter your Login Email">
		<br><br><br>
	<input type="password" name="password" placeholder="Enter your password">
<br><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>