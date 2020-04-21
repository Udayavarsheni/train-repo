<?php
include"connection.php";

if(isset($_GET['email'])){
	$email = $_GET['email'];
	$sql = "SELECT * FROM `detailsmaster` where `email` = '$email' ";

	$reuslt = $conn->query($sql);

	$fetch = $reuslt->fetch_assoc();
	$qualification = $fetch['qualification'];
	$area_of_interest = $fetch['area_of_interest'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW|EDIT</title>
</head>
<body>
	<form action="edit.php" method="post">
		<table style="border: 1px solid black" align="center">
			<tr>
				<td>
					<input type="hidden" name="email" value="<?php echo $email;?>">
		<input type="text" name="qualification" value="<?php echo $qualification;?>">
	</td>
	<td>
		<textarea name="area_of_interest"><?php echo $area_of_interest;?></textarea></td>
		<tr><td><a href="index.php"><button type="button">GO BACK</button></a></td><td><input type="submit" name="update" value="UPDATE"></td></tr>

	</form>
</body>
</html>