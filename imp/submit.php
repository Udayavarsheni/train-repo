<?php

session_start();

if(isset($_SESSION['uname'])){
	echo "Logged In :".$_SESSION['uname'];
}
else{
	echo "Not Logged In, Login in to continue";
}


?>