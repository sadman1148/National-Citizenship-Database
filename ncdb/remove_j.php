<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['info']) && isset($_POST['cn'])){
    $info = $_POST['info'];
    $cn = $_POST['cn'];
	$sql = "DELETE FROM jobs WHERE rank='$info' AND cn='$cn'";
	
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