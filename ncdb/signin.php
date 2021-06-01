<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['fname']) && isset($_POST['pass'])){
	//query for checking if user with valid password exists
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) != 0){
		header("Location: home.php");
	}
	else{
		header("Location: index.php");
	}
}

?>