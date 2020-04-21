<?php
include"connection.php";

if(isset($_POST['submit'])){
	session_start();
	$user = $_SESSION['user'];
	$qualification = $_POST['qualification'];
	$area_of_interest = $_POST['area_of_interest'];

	$sql = "INSERT INTO `detailsmaster`(email, qualification, area_of_interest) VALUES
	('$user','$qualification', '$area_of_interest')";
	$result = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
	<table border='1' align="center">
		<tr><td>Name</td><td>Email</td><td>Action</td></tr>

		<?php
		if(isset($_POST['submit'])){	
		$user = $_SESSION['user'];
		$sql_user = "SELECT `id`,`name`,`email` FROM `usermaster` where email='$user'" ;
		$result = $conn->query($sql_user);
		while($fetch = $result->fetch_assoc()){
			$name = $fetch['name'];
			$email = $fetch['email'];
			$id = $fetch['id'];
		
		?>
		<tr><td><?php echo $name; ?></td><td><?php echo $email;?></td>
			<td>
				<?php
				$view_href = "view.php?email=".$email;
				$delete_href = "delete.php?email=".$email;
				$edit_href = "edit.php?email=".$email;

?>
				<a href="<?php echo $view_href;?>">View & Edit </a> | <a href="<?php echo $delete_href;?>">Delete</a></td></tr>

				<?php
			}
		
		}
				?>
	</table>
</body>
</html>
