<?php
include"connection.php";

if(isset($_POST['update'])){
	$email = $_POST['email'];
	$qualification = $_POST['qualification'];
	$area_of_interest = $_POST['area_of_interest'];

	$sql = "UPDATE `detailsmaster` SET `qualification`= '$qualification', `area_of_interest` = '$area_of_interest' WHERE `email` = '$email'";

	$result = $conn->query($sql);
	if($result){
		echo "Details Updated for account ".$email;
		echo "<br><a href='details.php'>Go Back</a>";
	}
	else{
		echo "Problem with connection. Error Occured.";
	}
}

?>