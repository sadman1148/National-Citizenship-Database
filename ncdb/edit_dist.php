<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['att']) && isset($_POST['id']) && isset($_POST['info'])){
	
    $att = $_POST['att'];
    $id = $_POST['id'];
    $info = $_POST['info'];
	$sql = "UPDATE districts SET $att='$info' WHERE id='$id'";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: edit_suc.php");
	}
	else{
		header("Location: edit_fail.php");
	}
}
?>