<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['att']) && isset($_POST['id']) && isset($_POST['info']) && isset($_POST['infoe'])){
	
    $att = $_POST['att'];
    $id = $_POST['id'];
    $info = $_POST['info'];
    $infoe = $_POST['infoe'];
    $sql = "UPDATE spouse set $att='$info', md='$infoe' WHERE hid='$id' OR wid='$id'";
	$result = mysqli_query($conn,$sql);
    //Execute above query and return result
    if(mysqli_affected_rows($conn)){
        $sql = "UPDATE citizens set ms='Unmarried' where id='$id'";
        $result = mysqli_query($conn,$sql);
	    if(mysqli_affected_rows($conn)){
		    header("Location: edit_suc.php");
	    }
	    else{
		    header("Location: edit_fail.php");
        }
    }
}
?>