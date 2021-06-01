<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['info'])){
    $info = $_POST['info'];
	$sql = "DELETE FROM citizens WHERE id='$info'";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: r_suc.php");
	}
	else{
		header("Location: r_fail.php");
	}
}
?>