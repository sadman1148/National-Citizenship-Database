<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['nid']) && isset($_POST['name'])){
	//query for checking if user with valid password exists
	$id = $_POST['nid'];
    $n = $_POST['name'];

	$sql = "INSERT INTO districts VALUES('$id','$n')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: success.php");
	}
	else{
		header("Location: failed.php");
	}
}
?>